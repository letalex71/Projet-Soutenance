<?php

namespace App\Form;

use App\Entity\Comment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;


class CommentFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('content', TextAreaType::class, [
            'label' => 'Ajouter un commentaire',
            'label_attr' => ['class' => 'h5 mt-4 mb-2'],
            'constraints' => [
                new NotBlank([
                    'message' => 'Veuillez entrer votre commentaire',
                ]),
                new Length([
                    'min' => 10,
                    'minMessage' => 'Votre commentaire doit comporter au moins {{ limit }} caractères',
                    'max' => 500,
                    'maxMessage' => 'Votre commentaire doit comporter moins de {{ limit }} caractères',
                ]),
            ],
        ])
        ->add('Envoyer', SubmitType::class, [
            'attr' => ['class' => 'btn btn-lg btn-block btn-success'],
        ])
        ->add('itemName', HiddenType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Comment::class,
        ]);
    }
}
