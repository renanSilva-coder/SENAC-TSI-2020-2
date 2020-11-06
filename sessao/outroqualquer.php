<?php

session_start(); 
	
// echo  'Você aqui ainda é o: ' .$_SESSION['meuNome']. '<br><br>';//mostra um dado criado através da função session_start() e do método $_SESSION com o código $_SESSION['example'] = 'exemplo'; e aonde tiver session _start(); eu posso puxar esse dado e posso criar novos dados para passar através da sessao quando eu quiser, a troca de dados por session não é vista pelo usuário;

if ( !isset($_SESSION['login'])) {
	
	header('Location: index.php');

}
	echo "Estamos em Outro Qualquer e você é o: " .$_SESSION['login']. "<br><br>
	<a href='index.php'>
	<input type='button' name='menuOutroQualquer' value='Menu'>
	</a>";	