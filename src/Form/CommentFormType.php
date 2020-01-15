<?php

namespace App\Form;

use App\Entity\Comments;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('content', [
                'mapped' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Votre message ne doit pas être vide',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Votre message doit contenir au moins {{ limit }} caractères',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                        'maxMessage' => 'Votre message dépasse la limite autorisée ({{ limit }} caractères)',
                    ]),
                ],
            ])
            ->add('itemId')
            ->add('publicationDate')
            ->add('type')
            ->add('author')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Comments::class,
        ]);
    }
}
