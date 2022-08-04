<?php

namespace App\Entity;

use App\Repository\SurveyRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SurveyRepository::class)]
class Survey
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $gender = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $birthday = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $seance_date = null;

    #[ORM\Column]
    private ?int $service_note = null;

    #[ORM\Column]
    private ?int $call_note = null;

    #[ORM\Column]
    private ?int $renew = null;

    #[ORM\Column(length: 255)]
    private ?string $know_us = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $created_at = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGender(): ?int
    {
        return $this->gender;
    }

    public function setGender(int $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getBirthday(): ?\DateTimeInterface
    {
        return $this->birthday;
    }

    public function setBirthday(\DateTimeInterface $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    public function getSeanceDate(): ?\DateTimeInterface
    {
        return $this->seance_date;
    }

    public function setSeanceDate(\DateTimeInterface $seance_date): self
    {
        $this->seance_date = $seance_date;

        return $this;
    }

    public function getServiceNote(): ?int
    {
        return $this->service_note;
    }

    public function setServiceNote(int $service_note): self
    {
        $this->service_note = $service_note;

        return $this;
    }

    public function getCallNote(): ?int
    {
        return $this->call_note;
    }

    public function setCallNote(int $call_note): self
    {
        $this->call_note = $call_note;

        return $this;
    }

    public function getRenew(): ?int
    {
        return $this->renew;
    }

    public function setRenew(int $renew): self
    {
        $this->renew = $renew;

        return $this;
    }

    public function getKnowUs(): ?string
    {
        return $this->know_us;
    }

    public function setKnowUs(string $know_us): self
    {
        $this->know_us = $know_us;

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
}
