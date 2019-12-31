<?php

namespace App\Form;

use App\Entity\SpipArticles;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SpipArticlesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('descriptif')
            ->add('texte')
            ->add('idSecteur')
            ->add('statut')
            ->add('lang')
            ->add('langueChoisie')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SpipArticles::class,
        ]);
    }
}
