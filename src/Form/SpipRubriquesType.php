<?php

namespace App\Form;

use App\Entity\SpipRubriques;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SpipRubriquesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idParent')
            ->add('titre')
            ->add('descriptif')
            ->add('texte')
            ->add('idSecteur')
            ->add('statut')
            ->add('lang')
            ->add('langueChoisie')
            ->add('statutTmp')
            ->add('profondeur')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SpipRubriques::class,
        ]);
    }
}
