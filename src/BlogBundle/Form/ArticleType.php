<?php

namespace BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;


class ArticleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', null, [
                'required'   => false,
            ])
            ->add('contenu', CKEditorType::class, array(
                'config' => array( 'uiColor' => '#ffffff', 'filebrowserBrowseRoute' => 'elfinder',
                    //...
                )))
            ->add('dateAjout')
            ->add('dateModif', null ,[
                'required'   => false,
                'empty_data' => '',
            ])
            ->add('photopath', FileType::class, array('label' => 'Image(JPG)', 'data_class'=>null),[
                'required'   => false,
                'empty_data' => '',
            ]);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BlogBundle\Entity\Article'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'blogbundle_article';
    }


}
