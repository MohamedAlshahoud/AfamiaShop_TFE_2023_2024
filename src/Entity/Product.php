<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
/**
 * @ORM\Table(name="product", indexes={
 *     @ORM\Index(columns={"name", "description"}, flags="fulltext")
 * })
 */

 /**
 * @ORM\Entity()
 * @ORM\Table(indexes={
 *      @ORM\Index(name="product_name_index", columns={"name"}),
 *      @ORM\Index(name="product_category_id_index", columns={"category_id"}),
 *      @ORM\Index(name="product_gender_id_index", columns={"gender_id"})
 * })
 */
class Product
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $more_information = null;

    #[ORM\Column]
    private ?int $price = null;

    #[ORM\Column(nullable: true)]
    private ?int $quantity = null;

    #[ORM\Column(nullable: true)]
    private ?bool $isNewProduct = null;


    #[ORM\ManyToMany(targetEntity: Category::class, inversedBy: 'products')]
    private Collection $categories;

    #[ORM\ManyToMany(targetEntity: Gender::class, inversedBy: 'products')]
    private Collection $genders;

    #[ORM\ManyToMany(targetEntity: Color::class, inversedBy: 'products')]
    private Collection $colors;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(type: Types::SIMPLE_ARRAY)]
    private array $imageUrls = [];

    #[ORM\OneToMany(mappedBy: 'annonces', targetEntity: Comments::class, orphanRemoval: true)]
    private Collection $comments;

    public function __construct()
    {
        $this->categories = new ArrayCollection();
        $this->genders = new ArrayCollection();
        $this->colors = new ArrayCollection();
        $this->createdAt = new \DateTimeImmutable();
        $this->comments = new ArrayCollection();
        
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

    public function getMoreInformation(): ?string
    {
        return $this->more_information;
    }

    public function setMoreInformation(?string $more_information): static
    {
        $this->more_information = $more_information;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): static
    {
        $this->price = $price;

        return $this;
    }


    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function isIsNewProduct(): ?bool
    {
        return $this->isNewProduct;
    }

    public function setIsNewProduct(?bool $isNewProduct): static
    {
        $this->isNewProduct = $isNewProduct;

        return $this;
    }

    /**
     * @return Collection<int, Category>
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(Category $category): static
    {
        if (!$this->categories->contains($category)) {
            $this->categories->add($category);
        }

        return $this;
    }

    public function removeCategory(Category $category): static
    {
        $this->categories->removeElement($category);

        return $this;
    }

    /**
     * @return Collection<int, Gender>
     */
    public function getGenders(): Collection
    {
        return $this->genders;
    }

    public function addGender(Gender $gender): static
    {
        if (!$this->genders->contains($gender)) {
            $this->genders->add($gender);
        }

        return $this;
    }

    public function removeGender(Gender $gender): static
    {
        $this->genders->removeElement($gender);

        return $this;
    }


    /**
     * @return Collection<int, Color>
     */
    public function getColors(): Collection
    {
        return $this->colors;
    }

    public function addColor(Color $color): static
    {
        if (!$this->colors->contains($color)) {
            $this->colors->add($color);
        }

        return $this;
    }

    public function removeColor(Color $color): static
    {
        $this->colors->removeElement($color);

        return $this;
    }


    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getImageUrls(): array
    {
        return $this->imageUrls;
    }

    public function setImageUrls(array $imageUrls): static
    {
        $this->imageUrls = $imageUrls;

        return $this;
    }

    /**
     * @return Collection<int, Comments>
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comments $comment): static
    {
        if (!$this->comments->contains($comment)) {
            $this->comments->add($comment);
            $comment->setAnnonces($this);
        }

        return $this;
    }

    public function removeComment(Comments $comment): static
    {
        if ($this->comments->removeElement($comment)) {
            // set the owning side to null (unless already changed)
            if ($comment->getAnnonces() === $this) {
                $comment->setAnnonces(null);
            }
        }

        return $this;
    }
    
}
