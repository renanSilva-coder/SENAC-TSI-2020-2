<?php

session_start();

if ( !isset($_SESSION['login'])) {
		
	header('Location: /Github/SENAC-TSI-PHP-2020-2/sessao/');
			
}