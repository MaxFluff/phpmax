<?php

    class Vierkant extends Figuur{
        /**
         * 
         *  geeft Ix aan de sting $Ix 
         * @param [interger] $Ix
         */
        public function __construct($Ix){
            $this->Ix = $Ix;
        }

        public function getX() {
            return $this->Ix;
        }

        public function berekenOppervlakte(){
            return $this->Ix * $this->Ix;
        }
    }



?>