<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Color;
use App\Entity\Gender;
use App\Entity\Product;
use App\Entity\Size;
use App\Entity\Sizes;
use App\Model\SearchData;
use Doctrine\DBAL\Types\BooleanType;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Contracts\Translation\TranslatorInterface;

class SearchProductType extends AbstractType
{

    private TranslatorInterface $translator;

    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('product', TextType::class,[
                'label' => false,
                'required' => false,
                'attr' => [
                    'placeholder' => 'name, description or keyword',
                ],
            ])
            ->add('category', EntityType::class,[
                'class' =>Category::class,
                'choice_label' => function (Category $category) {
                    return $this->translator->trans(strtolower($category->getName()), [], 'messages');
                },
                'required' => false,
                'attr' =>[
                    'class' => 'js-categorie-multiple'
                ]
            ])

            ->add('gender', EntityType::class,[
                'class' =>Gender::class,
                'choice_label' => function (Gender $gender) {
                    return $this->translator->trans(strtolower($gender->getName()), [], 'messages');
                },
                'required' => false,
                'attr' =>[
                    'class' => 'js-categorie-multiple'
                ]
            ])
            ->add('color', EntityType::class,[
                'class' =>Color::class,
                'choice_label' => function (Color $color) {
                    return $this->translator->trans(strtolower($color->getName()), [], 'messages');
                },
                'required' => false,
                'attr' =>[
                    'class' => 'js-categorie-multiple'
                ]
            ])
            ->add('Search', SubmitType::class, [
                'label'=> 'Search',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // 'data_class' => SearchData::class,
            // 'method' => 'GET',
            // 'csrf_protection' => false
        ]);
    }
}
