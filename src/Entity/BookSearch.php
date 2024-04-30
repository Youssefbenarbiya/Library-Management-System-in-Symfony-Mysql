<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

class BookSearch
{
private $book;
public function getBook(): ?Book
{
return $this->book;
}
public function setBook(?Book $book): self
{
$this->book = $book;
return $this;
}

}