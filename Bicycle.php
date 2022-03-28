<?php
class Bicycle
{
    private string $color;

    private int $currentSpeed;

    private int $nbSeats = 1;

    private int $nbWheels = 2;

// ///////// constructeur pour imposer des paramètres à l'instanciation de l'objet ////////////////////////////////////////////

    public function __construct(string $color, int $nbSeats, int $nbWheels)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->nbWheels = $nbWheels;
    }
// //////// nouvel syntaxe pour le constructeur depuis PHP 8 /////////////// 
// ont peut créer l'atribue directement dans le construct

    // public function __construct(private string $color) {};



// ///////////// geteur pour récupérer les infos ///////////////////////

    public function getColor(): string
    {
        return $this->color;
    }

// //////////// seteur pour changer l'atribut de la classe //////////////////

    public function setColor(string $color): void
    {
    $this->color = $color;
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;

        return "Go !";
    }


// ///////////// geteur pour récupérer les infos ///////////////////////

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }


// //////////// seteur pour changer l'atribut de la classe //////////////////

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
}