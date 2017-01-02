<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProjetType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('type')
                ->add('descriptif')
                ->add('surface')
                ->add('surfaceHabitable')
                ->add('surfaceARenover')
                ->add('typeRenovation')
                ->add('apport')
                ->add('taxeFonciere')
                ->add('montantTravaux')
                ->add('prixMeubles')
                ->add('tauxCredit')
                ->add('prixVente')
                ->add('dureeCredit')
                ->add('loyerMensuel')
                ->add('nombreMoisPlein')
                ->add('chargesCopropriete')
                ->add('chargesEntretien')
                ->add('fraisGestion')
                ->add('lienAnnonce')
                ->add('ageBien')        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Projet',
            'csrf_protection' => false
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_projet';
    }


}
