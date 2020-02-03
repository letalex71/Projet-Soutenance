<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Eo\HoneypotBundle\Form\Type\HoneypotType;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fullName', TextType::class, [
                'mapped' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez renseigner votre nom',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Votre nom doit comporter au moins {{ limit }} caractères',
                        'max' => 120,
                        'maxMessage' => 'Votre nom doit comporter moins de {{ limit }} caractères',
                    ]),
                ],
            ])
            ->add('fromEmail', EmailType::class)
            ->add('message', TextareaType::class, [
                'mapped' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez composer votre message',
                    ]),
                    new Length([
                        'min' => 25,
                        'minMessage' => 'Votre message doit faire au moins {{ limit }} caractères',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                        'maxMessage' => 'Votre message doit moins de {{ limit }} caractères',
                    ]),
                ],
            ])
            ->add('HoneyPot', HoneypotType::class)
            ->add('Envoyer', SubmitType::class, [
                'attr' => ['class' => 'btn btn-lg btn-block btn-info']
            ])
        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}