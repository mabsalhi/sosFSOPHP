<?php

namespace sosFSO\GRHBundle\Form;

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
            ->add('nomAr')
            ->add('prenomAr')
            ->add('cin')
            ->add('som')
            ->add('posteBudgetaire')
            ->add('dateNaissance')
            ->add('lieuNaissance')
            ->add('etatMatrimonial')
            ->add('sexe')
            ->add('nbEnfants')
            ->add('adresse')
            ->add('numTelephonne')
            ->add('dateRecrutement')
            ->add('photo')
            ->add('diplomes')
            ->add('situations')
            ->add('affectations')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sosFSO\GRHBundle\Entity\Personne'
        ));
    }

    public function getName()
    {
        return 'sosfso_grhbundle_personnetype';
    }
}
