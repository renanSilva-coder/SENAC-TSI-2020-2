<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

//conecte-se a um db SQLSERVER usando a invocação do driver
//DSN QUE FUNCIONA ABAIXO -  CONEXAO PHP COM SQL
$dsn = 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=pubs';
$user = 'sa';
$password = '10032002jrsd';

// $db = new PDO('sqlsrv:Server=localhost\\SQLEXPRESS;Database=pubs','sa','10032002jrsd');
$db =  new PDO($dsn, $user, $password);


var_dump($db);
echo '<br>';

$sql = 'SELECT title, price from titles';

foreach ($db->query($sql) as $registro) {
	echo "Título: {$registro['title']} --- Preço: {$registro['price']}<br>\n";
}
