<?php

require_once "Calculadora.php";

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
echo $operacao = $_POST['operacao'];

$calculadora = new Calculadora();

$calculadora->setNumero1( $numero1 );
$calculadora->setNumero2( $numero2 );

switch($operacao){
	case 'somar':
	$calculadora->somar();
	break;

	case 'subtrair':
	$calculadora->subtrair();
	break;

	case 'multiplicar':
	$calculadora->multiplicar();
	break;

	case 'dividir':
	$calculadora->dividir();
	break;

	case 'resto de divisao':
	$calculadora->resto_divisao();
	break;
}

echo $calculadora->getTotal();

?>