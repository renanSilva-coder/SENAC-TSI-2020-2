<?php

// ini_set('display_errors', 0);
// ini_set('display_startup_errors',0);
// error_reporting(E_ALL);

session_start();
// $sessaoUsuario = $_SESSION['sessaoDoUser'] = 'Usuário';
require_once 'db.php';
//Exemplo de como fazer o salt na senha, uma criptografia
// $pass = password_hash('123', PASSWORD_DEFAULT);


if (isset($_SESSION['login'])) { //Caso o usuario ja esteja logado no sistema

		include 'header_tpl.php';
		include 'index_menu_tpl.php';
		include 'footer_tpl.php';

} elseif ( isset($_POST['entrar']) ) { // Caso o usuario preencheu o form de login

	$login = $_POST['login'];
	$senha = $_POST['senha'];

	//Verificar se existe o usuário e pegar o hash da senha
	$r = $db->query("SELECT senha from usuario WHERE email = '$login'");//se o login bater com o que foi digitado pelo usuario ele pega a senha para fazer a comparação, guarda essa consulta em $r
	$reg = $r->fetch(PDO::FETCH_ASSOC);//com isso eu pego a saída da consulta, e jogo em $reg
	$hash = $reg['senha'];//só para facilitar eu pego o hash que está no banco, ou seja, a senha que está no banco e coloco em $hash, só p ficar mais facil de trabalhar

	// comparar a senha passada pelo usuario com hash armazenado no db

	if ( password_verify( $senha , $hash ) ){//password_verify() compara um hash com um dado para verificar se está correto ou bate, como na verificação de senha

		$_SESSION['login'] = $login;

		include 'header_tpl.php';
		include 'index_menu_tpl.php';
		include 'footer_tpl.php';

	}else{
	$msg = 'Credenciais inválidas, tente novamente!';
	include 'index_tpl.php';
	}	

}else{// Caso o usuario tenha acabado de chegar no sistema
	include 'index_tpl.php';
}

