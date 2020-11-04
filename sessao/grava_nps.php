<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
	
// var_dump($_POST);
session_start();
// echo 'Seu ID de sessão é: '. session_id();//gera um id de sessao e o php cuida de não repetir

$nota = $_POST['nota'];
$explicacao = $_POST['explicacao'];

// echo " <br><br> Você deu a nota $nota pelo motivo \"$explicacao\" ";

require_once 'connect.php';

// Como evitar SQL injection 
//1) preparo a consulta e faço ela de forma segura
$objStmt = $objBanco->prepare(' INSERT INTO avaliacao
                                    (nota,explicacao) 
                                VALUES 
                                    ( :nt, :explic)');
//2) Substitui :nomezinho e :zap pelos valores enviados pelo usuário
$objStmt->bindParam(':nt', $nota);
$objStmt->bindParam(':explic', $explicacao);

//3) Executo a consulta
if( $objStmt->execute() ){
    $msg = 'Avaliação gravada com sucesso!';
}else{
    $msg = '  :-(  DEU ERRO TENTE NOVAMENTE!';
}

include 'grava_nps_tpl.php';

//////////////////////////////////////////////
/*

[objeto]->[método]()
 ou seja , utiliza-se -> para chamar um método de um objeto, como por ex. no JavaScript eu chamo cerebro.pensar(), onde cerebro é um objeto ou classe e pensar é um método ou funcao do objeto.

'chave' => 'valor'
ou seja, utiliza-se => quando se está mexendo com um vetor, por ex.:
$var = ['nome' => 'Renan'];
ao dar um var_dump($var); vai mostrar:
array(1){
	'nome' =>
	String(5) "Renan"
}

*/