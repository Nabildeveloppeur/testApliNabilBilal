<?php

namespace App\Controller;

use App\Entity\Matiere;
use App\Repository\FormationRepository;
use App\Repository\MatiereRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DomCrawler\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;


class MatiereApiController extends AbstractController
{
    #[Route('/matiere/api', name: 'app_matiere_api')]
    public function index(): Response
    {
        return $this->render('matiere_api/index.html.twig', [
            'controller_name' => 'MatiereApiController',
        ]);
    }

    #[Route('/api/matiere', name: 'api_matiere_list', methods: ['GET'])]
    public function getMatiereList(MatiereRepository  $matiereRepository, SerializerInterface $serializer): JsonResponse
    {
        $matiereList = $matiereRepository->findAll();
        $jsonMatiereList = $serializer->serialize($matiereList, 'json', ['groups' => 'getMatiere']);
        return new JsonResponse($jsonMatiereList, Response::HTTP_OK, [], true);
    }



    #[Route('/api/matiere/{id}', name:"api_album_get", methods:['GET'])]
    public function getMatiere(Int $id, SerializerInterface $serializer,MatiereRepository $matiereRepository): JsonResponse
    {
        $matiere = $matiereRepository->find($id);
        if($matiere){
            $jsonMatiere = $serializer->serialize($matiere, 'json', ['groups' => 'getMatiere']);
            return new JsonResponse($jsonMatiere, Response::HTTP_OK, [], true);
        }
        return new JsonResponse(null, Response::HTTP_NOT_FOUND);
    }

    #[Route('/api/profil', name: 'api_profil', methods: ['GET'])]
    public function getProfil(SerializerInterface $serializer): JsonResponse
    {
        $user = $this->getUser();
        $json = $serializer->serialize($user, 'json');
        return new JsonResponse($json, Response::HTTP_OK, [], true);
    }

    #[Route('/api/matiere', name: 'api_album_new', methods: ['POST'])]
    public function newAlbum(Request $request, SerializerInterface $serializer, EntityManagerInterface $em): JsonResponse
    {
        $album = $serializer->deserialize($request->getContent(), Album::class, 'json');
        $em->persist($album);
        $em->flush();
        $jsonAlbum = $serializer->serialize($album, 'json');
        return new JsonResponse($jsonAlbum, Response::HTTP_CREATED, [], true);
    }

 
}
