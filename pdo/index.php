<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

//conecte-se a um db SQLSERVER usando a invocação do driver
//DSN QUE FUNCIONA ABAIXO -  CONEXAO PHP COM SQL
$dsn = 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=php';
$user = 'sa';
$password = '10032002jrsd';

// $db = new PDO('sqlsrv:Server=localhost\\SQLEXPRESS;Database=pubs','sa','10032002jrsd');
$db =  new PDO($dsn, $user, $password);

$sql = 'SELECT title, price from titles';
$result = $db->query($sql);//$result guarda o comando da sql e aciona para usá-la.

//$result->fetch(PDO::FETCH_ASSOC);//fetch é uma função que executa a query, vazio ela pega os indices numericos e alfanumericos, usa mais memoria, por isso coloca-se o PDO::FETCH_ASSOC dentro.
//$reg = $result->fetch(PDO::FETCH_ASSOC);
// echo "O Livro \"{$reg['title']}\" custa {$reg['price']} \n\n";//assim eu exibo o que está no $reg, mas se eu usar o foreach posso usá-lo como vetor e exibir mais dados, assim eu só trago o primeiro, se eu fizer dnv:
// echo "O Livro \"{$reg['title']}\" custa {$reg['price']}";//traz o próximo, bem melhor fazer FOREACH OU MESMO NUM WHILE
/*
foreach ($db->query($sql) as $reg) {
	echo "O Livro \"{$reg['title']}\" custa {$reg['price']} \n\n<br>";
}
*/
//no foreach $reg é um vetor, se eu quisesse uma matriz eu teria que usar um foreach dentro de um foreach, pq o foreach transforna em vetor 

//COMO FAZER UMA CONSULTA SELECT
$sql = 'SELECT id, nome, telefone from contatos';

$result = $db->query($sql);

while($reg = $result->fetch(PDO::FETCH_ASSOC)){
	echo "ID: {$reg['id']}   Sr(a) {$reg['nome']}, seu tel. é {$reg['telefone']} \n\n<br>";
}

//COMO FAZER UM DELETE
if($db->query('DELETE from contatos where id=19')){
	echo 'Contato deletado com sucesso <br><br>';
}else{
	echo 'Falha na deleção <br><br>';
}

//COMO FAZER UM SELECT
// foreach ($db->query($sql) as $reg) {
// 	echo "Sr(a) \"{$reg['nome']}\", seu tel. é {$reg['telefone']} \n\n<br>";
// }

//COMO FAZER UM UPDATE
if($db->query("UPDATE contatos SET nome='ARTHUR' where id=16")){
	echo 'Contato Alterado com sucesso <br><br>';
}else{
	echo 'Falha na alteração <br><br>';
}

foreach ($db->query($sql) as $reg) {
 	echo "ID: {$reg['id']}   Sr(a) {$reg['nome']}, seu tel. é {$reg['telefone']} \n\n<br>";
}


//COMO FAZER UM INSERT
if($db->query("INSERT INTO contatos (nome,telefone) VALUES ('TESTEMIL',10000000)")){
	echo 'Contato Inserido com sucesso <br><br>';
}else{
	echo 'Falha na inserção <br><br>';
}

foreach ($db->query($sql) as $reg) {
 	echo "ID: {$reg['id']}   Sr(a) {$reg['nome']}, seu tel. é {$reg['telefone']} \n\n<br>";
}



