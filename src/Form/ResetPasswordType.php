<?php
namespace App\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
class ResetPasswordType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options)
{
$builder
->add('new_password', RepeatedType::class, [
'type' => PasswordType::class,
'mapped' => false,
'invalid_message' => 'Passwords are differents',
'required' => true,
'first_options' => [
'label' => 'New password', 'attr' => [
'placeholder' => 'New password'
]
],
'second_options' => [
'label' => 'Confirm new password', 'attr' => [
'placeholder' => 'Confirm new password'
]
],
])
->add('submit', SubmitType::class, [
'label' => "Update my password",
'attr' => [
'class' => 'btn btn-info btn-block'
]
]);
}
public function configureOptions(OptionsResolver $resolver)
{
$resolver->setDefaults([
    // Configure your form options here
]);
}
}
