<?php

class Conta{
    private $numero;
    private $banco;
    private $saldo;

  function __construct($s, $n) {
    $this->saldo = $s;
    $this->numero = $n;
}

function Depositar($v){
  $this->saldo += $v;
}

function sacar($v) {
  if ($this->saldo >= $v) {
    $this->saldo -= $v;
  } else {
      echo 'saldo insuficiente <br>';
  }
}
}
?>