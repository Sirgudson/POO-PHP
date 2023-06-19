<?php

class Triangulo{
    private $base;
    private $altura;

    public function setBase($base){
        $this->base = $base;
    }

    public function setAltura($altura){
        $this->altura = $altura;
    }

    //supostamente a fórmula do cálculo de triângulo é base x altura e divide por 2
    public function calculaArea(){
        return ($this->base * $this->altura) / 2;
    }
}

?>