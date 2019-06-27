<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RestoRepository")
 */
class Resto
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
    private $Name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $srcImg;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Tag", inversedBy="restos")
     */
    private $tagId;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Plat", mappedBy="restoId")
     */
    private $plats;

    public function __construct()
    {
        $this->tagId = new ArrayCollection();
        $this->plats = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

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
     * @return Collection|Plat[]
     */
    public function getPlats(): Collection
    {
        return $this->plats;
    }

    public function addPlat(Plat $plat): self
    {
        if (!$this->plats->contains($plat)) {
            $this->plats[] = $plat;
            $plat->addRestoId($this);
        }

        return $this;
    }

    public function removePlat(Plat $plat): self
    {
        if ($this->plats->contains($plat)) {
            $this->plats->removeElement($plat);
            $plat->removeRestoId($this);
        }

        return $this;
    }
}
