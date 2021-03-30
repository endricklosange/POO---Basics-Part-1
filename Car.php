<?php
class Car
{
  private int $numberWheels;
  
  public  int $currentSpeed;
  
  private string $color;
  
  private int $numberseats;
  
  private string$typeEnergy;
  
  private int $fuelLevel;

  public function __construct(string $color, int $numberseats, string $typeEnergy)
  {
    $this->$color = $color;
    $this->$numberseats = $numberseats;
    $this->$typeEnergy = $typeEnergy;
  }
  public function start()
  {
    $this->currentSpeed = 0;
    $cont = "";
   while ($this->currentSpeed < 39) 
   {
    $this->currentSpeed++;
    $cont .= '  '.$this->currentSpeed . 'km/h';
   }
    return $cont;
   }
  public function forward()
  {
    return '40 km';
  }  
  public function brake(): string
  {
    $cont = "";
    while($this->currentSpeed > 0)
    {
      $this->currentSpeed--;
      $cont .= ' '.$this->currentSpeed . 'km/h';
    }
    
    return $cont . " Stop";
  }
  public function setColor(string $color)
  {
    $this->color = $color;
  }

  public function getColor(): string
  {
    return $this->color;
  }

  public function getCurrentSpeed(): int
  {
    return $this->currentSpeed;
  }


  public function getNbSeats(string $numberSeats)
  {
    $this->numberSeats = $numberSeats;
  }


  public function getNbWheels(string $numberWheels)
  {
    $this->numberWheels = $nbWheels;
  }
  
}   

  

