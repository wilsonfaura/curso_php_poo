<?php
require 'Poligono.php';
require 'Triangulo.php';
require 'Cuadrado.php';
require 'Rectangulo.php';
require 'Hexagono.php';

echo '<h1>Poligonos</h1>
	  <p>Figura geometrica plana que esta limitada por tres o mas rectas y tiene tres o mas angulos y vertices.</p>
	  <h2>Perimetro</h2>
	  <p>El perimetro de un Poligono es igual a la suma de las longitudes de sus lados.</p>
	  <h3>Area</h3>
	  <p>el area de un poligono es es la medida de la region o superficie encerrada por un poligono.</p>
	  <hr>
';
echo '<h3>Triangulo</h3>
	  <img src="img/triangulo.png">
';
$triangulo = new Triangulo(3, 6, 9, 10);
echo '<p>' . $triangulo->lados() . '</p>';
echo '<p>Perimetro del ' . get_class($triangulo) . ': <mark>' . $triangulo->perimetro() . '</mark></p>';
echo '<p>Area del ' . get_class($triangulo) . ': <mark>' . $triangulo->area() . '</mark></p>';
echo '<hr>';


echo '<h3>Cuadrado</h3>
	  <img src="img/cuadrado.png">
';
$cuadrado = new Cuadrado(7);
echo '<p>' . $cuadrado->lados() . '</p>';
echo '<p>Perimetro del ' . get_class($cuadrado) . ': <mark>' . $cuadrado->perimetro() . '</mark></p>';
echo '<p>Area del ' . get_class($cuadrado) . ': <mark>' . $cuadrado->area() . '</mark></p>';
echo '<hr>';


echo '<h3>Rectangulo</h3>
	  <img src="img/rectangulo.png">
';
$rectangulo = new Rectangulo(5, 6);
echo '<p>' . $rectangulo->lados() . '</p>';
echo '<p>Perimetro del ' . get_class($rectangulo) . ': <mark>' . $rectangulo->perimetro() . '</mark></p>';
echo '<p>Area del ' . get_class($rectangulo) . ': <mark>' . $rectangulo->area() . '</mark></p>';
echo '<hr>';


echo '<h3>Hexagono</h3>
	  <img src="img/hexagono.png">
';
$hexagono = new Hexagono(8, 9);
echo '<p>' . $hexagono->lados() . '</p>';
echo '<p>Perimetro del ' . get_class($hexagono) . ': <mark>' . $hexagono->perimetro() . '</mark></p>';
echo '<p>Area del ' . get_class($hexagono) . ': <mark>' . $hexagono->area() . '</mark></p>';
echo '<hr>';

?>
