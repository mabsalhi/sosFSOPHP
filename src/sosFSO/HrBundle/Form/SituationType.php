<?php

namespace sosFSO\HrBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SituationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('echelon')
            ->add('numeroInference')
            ->add('dateEffets','date',array(
	            'widget' => 'single_text',
	            'format' => 'dd-MM-yyyy',
	            'attr' => array('class' => 'date')
	        ))
            ->add('remarques')
            ->add('cadre')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sosFSO\HrBundle\Entity\Situation'
        ));
    }

    public function getName()
    {
        return 'sosfso_hrbundle_situationtype';
    }
}
