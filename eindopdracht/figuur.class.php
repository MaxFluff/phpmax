<?php

abstract class Figuur {
    public static $PI = 3.1415;
    protected $x;
    protected $y;
    private $omschrijving;

    public function __construct(float $Ix, float $Iy) {
        $this->setX($Ix);
        $this->setY($Iy);
    }

    public function setX($Ix){
        if(!is_int($Ix)){
            echo " dit is geen getal.";
        } else {
            $this->x = $Ix;
        }
    }

    public function setY($Iy){
        if(!is_int($Iy)){
            echo " dit is geen getal.";
        } else {
            $this->y = $Iy;
        }
    }

    public function setOmschrijving($Iomschrijving){
        $this->string = $Iomschrijving;
    }

    public function getOmschrijving() : string {
        return $this->string;
    }

    abstract public function berekenOppervlakte();

    }

?>