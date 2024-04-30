<?php

namespace App\Entity;

use App\Repository\BorrowingRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BorrowingRepository::class)]
class Borrowing
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Student $student = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Book $book = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateBorrowed = null;

    #[ORM\Column]
    private ?bool $bookReturned = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStudent(): ?Student
    {
        return $this->student;
    }

    public function setStudent(?Student $student): static
    {
        $this->student = $student;

        return $this;
    }

    public function getBook(): ?Book
    {
        return $this->book;
    }

    public function setBook(?Book $book): static
    {
        $this->book = $book;

        return $this;
    }

    public function getDateBorrowed(): ?\DateTimeInterface
    {
        return $this->dateBorrowed;
    }

    public function setDateBorrowed(\DateTimeInterface $dateBorrowed): static
    {
        $this->dateBorrowed = $dateBorrowed;

        return $this;
    }

    public function isBookReturned(): ?bool
    {
        return $this->bookReturned;
    }

    public function setBookReturned(bool $bookReturned): static
    {
        $this->bookReturned = $bookReturned;

        return $this;
    }

}
