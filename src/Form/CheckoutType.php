<?php

namespace App\Form;

use App\Entity\Address;
use App\Entity\Carrier;
use App\Entity\Transport;
use App\Entity\Transporter;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Contracts\Translation\TranslatorInterface;

class CheckoutType extends AbstractType
{
    private TranslatorInterface $translator;

    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $user = $options['user'];

        $builder 
            ->add('address', EntityType::class, [
                'class'=> Address::class,
                'label'=> $this->translator->trans('Select an address', [], 'messages'),
                'required'=>true,
                'multiple'=>false,
                'choices'=>$user->getAddresses(),
                'expanded'=>true
            ])
            ->add('transporter', EntityType::class, [
                'class'=> Transporter::class,
                'choice_label' => function (Transporter $transporter) {
                    $name = $transporter->getName();
                    $description = $this->translator->trans(strtolower($transporter->getDescription()), [], 'messages');
                    $price = ( $transporter->getPrice() / 100 ) . ' € '; // getPrice renvoie une chaîne de prix formatée
            
                    return sprintf('%s - %s - %s', $name, $description, $price);
                },
                'choice_attr' => function(Transporter $transporter) {
                    return ['data-price' => $transporter->getPrice()];
                },
                'multiple'=>false,
                'expanded'=>true,
                'label'=> $this->translator->trans('Select a transporter', [], 'messages'),
            ]);
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'user'=> []
        ]);
    }
}