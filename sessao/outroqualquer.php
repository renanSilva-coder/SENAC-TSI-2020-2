<?php

session_start(); 
	
echo  'Você aqui ainda é o: ' .$_SESSION['meuNome']. '<br><br>';//mostra um dado criado através da função session_start() e do método $_SESSION com o código $_SESSION['example'] = 'exemplo'; e aonde tiver session _start(); eu posso puxar esse dado e posso criar novos dados para passar através da sessao quando eu quiser, a troca de dados por session não é vista pelo usuário;
