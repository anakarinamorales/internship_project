<?php
function userPasswordGenerator($tamanho = 8, $maiusculas = true, $numeros = true, $simbolos = false)
{
	// Caracteres de cada tipo
	$lmin = 'abcdefghijklmnopqrstuvwxyz';
	$lmai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$num = '1234567890';
	$simb = '!@#$%*-';

	// Variáveis internas
	$retorno = '';
	$caracteres = '';

	// Agrupando todos os caracteres que poderão ser utilizados
	$caracteres .= $lmin;
	if ($maiusculas) $caracteres .= $lmai;
	if ($numeros) $caracteres .= $num;
	if ($simbolos) $caracteres .= $simb;

	// Calculando o total de caracteres possíveis
	$len = strlen($caracteres);

	for ($n = 1; $n <= $tamanho; $n++) {
	// Criando um número aleatório de 1 até $len para pegar um dos caracteres
		$rand = mt_rand(1, $len);

	// Concatenamos um dos caracteres na variável $retorno
		$retorno .= $caracteres[$rand-1];
	}
	return $retorno;
}
?>