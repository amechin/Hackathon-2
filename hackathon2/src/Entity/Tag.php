<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TagRepository")
 */
class Tag
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
     * @ORM\ManyToMany(targetEntity="App\Entity\Resto", mappedBy="tagId")
     */
    private $restos;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Plat", mappedBy="tagId")
     */
    private $plats;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User", mappedBy="tags")
     */
    private $users;

    public function __construct()
    {
        $this->restos = new ArrayCollection();
        $this->plats = new ArrayCollection();
        $this->users = new ArrayCollection();
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

    /**
     * @return Collection|Resto[]
     */
    public function getRestos(): Collection
    {
        return $this->restos;
    }

    public function addResto(Resto $resto): self
    {
        if (!$this->restos->contains($resto)) {
            $this->restos[] = $resto;
            $resto->addTagId($this);
        }

        return $this;
    }

    public function removeResto(Resto $resto): self
    {
        if ($this->restos->contains($resto)) {
            $this->restos->removeElement($resto);
            $resto->removeTagId($this);
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
            $plat->addTagId($this);
        }

        return $this;
    }

    public function removePlat(Plat $plat): self
    {
        if ($this->plats->contains($plat)) {
            $this->plats->removeElement($plat);
            $plat->removeTagId($this);
        }

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->addTag($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->contains($user)) {
            $this->users->removeElement($user);
            $user->removeTag($this);
        }

        return $this;
    }
}
