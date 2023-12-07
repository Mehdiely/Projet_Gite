<?php

namespace App\Controller;

use App\Repository\EquipementExtRepository;
use App\Repository\EquipementIntRepository;
use App\Repository\GiteRepository;
use App\Repository\ProprioRepository;
use App\Repository\ServiceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AcceuilController extends AbstractController
{
    #[Route('/home', name: 'app_acceuil')]
    public function ShowAll(
        EquipementExtRepository $equipementExtRepository,
        EquipementIntRepository $equipementIntRepository,
        GiteRepository $giteRepository,
        ProprioRepository $proprioRepository,
        ServiceRepository $serviceRepository
    ): Response {
        // Récupérer les données depuis les repositories
        $equipementExtData = $equipementExtRepository->findAll();
        $equipementIntData = $equipementIntRepository->findAll();
        $giteData = $giteRepository->findAll();
        $proprioData = $proprioRepository->findAll();
        $serviceData = $serviceRepository->findAll();

        // Passer les données à la vue Twig
        return $this->render('acceuil/index.html.twig', [
            'controller_name' => 'AcceuilController',
            'equipementExt' => $equipementExtData,
            'equipementInt' => $equipementIntData,
            'gites' => $giteData,
            'proprios' => $proprioData,
            'services' => $serviceData,
        ]);
    }
}
