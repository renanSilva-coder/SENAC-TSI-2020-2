<?php

require_once 'config.php';

try{
    $objBanco = new PDO(DSN, DB_USER, DB_PASS);
}catch( PDOException $objErro ){
    echo 'SGBD Indisponível: '. $objErro->getMessage();
    exit();
}
// PDOException é uma classe de exceção do PDO que é retornada quando dá erro.
// try - tente { fazer algo } e catch - pegue (algum tipo de dado) e tem que 
// criar uma variavel $objErro no caso para ser utilizada na tratação do erro.
// Então se dá uma mensagem para ser legal com o echo e mostra o erro contatenando essa mensagem da funcionalidade getMessage do $objErro
// depois com o exit para e nada mais é executado; 