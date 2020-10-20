<?php
date_default_timezone_set('America/Sao_Paulo');
//exemplo de for
for ( $i = 0, $j = 4 ; $i < 5 ; $i++, $j-- ){
    
    echo "linha: $i $j<br>";
}

echo '<br><br>';
//exemplo de while
$i = 0;// ou teste $i = 10;
$j = 4;
while ( $i < 5 ){

    echo "linha: $i $j<br>";

    $i++;
    $j--;
}
echo '<br><br>';

//Exemplo de do while
$i = 0;// ou teste $i = 10;
$j = 4;
do {
    echo "linha: $i $j<br>";
    $i++;
    $j--;

} while ( $i < 5 );

for ( $i = 0; $i < 5 ; $i++){
    
}

echo '<br><br>';

$domingo    = 0;
$segunda    = 1;
$terça      = 2;
$quarta     = 3;
$quinta     = 4;
$sexta      = 5;
$sabado     = 6;

var_dump(date('d/m/Y'));

echo '<br><br>';

switch(date('w')){
    case $domingo: 
        echo 'Domingo';
    break;
    case $segunda: 
        echo 'Segunda';
    break;
    case $terça: 
        echo 'Terça';
    break;
    case $quarta: 
        echo 'Quarta';
    break;
    case $quinta: 
        echo 'Quinta do switch';
    break;
    case $sexta: 
        echo 'Sexta';
    break;
    case $sabado: 
        echo 'Sábado';
    break;
    //.....
}

echo '<br><br>';

//solução com poucas linhas
$week [0] = 'Domingo';
$week [1] = 'Segunda';
$week [2] = 'Terça';
$week [3] = 'Quarta';
$week [4] = 'Quinta';
$week [5] = 'Sexta';
$week [6] = 'Sábado';

$today = date('w');

echo 'Hoje é '.$week[$today];