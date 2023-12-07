<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;


// ...

class VilleFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('selectedVille', ChoiceType::class, [
                'choices' => array_combine($options['gite_villes'], $options['gite_villes']),
                'label' => 'Choisissez une ville',
                'placeholder' => 'Sélectionnez une ville', // Ajoutez cette ligne
                'required' => false, // Rendre le champ non obligatoire
                'attr' => ['class' => 'form-control'],
            ])
            ->add('selectedDepartement', ChoiceType::class, [
                'choices' => array_combine($options['gite_departements'], $options['gite_departements']),
                'label' => 'Choisissez un département',
                'placeholder' => 'Sélectionnez un département', // Ajoutez cette ligne
                'required' => false, // Rendre le champ non obligatoire
                'attr' => ['class' => 'form-control'],
            ])
            ->add('selectedRegion', ChoiceType::class, [
                'choices' => array_combine($options['gite_regions'], $options['gite_regions']),
                'label' => 'Choisissez une région',
                'placeholder' => 'Sélectionnez une région', // Ajoutez cette ligne
                'required' => false, // Rendre le champ non obligatoire
                'attr' => ['class' => 'form-control'],
            ])

            ->add('piscinepriv', CheckboxType::class, [
                'label'    => 'Piscine Privée',
                'required' => false,
            ])

            ->add('piscinepart', CheckboxType::class, [
                'label'    => 'Piscine Partagée',
                'required' => false,
            ])
            ->add('bbq', CheckboxType::class, [
                'label'    => 'Barbecue',
                'required' => false,
            ])
            ->add('terrasse', CheckboxType::class, [
                'label'    => 'Terrasse',
                'required' => false,
            ])
            ->add('tennis', CheckboxType::class, [
                'label'    => 'Tennis',
                'required' => false,
            ])

            ->add('pingpong', CheckboxType::class, [
                'label'    => 'PingPong',
                'required' => false,
            ])




            ->add('lavevaiss', CheckboxType::class, [
                'label'    => 'Lave-Vaisselle',
                'required' => false,
            ])
            ->add('lavelinge', CheckboxType::class, [
                'label'    => 'Lave-Linge',
                'required' => false,
            ])
            ->add('clim', CheckboxType::class, [
                'label'    => 'Climatisation',
                'required' => false,
            ])

            ->add('tele', CheckboxType::class, [
                'label'    => 'Télévision',
                'required' => false,
            ])




            ->add('loclinge', CheckboxType::class, [
                'label'    => 'Location de linge',
                'required' => false,
            ])
            ->add('menage', CheckboxType::class, [
                'label'    => 'Ménage de fin de séjour',
                'required' => false,
            ])
            ->add('internet', CheckboxType::class, [
                'label'    => 'Internet',
                'required' => false,
            ])

           ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => null,
            'gite_villes' => [],
            'gite_departements' => [],
            'gite_regions' => [],
        ]);
    }
}

// ...
