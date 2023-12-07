<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\VilleFormType;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Gite;

use App\Repository\EquipementExtRepository;
use App\Repository\EquipementIntRepository;
use App\Repository\GiteRepository;
use App\Repository\ProprioRepository;
use App\Repository\ServiceRepository;


class RechercheController extends AbstractController
{
    #[Route('/rechercher', name: 'app_recherche')]


   // ...

public function recherche(Request $request, GiteRepository $giteRepository,
EquipementExtRepository $equipementExtRepository
): Response
{
    $gites = $giteRepository->findAll();

    $giteVilles = [];
    $gitedep = [];
    $giteregion = [];
    foreach ($gites as $gite) {
        $giteVilles[] = $gite->getVille();
        $gitedep[] = $gite->getDepartement();
        $giteregion[] = $gite->getRegion();
    }

    $giteVilles = array_unique($giteVilles);
    sort($giteVilles);
    $gitedep = array_unique($gitedep);
    sort($gitedep);
    $giteregion = array_unique($giteregion);
    sort($giteregion);

    $form = $this->createForm(VilleFormType::class, null, [
        'gite_villes' => $giteVilles,
        'gite_departements' => $gitedep,
        'gite_regions' => $giteregion,
    ]);

    $form->handleRequest($request);

    $gites = [];

   
       
    if ($form->isSubmitted() && $form->isValid()) {
        $criteria = []; // Initialisez un tableau de critères

        $selectedVille = $form->get('selectedVille')->getData();
        if ($selectedVille) {
            $criteria['ville'] = $selectedVille;
        }

        $selectedRegion = $form->get('selectedRegion')->getData();
        if ($selectedRegion) {
            $criteria['region'] = $selectedRegion;
        }

        $selectedDepartement = $form->get('selectedDepartement')->getData();
        if ($selectedDepartement) {
            $criteria['departement'] = $selectedDepartement;
        }

    


        // Utilisez les critères combinés pour filtrer les gîtes
        $equipementCriteria = [];
        if ($form->get('piscinepriv')->getData()) {
            $equipementCriteria['piscine_priv'] = true;
        }
        if ($form->get('bbq')->getData()) {
            $equipementCriteria['bbq'] = true;
        }
        if ($form->get('piscinepart')->getData()) {
            $equipementCriteria['piscine_part'] = true;
        }
        if ($form->get('terrasse')->getData()) {
            $equipementCriteria['terasse'] = true;
        }
        if ($form->get('tennis')->getData()) {
            $equipementCriteria['tennis'] = true;
        }
        if ($form->get('pingpong')->getData()) {
            $equipementCriteria['pingpong'] = true;
        }

        $equipementIntCriteria = [];
        if ($form->get('lavevaiss')->getData()) {
            $equipementIntCriteria['Lave_vaiss'] = true;
        }
        if ($form->get('lavelinge')->getData()) {
            $equipementIntCriteria['lave_linge'] = true;
        }
        if ($form->get('clim')->getData()) {
            $equipementIntCriteria['climatisation'] = true;
        }
        if ($form->get('tele')->getData()) {
            $equipementIntCriteria['tele'] = true;
        }
       

        $serviceCriteria = [];
        if ($form->get('loclinge')->getData()) {
            $serviceCriteria['loc_linge'] = true;
        }
        if ($form->get('menage')->getData()) {
            $serviceCriteria['menage'] = true;
        }
        if ($form->get('piscinepart')->getData()) {
            $serviceCriteria['piscine_part'] = true;
        }
        if ($form->get('internet')->getData()) {
            $serviceCriteria['internet'] = true;
        }
        


        $gites = $giteRepository->findByCriteriaAndEquipements($criteria,$serviceCriteria,$equipementIntCriteria, $equipementCriteria);
    
  
    }

    return $this->render('recherche/recherche.html.twig', [
        'form' => $form->createView(),
        'gites' => $gites,
    ]);
}

// ...

}


