<?php

namespace App\Entity;

use App\Repository\SiteInformationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SiteInformationRepository::class)]
class SiteInformation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(nullable: true)]
    private ?int $tva = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $street = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $city = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $codePostal = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $phone = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $copyright = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $hours = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $termsConditions = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nameCategory = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nameAddress = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $question = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $descrrptionQuestion = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nameSubscribe = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $descriptionSubscribe = null;


    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
        
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }
    

    public function setTermsConditions(?string $termsConditions): static
    {
        $this->termsConditions = $termsConditions;

        return $this;
    }

    public function getTermsConditions(): ?string
    {
        return $this->termsConditions;
    }

    public function getTva(): ?int
    {
        return $this->tva;
    }

    public function setTva(?int $tva): static
    {
        $this->tva = $tva;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getHours(): ?string
    {
        return $this->hours;
    }

    public function setHours(?string $hours): static
    {
        $this->hours = $hours;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): static
    {
        $this->street = $street;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): static
    {
        $this->city = $city;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    public function setCodePostal(?string $codePostal): static
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): static
    {
        $this->phone = $phone;

        return $this;
    }

    public function getCopyright(): ?string
    {
        return $this->copyright;
    }

    public function setCopyright(?string $copyright): static
    {
        $this->copyright = $copyright;

        return $this;
    }

    public function getNameCategory(): ?string
    {
        return $this->nameCategory;
    }

    public function setNameCategory(?string $nameCategory): static
    {
        $this->nameCategory = $nameCategory;

        return $this;
    }

    public function getNameAddress(): ?string
    {
        return $this->nameAddress;
    }

    public function setNameAddress(?string $nameAddress): static
    {
        $this->nameAddress = $nameAddress;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(?string $question): static
    {
        $this->question = $question;

        return $this;
    }

    public function getDescrrptionQuestion(): ?string
    {
        return $this->descrrptionQuestion;
    }

    public function setDescrrptionQuestion(?string $descrrptionQuestion): static
    {
        $this->descrrptionQuestion = $descrrptionQuestion;

        return $this;
    }

    public function getNameSubscribe(): ?string
    {
        return $this->nameSubscribe;
    }

    public function setNameSubscribe(?string $nameSubscribe): static
    {
        $this->nameSubscribe = $nameSubscribe;

        return $this;
    }

    public function getDescriptionSubscribe(): ?string
    {
        return $this->descriptionSubscribe;
    }

    public function setDescriptionSubscribe(?string $descriptionSubscribe): static
    {
        $this->descriptionSubscribe = $descriptionSubscribe;

        return $this;
    }
}
