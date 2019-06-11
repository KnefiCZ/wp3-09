<?php
  class Computer
  {
    private $case;
    private $MB;
    private $KB;
    private $Mouse;
    private $HDD;
    private $RAM;
    private $CPU;
    private $GPU;

    //CIM VETSI CISLO U CPU A GPU -> TIM LEPSI!!!

  public function checkLoL()
  {
    if (($this->RAM >= 8)&&($this->HDD >= 11)&&($this->CPU >= 2)&&($this->GPU >= 2)) {
      
      return TRUE;
    }
    else {
      
      return FALSE;
    }
  }
  public function checkCS()
  {
    if (($this->RAM >= 4)&&($this->HDD >= 9)&&($this->CPU >= 1)&&($this->GPU >= 1)) {
      
      return TRUE;
    }
    else {
      
      return FALSE;
    }
  }

  public function __construct(string $pCase)
  {
    $this->case = $pCase;
  }

  public function addMB(string $MB)
  {
    if(isset($this->case)) {
    $this->MB = $MB;
      return TRUE;
    }
      return FALSE;
  }

  public function addKB(string $KB)
  {
    if (isset($this->MB)) {
      $this->KB = $KB;
      return TRUE;
    }
      return FALSE;
  }

  public function addMouse(string $Mouse)
  {
    if (isset($this->MB)) {
      $this->Mouse = $Mouse;
      return TRUE;
    }
      return FALSE;
  }

  public function addCPU(string $CPU)
  {
    if (isset($this->MB)) {
      $this->CPU = $CPU;
      return TRUE;
    }
      return FALSE;
  }

  public function addGPU(string $GPU)
  {
    if (isset($this->MB)) {
      $this->GPU = $GPU;
      return TRUE;
    }
      return FALSE;
  }

    public function addRAM(string $RAM)
        {
      if (isset($this->MB)) {
        $this->RAM = $RAM;
        return TRUE;
      }
        return FALSE;
  }

    public function addHDD(string $HDD)
      {
        if (isset($this->MB)) {
          $this->HDD = $HDD;
        return TRUE;
      }
        return FALSE;
  }
  public function summary()
    {
      if (isset($this->MB)&&(isset($this->CPU))&&(isset($this->GPU))&&(isset($this->RAM))&&(isset($this->HDD))) {
        echo "Základní deska: " . $this->MB . "<br>";
        echo "CPU: " . $this->CPU . "GHz <br>";
        echo "GPU: " . $this->GPU . "Gb <br>";
        echo "RAM: " . $this->RAM . "Gb <br>";
        echo "HDD: " . $this->HDD . "Gb <br>";
        return TRUE;
      }
      return FALSE;
    }
}

    