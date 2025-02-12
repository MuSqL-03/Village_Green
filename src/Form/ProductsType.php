<?php

namespace App\Form;

use App\Entity\Categories;
use App\Entity\Fournisseur;
use App\Entity\Products;
use App\Repository\CategoriesRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('description')
            ->add('prix')
            ->add('stock')
            ->add('created_at', null, [
                'widget' => 'single_text',
            ])
            ->add('referenceFournisseur')
            ->add('photo')
            ->add('slug')
            ->add('categories', EntityType::class, [
                'class' => Categories::class,
                'choice_label' => 'nom',
                'label' => 'Catégorie',
                'group_by' => 'parent.nom',
                'query_builder' => function(CategoriesRepository $cr){
                   return $cr->createQueryBuilder('c')
                   ->where('c.parent IS NOT NULL')
                   ->orderBy('c.nom', 'ASC'); 
                }
            ])
            ->add('fournisseur', EntityType::class, [
                'class' => Fournisseur::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Products::class,
        ]);
    }
}
