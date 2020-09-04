<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

date_default_timezone_set('America/Sao_Paulo');

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

echo '<br><br>';

unset($week);//destrói o vetor;

$week ['Sunday'] = 0;
$week ['Moday'] = 1;
$week ['Thusday'] = 2;
$week ['Wednesday'] = 3;
$week ['Thursday'] = 4;
$week ['Friday'] = 5;
$week ['saturday'] = 6;

$today = date('l');

var_dump($today);//mostra a estrutura da váriavel;
echo '<br><br>';

echo 'Hoje é '.$week['Thursday']. ' com índice alfanumérico!<br>';

echo '<br><br>';

$usuario = [    'nome'  =>  'Luiz Bono',
                'idade'  =>  25,
                'peso'  =>  67,8,
                'signo'  =>  'aquariano'];

echo    'O professor '.$usuario['nome'].
        ' tem '.$usuario['idade'].
        ' anos, pesa '.$usuario['peso'].
        ' Kg e é '.$usuario['signo'].'!<br>';

//constantes no PHP
define('MUNDO', 'Raimundo Nonato');
define('RES_P_PAG', 10);

for( $i = 0; $i < RES_P_PAG; $i++){
    echo "Resultado $i<br>";
}

echo '<br>Olá '.MUNDO;

echo '<br><br>';

echo "O professor $usuario[nome] tem $usuario[idade] anos, pesa $usuario[peso] e é $usuario[signo]!";
//echo "O professor {$usuario['nome']} tem {$usuario['idade']} anos, pesa {$usuario['peso']} e é {$usuario['signo']}";

$professores = [
    "bono" => [
      'nome'   =>   'Luiz Bono',
      'idade'  =>  25,
      'peso'  =>  67.8,
      'signo'  =>  'aquariano'
    ],
    "claro" => [
      'nome'   =>   'Thiago Claro',
      'idade'  =>  27,
      'peso'  =>  70.7,
      'signo'  =>  'geminiano'
    ],
    "quintas" => [
      'nome'   =>   'Thiago Quintas',
      'idade'  =>  21,
      'peso'  =>  62.4,
      'signo'  =>  'leonino'
    ]
  ];

  $professores = array( 0 =>  array(  'nome'      => 'Luiz Bono',
                                    'idade'     =>  25,
                                    'peso'      =>  67808.44,
                                    'colocacao' =>  'Primeiro'),
                      1 =>  array(  'nome'      => 'Claro',
                                    'idade'     =>  35,
                                    'peso'      =>  54808.44,
                                    'colocacao' =>  'Segundo'),
                      2 =>  array(  'nome'      => 'Quyntas',
                                    'idade'     =>  21,
                                    'peso'      =>  7808.44,
                                    'colocacao' =>  'Terceiro'
));?>

<table border="1">
<tr><td>ID</td><td>Nome</td><td>Idade</td><td>Peso</td><td>Colocacao</td></tr>
<?php
    
foreach ($professores as $linha => $professor){
    echo "<tr><td>$linha</td>
              <td>{$professor['nome']}</td>
              <td>{$professor['idade']}</td>
              <td>{$professor['peso']}</td>
              <td>{$professor['colocacao']}</td>
          </tr>";
}
?>
</table>













