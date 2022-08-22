<?php
class Hexagono extends poligono{
	private $lado;
	private $apotema;

	public function __construct($l, $a){
		$this->lados = 6;
		$this->lado = $l;
		$this->apotema = $a;
	}

	public function perimetro(){
		return $this->lados * $this->lado;
	}

	public function area(){
		return ($this->perimetro() * $this->apotema) / 2;
	}
}
?>