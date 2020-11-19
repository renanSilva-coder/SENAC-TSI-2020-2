<?php

require 'model/dados.php';

if(isset($_POST['cadastrar'])){
	// echo ' teste';


	$dir_imagens = '../view/imagens/';


	//COMO LIDAR COM IMG NO PHP
	//se não existir o dir imagens
	if(!is_dir('../view/imagens')){//como não tem nenhuma especificação de diretorio ele procura o dir imagens no nivel em que ele est/á

		//crie o dir 
		mkdir( $dir_imagens );

	}

	require 'controller/consistencia_cadastro.php';


	if(isset($_FILES['foto'])){

		if ($_FILES['foto']['error'] == 0) {

			move_uploaded_file( $_FILES['foto']['tmp_name'], $dir_imagens.$_FILES['foto']['name']);
		}


	}


	$id = gravar_usuario($_POST['nome'],$_POST['email'],$_POST['senha']);

	if( $id ) {//se for false, null, 0, vazio, ele não entra cai no else;

		session_start();

		$_SESSION['login'] = $_POST['email'];

		header('Location: ../'); //o header('Location: /x') redireciona para algum diretório, arquivo. aqui está voltando duas pastas sem arquivo definido, ou seja, o index.

	}else{

		$erros = ['Não foi possível criar o usuário!'];


	}

}else{

	$erros = [];
}

include 'view/cadastro_tpl.php';