<?php

namespace sosFSO\HrBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PersonneType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('prenom2')
            ->add('cin')
            ->add('som')
            ->add('nomAr')
            ->add('prenomAr')
            ->add('dateNaissance')
            ->add('lieuNaissance')
            ->add('etatMatrimonial')
            ->add('telephonne')
            ->add('posteBudgetaire')
            ->add('affectation')
            ->add('diplomes')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sosFSO\HrBundle\Entity\Personne'
        ));
    }

    public function getName()
    {
        return 'sosfso_hrbundle_personnetype';
    }
}
