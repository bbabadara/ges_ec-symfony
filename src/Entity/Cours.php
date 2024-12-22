<?php

namespace App\Entity;

use App\Repository\CoursRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CoursRepository::class)]
class Cours
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?\DateInterval $dateCours = null;

    #[ORM\Column]
    private ?int $nbrHeure = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateCours(): ?\DateInterval
    {
        return $this->dateCours;
    }

    public function setDateCours(\DateInterval $dateCours): static
    {
        $this->dateCours = $dateCours;

        return $this;
    }

    public function getNbrHeure(): ?int
    {
        return $this->nbrHeure;
    }

    public function setNbrHeure(int $nbrHeure): static
    {
        $this->nbrHeure = $nbrHeure;

        return $this;
    }
}
