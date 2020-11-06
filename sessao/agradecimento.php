<?php

session_start(); 
	
echo  'Você é o: ' .$_SESSION['login']. '<br><br>';//mostra um dado( que está em $_SESSION['meuNome'] ) criado através da função session_start() e do método $_SESSION com o código $_SESSION['example'] = 'exemplo'; e aonde tiver session _start(); eu posso puxar esse dado e posso criar novos dados para passar através da sessao quando eu quiser, a troca de dados por session não é vista pelo usuário


$nota = $_GET['nota'];// Pega quando está na url
// $nota = $_REQUEST['nota']; // usa-se quando o valor pode vir por POST ou GET ou OS DOIS 

if ( $nota >= 9 ){
	echo "ESTAMOS MUITO FELIZES!!
          <input class='btn btn-outline-primary' type='button' value='Voltar' onClick='history.go(-1)'>
	";

}else{
	echo "O que podemos fazer para você nos dar uma nota 10 ???
          <input class='btn btn-outline-primary' type='button' value='Voltar' onClick='history.go(-1)'>
	";
}