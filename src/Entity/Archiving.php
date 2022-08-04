<?php

namespace App\Entity;

use App\Repository\ArchivingRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArchivingRepository::class)]
class Archiving
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $created_by_id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $created_at = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_new_year = null;

    #[ORM\Column(length: 4)]
    private ?string $membership_year = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreatedById(): ?int
    {
        return $this->created_by_id;
    }

    public function setCreatedById(int $created_by_id): self
    {
        $this->created_by_id = $created_by_id;

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

    public function getDateNewYear(): ?\DateTimeInterface
    {
        return $this->date_new_year;
    }

    public function setDateNewYear(\DateTimeInterface $date_new_year): self
    {
        $this->date_new_year = $date_new_year;

        return $this;
    }

    public function getMembershipYear(): ?string
    {
        return $this->membership_year;
    }

    public function setMembershipYear(string $membership_year): self
    {
        $this->membership_year = $membership_year;

        return $this;
    }
}
