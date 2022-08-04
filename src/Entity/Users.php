<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UsersRepository::class)]
class Users
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $civility = null;

    #[ORM\Column(length: 255)]
    private ?string $last_name = null;

    #[ORM\Column(length: 250)]
    private ?string $first_name = null;

    #[ORM\Column(length: 255)]
    private ?string $username = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    private ?string $job_name = null;

    #[ORM\Column(length: 255)]
    private ?string $rpps_number = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $pro_phone = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $perso_phone = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $address = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cabinet_repere = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $iban = null;

    #[ORM\Column(nullable: true)]
    private ?int $ensure = null;

    #[ORM\Column(nullable: true)]
    private ?int $can_stagiaire = null;

    #[ORM\Column(nullable: true)]
    private ?int $enabled = null;

    #[ORM\Column(nullable: true)]
    private ?int $is_admin = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $created_at = null;

    #[ORM\Column(length: 255)]
    private ?string $postal_code = null;

    #[ORM\Column(length: 255)]
    private ?string $city = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $public_phone = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $private_phone = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $password_requested_at = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $token = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCivility(): ?string
    {
        return $this->civility;
    }

    public function setCivility(string $civility): self
    {
        $this->civility = $civility;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function setLastName(string $last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getJobName(): ?string
    {
        return $this->job_name;
    }

    public function setJobName(string $job_name): self
    {
        $this->job_name = $job_name;

        return $this;
    }

    public function getRppsNumber(): ?string
    {
        return $this->rpps_number;
    }

    public function setRppsNumber(string $rpps_number): self
    {
        $this->rpps_number = $rpps_number;

        return $this;
    }

    public function getProPhone(): ?string
    {
        return $this->pro_phone;
    }

    public function setProPhone(?string $pro_phone): self
    {
        $this->pro_phone = $pro_phone;

        return $this;
    }

    public function getPersoPhone(): ?string
    {
        return $this->perso_phone;
    }

    public function setPersoPhone(?string $perso_phone): self
    {
        $this->perso_phone = $perso_phone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getCabinetRepere(): ?string
    {
        return $this->cabinet_repere;
    }

    public function setCabinetRepere(?string $cabinet_repere): self
    {
        $this->cabinet_repere = $cabinet_repere;

        return $this;
    }

    public function getIban(): ?string
    {
        return $this->iban;
    }

    public function setIban(?string $iban): self
    {
        $this->iban = $iban;

        return $this;
    }

    public function getEnsure(): ?int
    {
        return $this->ensure;
    }

    public function setEnsure(?int $ensure): self
    {
        $this->ensure = $ensure;

        return $this;
    }

    public function getCanStagiaire(): ?int
    {
        return $this->can_stagiaire;
    }

    public function setCanStagiaire(?int $can_stagiaire): self
    {
        $this->can_stagiaire = $can_stagiaire;

        return $this;
    }

    public function getEnabled(): ?int
    {
        return $this->enabled;
    }

    public function setEnabled(?int $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    public function getIsAdmin(): ?int
    {
        return $this->is_admin;
    }

    public function setIsAdmin(?int $is_admin): self
    {
        $this->is_admin = $is_admin;

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

    public function getPostalCode(): ?string
    {
        return $this->postal_code;
    }

    public function setPostalCode(string $postal_code): self
    {
        $this->postal_code = $postal_code;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getPublicPhone(): ?string
    {
        return $this->public_phone;
    }

    public function setPublicPhone(?string $public_phone): self
    {
        $this->public_phone = $public_phone;

        return $this;
    }

    public function getPrivatePhone(): ?string
    {
        return $this->private_phone;
    }

    public function setPrivatePhone(?string $private_phone): self
    {
        $this->private_phone = $private_phone;

        return $this;
    }

    public function getPasswordRequestedAt(): ?\DateTimeInterface
    {
        return $this->password_requested_at;
    }

    public function setPasswordRequestedAt(?\DateTimeInterface $password_requested_at): self
    {
        $this->password_requested_at = $password_requested_at;

        return $this;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(?string $token): self
    {
        $this->token = $token;

        return $this;
    }
}
