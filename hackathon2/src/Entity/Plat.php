<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PlatRepository")
 */
class Plat
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $categorie;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $srcImg;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Tag", inversedBy="plats")
     */
    private $tagId;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Resto", inversedBy="plats")
     */
    private $restoId;

    public function __construct()
    {
        $this->tagId = new ArrayCollection();
        $this->restoId = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(?string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getSrcImg(): ?string
    {
        return $this->srcImg;
    }

    public function setSrcImg(?string $srcImg): self
    {
        $this->srcImg = $srcImg;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(?string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection|Tag[]
     */
    public function getTagId(): Collection
    {
        return $this->tagId;
    }

    public function addTagId(Tag $tagId): self
    {
        if (!$this->tagId->contains($tagId)) {
            $this->tagId[] = $tagId;
        }

        return $this;
    }

    public function removeTagId(Tag $tagId): self
    {
        if ($this->tagId->contains($tagId)) {
            $this->tagId->removeElement($tagId);
        }

        return $this;
    }

    /**
     * @return Collection|Resto[]
     */
    public function getRestoId(): Collection
    {
        return $this->restoId;
    }

    public function addRestoId(Resto $restoId): self
    {
        if (!$this->restoId->contains($restoId)) {
            $this->restoId[] = $restoId;
        }

        return $this;
    }

    public function removeRestoId(Resto $restoId): self
    {
        if ($this->restoId->contains($restoId)) {
            $this->restoId->removeElement($restoId);
        }

        return $this;
    }
}
