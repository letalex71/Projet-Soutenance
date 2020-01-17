<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UserCustomizationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class, [
                'label' => 'Prénom',
                'required' => 'false',
                'constraints' => [
                    new Length([
                        'min' => 2,
                        'minMessage' => 'Votre prénom doit comporter au moins {{ limit }} caractères',
                        'max' => 128,
                        'maxMessage' => 'Votre prénom doit comporter moins de {{ limit }} caractères',
                    ]),
                ],
            ])
            ->add('lastname', TextType::class, [
                'label' => 'Nom de famille',
                'required' => 'false',
                'constraints' => [
                    new Length([
                        'min' => 2,
                        'minMessage' => 'Votre nom doit comporter au moins {{ limit }} caractères',
                        'max' => 128,
                        'maxMessage' => 'Votre nom doit comporter moins de {{ limit }} caractères',
                    ]),
                ],
            ])
            ->add('birthday', BirthdayType::class, [
                'label' => 'Date de naissance',
                'required' => 'false',
                'format' => 'dd-MM-yyyy'
            ])
            ->add('pseudo', TextType::class, [
                'label' => 'Nom d\'utilisateur',
                'required' => 'false',
                'constraints' => [
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Votre biographie doit comporter au moins {{ limit }} caractères',
                        'max' => 60,
                        'maxMessage' => 'Votre biographie doit comporter moins de {{ limit }} caractères',
                    ]),
                ],
            ])
            ->add('biography', TextAreaType::class, [
                'label' => 'Biographie',
                'required' => 'false',
                'constraints' => [
                    new Length([
                        'min' => 10,
                        'minMessage' => 'Votre biographie doit comporter au moins {{ limit }} caractères',
                        'max' => 500,
                        'maxMessage' => 'Votre biographie doit comporter moins de {{ limit }} caractères',
                    ]),
                ],
            ])
            ->add('Enregistrer', SubmitType::class, [
                'attr' => ['class' => 'btn btn-lg btn-block btn-info']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
