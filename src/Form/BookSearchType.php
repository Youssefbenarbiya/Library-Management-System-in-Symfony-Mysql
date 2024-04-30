<?php
namespace App\Form;
use App\Entity\Book;
use App\Entity\BookSearch;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
class BookSearchType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options): void
{
$builder
->add('book',EntityType::class,['class' => Book::class,
'choice_label' => 'title' ,
'label' => 'Book' ]); 
}
public function configureOptions(OptionsResolver $resolver): void
{
$resolver->setDefaults([
'data_class' => BookSearch::class,
]);
}
}