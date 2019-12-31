<?php

namespace App\Form;

use App\Entity\SpipRubriques;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

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
            ->add('statutTmp')
            ->add('profondeur')
            ->add('maj', DateType::class)
            ->add('date', DateType::class)
            ->add('dateTmp', DateType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SpipRubriques::class,
        ]);
    }
}
