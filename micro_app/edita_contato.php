<?php

require_once 'connect.php';

//Se for clicado em gravar , faça o update
if(isset($_POST['id'])){
    $id = preg_replace('/\D/','', $_POST['id']); 
    $nome = $_POST['nm'];
    $whatsapp = $_POST['whats'];

    //1) preparo a consulta e faço ela de forma segura
    $objStmt = $objBanco->prepare(" UPDATE contatos SET
                                        nome = :nm, whatsapp = :wzap 
                                    WHERE 
                                        id = :id ");
    //2) Substitui :nm, :wzap e :id pelos valores enviados pelo usuário
    $objStmt->bindParam(':id',      $id);
    $objStmt->bindParam(':nm',      $nome);
    $objStmt->bindParam(':wzap',    $whatsapp);

    //3) Executo a consulta
    if( $objStmt->execute() ){
        $msg = 'CONTATO EDITADO COM SUCESSO!';
    }else{
        $msg = '  :-(  DEU ERRO TENTE NOVAMENTE!';
    }


}


//
$_GET['id'] = $_GET['id'] ?? $_POST['id'] ?? null;

//Evita SQL injection _ Mas prefira consulta com prepare()
$id = preg_replace('/\D/','', $_GET['id']); 

$contato = array();

$lista_sql = "SELECT id, nome, whatsapp FROM  contatos WHERE id=$id;";

foreach($objBanco->query( $lista_sql ) as $registro){
    
    $contato =  $registro;

}




include 'edita_contato_tpl.php';
