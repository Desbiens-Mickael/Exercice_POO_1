<?php
class Car
{
    private string $color;
    private int $nbWheels;
    private int $currentSpeed;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;


    public function __construct(string $color, int $nbSeat, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeat;
        $this->energy = $energy;
    }


    public function getNbhWells(): int
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function start(): string
    {
        return "La voiture démarre !";
    }


    public function forward(): string
    {
        $this->currentSpeed = 50;
        return "Go !";
       
    }


    public function brake(): string
    {
        $speed ="";
        while ($this->currentSpeed > 0) {
            $speed .= "  La voiture freine. " . $this->currentSpeed . " km/h ";
            $this->currentSpeed -= 10;
        }
        $speed .= "La voiture s'est arrêtée !";
        return $speed;
    }
}
