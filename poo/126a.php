<?php

class Quadrado{
    private $lado;

    public function setLado($lado){
        $this->lado = $lado;
    }
    //calculando area do quadrado (base x altura?)
    public function calculaArea(){
        return $this->lado * $this->lado;
    }
}

?>