<?php

namespace App\Entity;

use App\Repository\HoursRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HoursRepository::class)]
class Hours
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $days = null;

    #[ORM\Column(length: 255)]
    private ?string $morninghours = null;

    #[ORM\Column(length: 255)]
    private ?string $evening = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDays(): ?string
    {
        return $this->days;
    }

    public function setDays(string $days): static
    {
        $this->days = $days;

        return $this;
    }

    public function getMorninghours(): ?string
    {
        return $this->morninghours;
    }

    public function setMorninghours(string $morninghours): static
    {
        $this->morninghours = $morninghours;

        return $this;
    }

    public function getEvening(): ?string
    {
        return $this->evening;
    }

    public function setEvening(string $evening): static
    {
        $this->evening = $evening;

        return $this;
    }

   
    
}
