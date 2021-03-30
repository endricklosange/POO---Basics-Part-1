<?php
class Bicycle

  {
    private int $numberWheels;
  
    public  int $currentSpeed;
    
    private string $color;
    
    private int $numberseats;
    
    
    
  
    public function __construct(string $color, int $numberseats)
    {
      $this->$color = $color;
      $this->$numberseats = $numberseats;
    }
    public function start()
    {
      $this->currentSpeed = 0;
      $cont = "";
      while ($this->currentSpeed < 19) 
      {
        $this->currentSpeed++;
        $cont .= '  '.$this->currentSpeed . 'km/h';
      }
      return $cont;
    }
    public function forward()
    {
      return '20 km';
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
  
    
  
  