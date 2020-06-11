<?php

namespace BlogBundle\Form;

use blackknight467\StarRatingBundle\Form\RatingType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentaireType extends AbstractType
{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idArticle',EntityType::class,array('class'=>'BlogBundle\Entity\Article', 'choice_label'=>'titre', 'disabled'   => false, 'disabled'=>$options['idArticle_disabled']))
            ->add('idUser',EntityType::class,array('class'=>'BlogBundle\Entity\User', 'choice_label'=>'username', 'disabled'   => false, 'disabled'=>$options['idUser_disabled']))
            ->add('contenu')
            ->add('dateAjout',TextType::class,array('disabled'=>$options['dateAjout_disabled']))
            ->add('dateModif',TextType::class,array('disabled'=>$options['dateModif_disabled']))
            ->add('nbjaime',RatingType::class, [
                'stars' => 4,

            ],NumberType::class,array('disabled'=>$options['nbjaime_disabled']));
    
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BlogBundle\Entity\Commentaire'
        ));

        $resolver->setDefaults(array('nbjaime_disabled'=>false));
        $resolver->setDefaults(array('dateAjout_disabled'=>false));
        $resolver->setDefaults(array('dateModif_disabled'=>false));
        $resolver->setDefaults(array('idUser_disabled'=>false));
        $resolver->setDefaults(array('idArticle_disabled'=>false));

    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'blogbundle_commentaire';
    }


}
