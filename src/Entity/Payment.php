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

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imageUrl = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $test_public_api_key = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $test_private_api_key = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $prod_public_api_key = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $prod_private_api_key = null;


    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $createdAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }


    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(?string $imageUrl): static
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    public function getTestPublicApiKey(): ?string
    {
        return $this->test_public_api_key;
    }

    public function setTestPublicApiKey(?string $test_public_api_key): static
    {
        $this->test_public_api_key = $test_public_api_key;

        return $this;
    }

    public function getTestPrivateApiKey(): ?string
    {
        return $this->test_private_api_key;
    }

    public function setTestPrivateApiKey(?string $test_private_api_key): static
    {
        $this->test_private_api_key = $test_private_api_key;

        return $this;
    }

    public function getProdPublicApiKey(): ?string
    {
        return $this->prod_public_api_key;
    }

    public function setProdPublicApiKey(?string $prod_public_api_key): static
    {
        $this->prod_public_api_key = $prod_public_api_key;

        return $this;
    }

    public function getProdPrivateApiKey(): ?string
    {
        return $this->prod_private_api_key;
    }

    public function setProdPrivateApiKey(?string $prod_private_api_key): static
    {
        $this->prod_private_api_key = $prod_private_api_key;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
