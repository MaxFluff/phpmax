<?php

class Cilinder extends Figuur {

    /**
     * maakt het cilinder figuur met waarden
     *
     * @param [interger] $Ih
     * @param [interger] $Ir
     */
    public function __construct($Ih, $Ir){
        parent::__construct($Ih, $Ir);
    }
    /**
     * geeft waarde terug
     *
     * @return void
     */
    public function getH(){
        return $this->y;
    }
    /**
     * geeft waarde terug
     *
     * @return void
     */
    public function getR(){
        return $this->x;
    }
    /**
     * 
     *
     * @return void
     */
    public function berekenOppervlakte(){
        $oppTweeCrickels = 2 * parent::$PI * $this->getR() * $this->getR();

        $oppervlakteBuis = 2 * parent::$PI * $this->getR() * $this->getH();

        $oppervlakteCilinder = $oppTweeCrickels + $oppervlakteBuis;

        return $oppervlakteCilinder;
    }


}


?>