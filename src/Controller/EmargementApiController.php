<?php

namespace App\Controller;

use App\Entity\Formation;
use App\Repository\FormationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;

class EmargementApiController extends AbstractController
{
    #[Route('/emargement/api', name: 'app_emargement_api')]
    public function index(): Response
    {
        return $this->render('emargement_api/index.html.twig', [
            'controller_name' => 'EmargementApiController',
        ]);
    }


    #[Route('/api/formation', name: 'api_formation_list', methods: ['GET'])]
    public function getFormationList(FormationRepository $formationRepository, SerializerInterface $serializer): JsonResponse
    {
        $formationList = $formationRepository->findAll();
        $jsonFormationList = $serializer->serialize($formationList, 'json', []);
        return new JsonResponse($jsonFormationList, Response::HTTP_OK, [], true);
    }

}
