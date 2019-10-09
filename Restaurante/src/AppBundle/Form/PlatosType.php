<?php

namespace AppBundle\Form;


use AppBundle\Entity\Restaurante;
use AppBundle\Form\PlatosType;
use AppBundle\Form\RestauranteType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class PlatosType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nombre', TextType::class)
        ->add('descripcion', TextType::class)
        ->add('restaurante', EntityType::class, [
            // looks for choices from this entity
            'class' => Restaurante::class,
        
            // uses the User.username property as the visible option string
            'choice_label' => 'nombre',
        
            // used to render a select box, check boxes or radios
            // 'multiple' => true,
            // 'expanded' => true,
        ])
        ->add('save', SubmitType::class, ['label' => 'Crear Plato']);
        
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Platos'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_platos';
    }

    public function __toString(){
        return '';
    }
}
