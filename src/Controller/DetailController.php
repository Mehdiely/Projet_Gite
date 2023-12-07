<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\EquipementExtRepository;
use App\Repository\EquipementIntRepository;
use App\Repository\GiteRepository;
use App\Repository\ProprioRepository;
use App\Repository\ServiceRepository;

class DetailController extends AbstractController
{
    #[Route('/detail/{id}', name: 'app_detail')]
    public function showDetail(
        $id,
        EquipementExtRepository $equipementExtRepository,
        EquipementIntRepository $equipementIntRepository,
        GiteRepository $giteRepository,
        ProprioRepository $proprioRepository,
        ServiceRepository $serviceRepository,
    ): Response {
        // Récupérer les données depuis les repositories

        $detail = $giteRepository->find($id);
        $equipementExtData = $equipementExtRepository->findBy(['id_giteEEX' => $id]);
        $equipementIntData = $equipementIntRepository->findBy(['gite_idEI' => $id]);
        $giteData = $giteRepository->findBy(['id' => $id]);
        $serviceData = $serviceRepository->findBy(['id_giteS' => $id]);

        // Passer les données à la vue Twig
        return $this->render('detail/index.html.twig', [
            'controller_name' => 'AcceuilController',
            'detail' => $detail,
            'equipementExt' => $equipementExtData,
            'equipementInt' => $equipementIntData,
            'gites' => $giteData,
            'services' => $serviceData,
        ]);
    }
}
