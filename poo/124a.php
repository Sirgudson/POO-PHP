<?php

class Adulto {
	private $peso = 0;
	
	public function engordar($quilos){   	
		$this->peso = $this->peso + $quilos;
	}
	
	public function emagrecer($quilos){
		if ($this->peso - $quilos > 0) {
			$this->peso = $this->peso - $quilos;
		}
	}
	
	public function getPeso(){
		return $this->peso;
	}
	
	
	
}