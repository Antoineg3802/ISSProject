<?php

namespace App\Entity;

use App\Repository\ISSPositionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ISSPositionRepository::class)]
class ISSPosition
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'float')]
    private $Longitude;

    #[ORM\Column(type: 'float')]
    private $Latitude;

    #[ORM\Column(type: 'date')]
    private $Date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLongitude(): ?float
    {
        return $this->Longitude;
    }

    public function setLongitude(float $Longitude): self
    {
        $this->Longitude = $Longitude;

        return $this;
    }

    public function getLatitude(): ?float
    {
        return $this->Latitude;
    }

    public function setLatitude(float $Latitude): self
    {
        $this->Latitude = $Latitude;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }
}
