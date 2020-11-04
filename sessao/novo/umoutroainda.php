<?php

session_start(); 
	
echo  'Mesmo em um outro diretório dá na mesma, veja: Seu é o ' .$_SESSION['meuNome']. '<br><br>';
