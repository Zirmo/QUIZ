<?php

namespace App\Controller;

use App\Entity\Question;
use App\Repository\QuestionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\SerializerInterface;

class QuestionController extends AbstractController
{
    private SerializerInterface $serializer;
    private EntityManagerInterface $entityManager;
    private QuestionRepository $questionRepository;

    public function __construct(SerializerInterface $serializer,QuestionRepository $questionRepository, EntityManagerInterface $entityManager)
    {

        $this->questionRepository = $questionRepository;
        $this->entityManager = $entityManager ;
        $this->serializer = $serializer;
    }

    #[Route('/question', name: 'app_question')]
    public function index(): Response
    {
        return $this->render('question/index.html.twig', [
            'controller_name' => 'QuestionController',
        ]);
    }

    #[Route('/api/reponses/{idQuestion}', name: 'api/app_themes',methods: ['GET'])]
    public function getReponses(int $idQuestion): Response
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
