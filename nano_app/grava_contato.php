<?php

require_once 'connect.php';

// Como evitar SQL injection 

//1) preparo a consulta e faço ela de forma segura
$objStmt = $objBanco->prepare(' INSERT INTO contatos
                                    (nome,whatsapp) 
                                VALUES 
                                    ( :nm, :zap)');
//2) Substitui :nomezinho e :zap pelos valores enviados pelo usuário
$objStmt->bindParam(':nm', $_POST['nm']);
$objStmt->bindParam(':zap', $_POST['whats']);

//3) Executo a consulta
if( $objStmt->execute() ){
    $msg = 'OBRIGADO POR SE CADASTRAR!';
}else{
    $msg = '  :-(  DEU ERRO TENTE NOVAMENTE!';
}

//4) Chama o template (front-end)
include 'grava_contato_tpl.php';


//OUTRA FORMA DE PREPARAR A CONSULTA COM ? no lugar de :label
//Quando passo array a ordem dos elementos importa!
/*
$objStmt = $objBanco->prepare(' INSERT INTO contatos
                                    (nome,whatsapp) 
                                VALUES 
                                    ( ?, ?)');
$objStmt->execute(array ($_POST['nm'], $_POST['whats']));

