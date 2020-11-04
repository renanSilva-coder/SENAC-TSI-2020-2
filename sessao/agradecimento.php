<?php
$nota = $_GET['nota'];// Pega quando está na url
// $nota = $_REQUEST['nota']; // usa-se quando o valor pode vir por POST ou GET ou OS DOIS 
$protocolo = $_GET['protocolo'];

if ( $nota >= 9 ){
	echo "ESTAMOS MUITO FELIZES!!";
}else{
	echo "O que podemos fazer para você nos dar uma nota 10 ???";
}

echo "<br><br> Seu protocolo é o $protocolo";