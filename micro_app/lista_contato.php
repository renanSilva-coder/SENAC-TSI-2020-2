<?php

require_once 'connect.php';

//Consulta para listar meus contatos:
$tabela = array();

$lista_sql = "SELECT id, nome, whatsapp FROM  contatos;";

foreach($objBanco->query( $lista_sql ) as $registro){
    
    $tabela [$registro['id']] = [   'nome'      =>  $registro['nome'], 
                                    'whatsapp'  =>  $registro['whatsapp']  ];

}

include 'lista_contato_tpl.php';