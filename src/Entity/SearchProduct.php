<?php

namespace App\Entity;

class SearchProduct
{
    

    /**
     * @var Category[]
     */
    private array $categories = [];

    private $product = null;

    public function getCategory(): array
    {
        return $this->categories;
    }

    public function setCategory(?array $categories): self
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * @var Sizes[]
     */
    private array $sizes = [];

    public function getSizes(): array
    {
        return $this->sizes;
    }

    public function setSizes(?array $sizes): self
    {
        $this->sizes = $sizes;

        return $this;
    }

    
    public function getProduct(): ?string
    {
        return $this->product;
    }

    public function setProduct(?string $product): self
    {
        $this->product = $product;

        return $this;
    }
}
