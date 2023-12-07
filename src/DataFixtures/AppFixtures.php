<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use App\Entity\Gite;
use App\Entity\Proprio;
use App\Entity\EquipementInt;
use App\Entity\EquipementExt;
use App\Entity\Service;
use App\Entity\Tarif;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        // Création de quelques propriétaires
        $proprietaires = [];
        for ($i = 0; $i < 5; $i++) {
            $proprietaire = new Proprio();
            $proprietaire->setNom($faker->lastName());
            $proprietaire->setHoraire($faker->time());
            $proprietaire->setNumero($faker->randomNumber());
            $proprietaire->setEmail($faker->email());
            $manager->persist($proprietaire);
            $proprietaires[] = $proprietaire;
        }

        // Assurez-vous que les propriétaires sont flushés avant de les utiliser
        $manager->flush();

        foreach ($proprietaires as $proprietaire) {
            for ($i = 0; $i < 2; $i++) {
                $gite = new Gite();
                $gite->setRegion($faker->word);
                $gite->setNomGite($faker->word);
                $gite->setVille($faker->city);
                $gite->setDepartement($faker->word); // Ajoutez cette propriété s'il existe dans votre entité Gite
                $gite->setNombreChambre($faker->numberBetween(1, 5));
                $gite->setSurface($faker->numberBetween(50, 200));
                $gite->setCouchage($faker->numberBetween(2, 10));
                $gite->setAnimaux($faker->boolean);

                // Associez le gîte au propriétaire
              $gite->setIdProprio($proprietaire);

                // Ajoutez des équipements intérieurs au hasard
                $equipementInt = new EquipementInt();
                $equipementInt->setLaveVaiss(true);
                $equipementInt->setLaveVaissPrix($faker->numberBetween(5, 20));
                $equipementInt->setLaveLinge(true);
                $equipementInt->setLaveLingePrix($faker->numberBetween(5, 20));
                $equipementInt->setClimatisation(true);
                $equipementInt->setClimatisationPrix($faker->numberBetween(5, 20));
                $equipementInt->setTele(false);
                $equipementInt->setTelePrix($faker->numberBetween(5, 20));

                // Associez l'équipement intérieur au gîte
                $equipementInt->setGiteIdEI($gite);

                // ... autres propriétés de l'équipement intérieur
                $manager->persist($equipementInt);

                // Ajoutez des équipements extérieurs au hasard
                $equipementExt = new EquipementExt();
                $equipementExt->setTerasse(true);
                $equipementExt->setTerassePrix($faker->numberBetween(5, 20));
                $equipementExt->setBbq(true);
                $equipementExt->setBbqPrix($faker->numberBetween(5, 20));
                $equipementExt->setPiscinePriv(true);
                $equipementExt->setPiscinePrivPrix($faker->numberBetween(10, 50));
                $equipementExt->setPiscinePart(true);
                $equipementExt->setPiscinePartPrix($faker->numberBetween(5, 20));
                $equipementExt->setTennis(true);
                $equipementExt->setTennisPrix($faker->numberBetween(5, 20));
                $equipementExt->setPingpong(false);
                $equipementExt->setPingpongPrix(0);

                // Associez l'équipement extérieur au gîte
                $equipementExt->setIdGiteEEX($gite);

                // ... autres propriétés de l'équipement extérieur
                $manager->persist($equipementExt);

                // Ajoutez des services au hasard
                $service = new Service();
                $service->setLocLinge(true);
                $service->setPrixLocLinge($faker->numberBetween(5, 20));
                $service->setMenage(true);
                $service->setPrixMenage($faker->numberBetween(5, 20));
                $service->setInternet(true);
                $service->setPrixInternet($faker->numberBetween(5, 20));
                $service->setAnimaux(true);
                $service->setAnimauxPrix($faker->numberBetween(5, 20));

                // Associez le service au gîte
                $service->setIdGiteS($gite);

                // ... autres propriétés du service
                $manager->persist($service);

                // Ajoutez des tarifs au hasard
                $tarif = new Tarif();
                $tarif->setLocHiver($faker->numberBetween(50, 100));
                $tarif->setLocEte($faker->numberBetween(100, 200));

                // Associez le tarif au gîte
                $tarif->setIdGiteT($gite);

                // ... autres propriétés du tarif
                $manager->persist($tarif);

                $manager->persist($gite);
            }
        }

        // Après avoir ajouté tous les gîtes, flush les données dans la base de données
        $manager->flush();
    }
}
