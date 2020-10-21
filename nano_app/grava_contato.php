<?php

require_once 'connect.php';

// Como evitar SQL injection 
//preparo a consulta e faço ela de forma segura
$objStmt = $objBanco->prepare(' INSERT INTO 
                                    contatos (nome,whatsapp) 
                                VALUES 
                                    ( :nomezinho, :zap)');
//Substitui :nomezinho, :zap pelos valores enviados pelo usuário
$objStmt->bindParam(':nomezinho', $_POST['nm']);
$objStmt->bindParam(':zap', $_POST['whats']);
