<?php

class Calculadora{
	
	private $total;
	private $numero1;
	private $numero2;

	function __construct(){
		$this->total = 0;
		$this->numero1 = 0;
		$this->numero2 = 0;
	}

	function setNumero1($numero1){
		$this->numero1 = $numero1;
	}

	function setNumero2($numero2){
		$this->numero2 = $numero2;
	}

	function getTotal(){
		return $this->total;
	}

	function somar(){
		$this->total = $this->numero1 + $this->numero2;
	}

	function subtrair(){
		$this->total = $this->numero1 - $this->numero2;
	}

	function multiplicar(){
		$this->total = $this->numero1 * $this->numero2;
	}

	function dividir(){
		$this->total = $this->numero1 / $this->numero2;
	}

	function resto_divisao(){
		$this->total = $this->numero1 % $this->numero2;
	}

}
?>