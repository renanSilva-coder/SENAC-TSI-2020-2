<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dsn = 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=php';
$user = 'sa';
$password = '10032002jrsd';
$db =  new PDO($dsn, $user, $password);

// $pass = password_hash('123', PASSWORD_DEFAULT);

// if($r = $db->query("INSERT INTO usuario 
// 						(nome, email, senha)
// 					  VALUES 
// 					  	('Fulano','nathy@senac.sp','$pass')")){
// 	echo 'inserido com sucesso';
// }else{
// 	echo 'Não deu para inserir';
// }
$pass= '123';
$r = $db->query("SELECT senha FROM usuario WHERE email = 'nathy@senac.sp'");
$reg = $r->fetch(PDO::FETCH_ASSOC);
$hash = $reg['senha'];

if ( password_verify($pass, $hash) )
{
   echo 'Password is valid!';
}else 
{
    echo 'Invalid password.';
}



	// $r = $db->query("SELECT senha from usuario WHERE email = '$login'");//se o login bater com o que foi digitado pelo usuario ele pega a senha para fazer a comparação, guarda essa consulta em $r
	// $reg = $r->fetch(PDO::FETCH_ASSOC);//com isso eu pego a saída da consulta, e jogo em $reg
	// $hash = $reg['senha'];//só para facilitar eu pego o hash que está no banco, ou seja, a senha que está no banco e coloco em $hash, só p ficar mais facil de trabalhar