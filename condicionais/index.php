<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);


$clima = 'tropical';

if($clima == 'gelado'){
    echo 'Meu pé congela!<br><br>';
}

$boolean = '1';

//== considera apenas o valor '1' e 1 são iguais , pois não leva em o tipo em consideração;
//=== compara o tipo da variável;

$var =  $boolean == 1 ? '$boolean é igual a 1' : '$boolean é diferente de 1!';
echo $var.'<br><br>';

$var =  $boolean === 1 ? '$boolean é igual a 1' : '$boolean é diferente de 1!';
echo $var.'<br><br>';

$var =  $boolean != 1 ? '$boolean é diferente de 1!' : '$boolean é igual a 1';
echo $var.'<br><br>';

$var =  $boolean !== 1 ? '$boolean é diferente de 1!' : '$boolean é igual a 1';
echo $var.'<br><br>';

$frase = 'Meu pai tinha um cachorro amarelo e azul!';
//if com comparador de valor e tipo de variável;
if(strpos($frase,'Meu') !== false){
     echo 'Encontrei o Meu!';
}else{
    echo 'Não há Meu algum!';
}
echo '<br><br>';

$frase2 = 'Nosso pai tinha um cachorro amarelo e azul!';
//if com comparador de valor e tipo de variável;
if(strpos($frase2,'meu') !== false){
     echo 'Encontrei o meu!';
}else if(strpos($frase2,'Meu') !== false){
    echo 'Encontrei o Meu!';
}elseif(strpos($frase2,'MEU') !== false){
    echo 'Encontrei o MEU!';
}else{
    echo 'Não encontrei meu, Meu ou MEU!' ;
}

echo '<br><br>';

//switch
switch($clima){
    case 'quente':
//  como não tem break ele continua checando os casos;
    case 'tropical':
        echo 'Gosto de cilma quente!';
        if(true){
            echo '<br> -- if dentro do switch';
            if(true){
                echo '<br> ---- if aninhado dentro de um switch';
            }
        }
    break;
    
    case 'morno':
        echo 'Morno é menor que frio!';
    break;
    
    case 'frio':
        echo 'Frio eu gosto quando está longe!';
    break;

    case 'gelado':
        echo 'Eu como um salgado!';
    break;

    default: 
    echo 'Clima desconhecido!';
break;
}

$isso = 'véi';

//Condicional nova no PHP;
$isso = $isso ?? 'coisa';
echo "<br><br>Olha só $isso";
