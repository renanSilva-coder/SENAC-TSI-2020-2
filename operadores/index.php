<?php
echo "Olá Mundo!";

//comentário de linha
/**
 * comentário de bloco
 *  
*/

$saldo = 34.5;
//Aspas duplas aceitam string especial (Pode ter variável)
echo "<br><br><br>Seu saldo é .$saldo";

//Aspas simples apenas string pura (Mostra tudo como string)
echo '<br><br><br>Seu saldo é .$saldo';

//operador de subtração
$saldo = $saldo - 10; //ou $saldo -= 10
//operador de multiplicação
$saldo *= 14684 ;


echo "<br><br><br>Agora seu saldo é .$saldo";