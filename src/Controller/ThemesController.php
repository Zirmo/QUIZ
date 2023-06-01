<?php

namespace App\Controller;

use App\Entity\Question;
use App\Repository\QuestionRepository;
use App\Repository\ThemeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Query\ResultSetMappingBuilder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class ThemesController extends AbstractController
{
    private SerializerInterface $serializer;
    private ThemeRepository $themeRepository;
    private QuestionRepository $questionRepository;
    private EntityManagerInterface $entityManager;

    /**
     * @param SerializerInterface $serializer
     * @param ThemeRepository $themeRepository
     * @param QuestionRepository $questionRepository
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(SerializerInterface $serializer, ThemeRepository $themeRepository,QuestionRepository $questionRepository,EntityManagerInterface $entityManager)
    {
        $this->serializer = $serializer;
        $this->themeRepository = $themeRepository;
        $this->questionRepository = $questionRepository;
        $this->entityManager = $entityManager;
    }

    #[Route('/api/themes', name: 'api/themes',methods: ['GET'])]
    public function index(): Response
    {
        $themes = $this->themeRepository->findAll();

        $postsJson = $this->serializer->serialize($themes,'json',['groups' => 'list_themes']);

        return new Response($postsJson,Response::HTTP_OK,['Content-type' => 'application/json;charset=utf-8']);
    }


    #[Route('/api/themes/{id}/{nbQuestions}/questions', name: 'api_getQuestionsByThemes', methods: ['GET'])]
    public function getQuestionsTheme($id,$nbQuestions): Response
    {
        // Rechercher les posts dans la base de donnée


        $themes = $this->themeRepository->findBy(["id"=>$id]);
        if(!$themes){
            return $this->generateError("Le theme demandé n'existe pas",Response::HTTP_NOT_FOUND);
        }
        $sql = 'SELECT q.id, q.intitule, t.id AS theme_id, t.libelle AS theme_name FROM question q JOIN theme t ON q.theme_id_id = t.id 
        WHERE t.id = :id ORDER BY RAND() LIMIT :nb';

// create the result set mapping
        $rsm = new ResultSetMappingBuilder($this->entityManager);
        $rsm->addRootEntityFromClassMetadata(Question::class, 'q');



// create the native query
        $query = $this->entityManager->createNativeQuery($sql, $rsm);
        $query->setParameter('id', $id);
        $query->setParameter('nb', $nbQuestions, \PDO::PARAM_INT);

// get the results
        $questions = $query->getResult();


        if ($nbQuestions > count($questions)){
            return $this->generateError("Ce theme ne contient pas autant de questions", Response::HTTP_NOT_FOUND);
        }elseif ($nbQuestions==0){
            return $this->generateError("Le nombre de question doit etre superieur à 0",Response::HTTP_NOT_FOUND);
        }

        $questionJson = $this->serializer->serialize($questions, 'json' ,['groups'=>'get_questions_theme']);

        return new Response($questionJson , Response::HTTP_OK, ['content-type' => 'application/json']);

        //shuffle($questions);
        //$randQuestions = array_slice($questions,0,$nbQuestions);


    }

    private function generateError( string $message, int $status) : Response {
        $erreur = [
            'status' => $status,
            'message' => $message
        ];
        return new Response(json_encode($erreur),$status,["content-type" => "application/json"]);
    }


    #[Route('/api/reponses/{idQuestion}', name: 'api/app_themes',methods: ['GET'])]
    public function getReponsesByQuestion(int $idQuestion): Response
    {

        $reponses = [];

        $questionReponses = $this->entityManager->getRepository(Question::class)->findBy(["id" => $idQuestion]);


        foreach ($questionReponses as $questionReponse) {

            $reponses[] = $questionReponse->getReponses();

        }

        $postsJson = $this->serializer->serialize($reponses,'json',['groups' => 'list_reponses']);
        return new Response($postsJson,Response::HTTP_OK,['Content-type' => 'application/json;charset=utf-8']);
    }

}
