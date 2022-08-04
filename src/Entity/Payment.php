<?php

namespace App\Entity;

use App\Repository\PaymentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaymentRepository::class)]
class Payment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 250, nullable: true)]
    private ?string $rpps = null;

    #[ORM\Column(length: 250, nullable: true)]
    private ?string $lastname = null;

    #[ORM\Column(length: 250, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(length: 1500, nullable: true)]
    private ?string $message = null;

    #[ORM\Column(length: 250, nullable: true)]
    private ?string $firstname = null;

    #[ORM\Column]
    private ?int $type = null;

    #[ORM\Column]
    private ?int $price = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $created_at = null;

    #[ORM\Column(length: 250)]
    private ?string $trans_id = null;

    #[ORM\Column(length: 250, nullable: true)]
    private ?string $brandCard = null;

    #[ORM\Column(length: 250, nullable: true)]
    private ?string $card_number = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    #[ORM\Column(nullable: true)]
    private ?int $mode = null;

    #[ORM\Column(length: 4, nullable: true)]
    private ?string $membership_year = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRpps(): ?string
    {
        return $this->rpps;
    }

    public function setRpps(?string $rpps): self
    {
        $this->rpps = $rpps;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(?string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getTransId(): ?string
    {
        return $this->trans_id;
    }

    public function setTransId(string $trans_id): self
    {
        $this->trans_id = $trans_id;

        return $this;
    }

    public function getBrandCard(): ?string
    {
        return $this->brandCard;
    }

    public function setBrandCard(?string $brandCard): self
    {
        $this->brandCard = $brandCard;

        return $this;
    }

    public function getCardNumber(): ?string
    {
        return $this->card_number;
    }

    public function setCardNumber(?string $card_number): self
    {
        $this->card_number = $card_number;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getMode(): ?int
    {
        return $this->mode;
    }

    public function setMode(?int $mode): self
    {
        $this->mode = $mode;

        return $this;
    }

    public function getMembershipYear(): ?string
    {
        return $this->membership_year;
    }

    public function setMembershipYear(?string $membership_year): self
    {
        $this->membership_year = $membership_year;

        return $this;
    }
}
