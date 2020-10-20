<?php

//include traz as configurações de config.php
/*posso usar
include = tenta incluir o arquivo, se não encontrar ele dá apenas um warning
require =   ||      ||      ||, da erro fatal e fecha seu arq.
include_once = verifica se esse aquivo já foi feito include e caso houver não faz dnv.
require_once = só pode ser colocado uma vez e se ele não encontra o arquivo da erro fatal e fecha.
*/

require_once 'config.php';

$objBanco = new PDO(DSN, DB_USER, DB_PASS);

// echo "<pre>";// arruma a exibixão;
// var_dump($objBanco->errorInfo()); // super importante para debug, verificar os erros
// só consigo usar o errorInfo() se a classe for usar para criar um objeto na classe pdo; 

//abaixo: a var $consulta recebe o objeto objBanco instanciado a partir da classe PDO que tem suas configurações no arquivo config.php, esse objeto usa a função query() para dar um comando e no modo opicional desta funcao na conexao por PDO pode-se usar PDO::FETCH ASSOC, aonde FETCH_ASSOC é u atributo estático que diz que vc pode chamar os dados com índice alfanumerico(ou seja, pelos nomes das tabelas que são o que vão nos vetores e consultas no código)
$consulta = $objBanco->query('SELECT id, nome, whatsapp FROM contatos', PDO ::FETCH_ASSOC);
// var_dump($consulta); sempre use para saber com o que está mexendo;
// $update = $objBanco->query("UPDATE contatos SET nome = 'Gabriel' WHERE id = 13");
// $insert = $objBanco->query("INSERT INTO contatos (nome, whatsapp) VALUES ('Fulano', 5511989876545)");
// $delete = $objBanco->query('DELETE FROM contatos IF EXISTS WHERE id=22');

$insertDoForm = $objBanco->query("INSERT INTO contatos (nome, whatsapp) VALUES ({$_POST['nm']}, {$_POST['whats']})");// PRECISA VER A AULA E TERMINAR ELA

if($delete){
    echo 'Foi deletado um registro na tabela contatos!<br>';
}else{
    echo 'Não foi possível deletar o registro<br><br>';
}
if($insertDoForm){// PRECISA VER A AULA E TERMINAR ELA
    echo 'Um registro foi inserido do formulario em contatos!<br>';
}
if($update){
    echo 'Um registro foi inserido em contatos!<br>';
}

foreach( $consulta as $registro){
    echo "ID: {$registro['id']} NOME: {$registro['nome']} WHATSAPP: {$registro['whatsapp']} <br>";
}