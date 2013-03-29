<?php

namespace sosFSO\GRHBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DiplomeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('intitule')
            ->add('type')
            ->add('description')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sosFSO\GRHBundle\Entity\Diplome'
        ));
    }

    public function getName()
    {
        return 'sosfso_grhbundle_diplometype';
    }
}
