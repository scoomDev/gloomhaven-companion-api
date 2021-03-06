<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(normalizationContext={"groups"={"hero"}})
 * @ORM\Entity(repositoryClass="App\Repository\HeroRepository")
 */
class Hero
{
    /**
	 * @Groups("hero")
	 * @Groups("team")
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
	 * @Groups("hero")
	 * @Groups("team")
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
	 * @Groups("hero")
	 * @Groups("team")
     * @ORM\Column(type="string")
     */
    private $level;

    /**
	 * @Groups("hero")
	 * @Groups("team")
     * @ORM\Column(type="string", nullable=true)
     */
    private $gold;

    /**
	 * @Groups("hero")
	 * @Groups("team")
     * @ORM\Column(type="json", nullable=true)
     */
    private $objects = [];

    /**
	 * @Groups("hero")
	 * @Groups("team")
     * @ORM\ManyToOne(targetEntity="App\Entity\GameCharacter", inversedBy="heroes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $GameCharacter;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Team", inversedBy="heroes")
     */
    private $team;

    /**
	 * @Groups("hero")
	 * @Groups("team")
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $experience;

    /**
	 * @Groups("hero")
	 * @Groups("team")
     * @ORM\Column(type="text", nullable=true)
     */
    private $note;

    /**
     * @Groups("hero")
     * @ORM\Column(type="json", nullable=true)
     */
    private $completedPerks = [];

    /**
     * @Groups("hero")
     * @Groups("team")
     * @ORM\Column(type="boolean")
     */
    private $isRetired;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(int $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getGold(): ?int
    {
        return $this->gold;
    }

    public function setGold(?int $gold): self
    {
        $this->gold = $gold;

        return $this;
    }

	public function getObjects(): ?array
                      {
                          return $this->objects;
                      }

	public function setObjects(?array $objects): self
                      {
                          $this->objects = $objects;
                  
                          return $this;
                      }

    public function getGameCharacter(): ?GameCharacter
    {
        return $this->GameCharacter;
    }

    public function setGameCharacter(?GameCharacter $GameCharacter): self
    {
        $this->GameCharacter = $GameCharacter;

        return $this;
    }

    public function getTeam(): ?Team
    {
        return $this->team;
    }

    public function setTeam(?Team $team): self
    {
        $this->team = $team;

        return $this;
    }

    public function getExperience(): ?string
    {
        return $this->experience;
    }

    public function setExperience(?string $experience): self
    {
        $this->experience = $experience;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getCompletedPerks(): ?array
    {
        return $this->completedPerks;
    }

    public function setCompletedPerks(?array $completedPerks): self
    {
        $this->completedPerks = $completedPerks;

        return $this;
    }

    public function getIsRetired(): ?bool
    {
        return $this->isRetired;
    }

    public function setIsRetired(bool $isRetired): self
    {
        $this->isRetired = $isRetired;

        return $this;
    }
}
