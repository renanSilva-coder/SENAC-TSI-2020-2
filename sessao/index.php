<?php

// ini_set('display_errors', 0);
// ini_set('display_startup_errors',0);
// // error_reporting(E_ALL);

session_start();
$sessaoUsuario = $_SESSION['sessaoDoUser'] = 'Usuário';

$credenciais = [	0 => ['user' => 'renan@senac.br',	'pass' => '123'],
					1 => ['user' => 'bono@senac.br'	, 	'pass' => '321'],
					2 => ['user' => 'nathy@senac.br', 	'pass' => '132']];

if ( isset($_POST['entrar']) ) {

	$login = $_POST['login'];
	$senha = $_POST['senha'];

	if ( in_array ( ['user' => $login, 'pass'=> $senha], $credenciais)){
		echo "Seja bem-vindo!<br>";
		echo " Clique em <a href='index.php'>sair</a> caso queira Sr.(Sra.) $sessaoUsuario!";
	}else{
	$msg = 'Credenciais inválidas, tente novamente!';
	include 'index_tpl.php';
	}	

}else{
	include 'index_tpl.php';
}

