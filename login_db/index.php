<?php

// ini_set('display_errors', 0);
// ini_set('display_startup_errors',0);
// // error_reporting(E_ALL);

session_start();
// $sessaoUsuario = $_SESSION['sessaoDoUser'] = 'Usuário';
require_once 'db.php';

if($db->query("INSERT INTO usuario 
			(nome, email, senha) 
				VALUES 
				('Renan Augusto','renan@senac.sp',123)")){
	echo 'Contato Inserido com sucesso <br><br>';
}else{
	echo 'Falha na inserção <br><br>';
}

if (isset($_SESSION['login'])) { //Caso o usuario ja esteja logado no sistema

		include 'header_tpl.php';
		include 'index_menu_tpl.php';
		include 'footer_tpl.php';

} elseif ( isset($_POST['entrar']) ) { // Caso o usuario preencheu o form de login

	$login = $_POST['login'];
	$senha = $_POST['senha'];

	if ( in_array ( ['user' => $login, 'pass'=> $senha], $credenciais)){

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

