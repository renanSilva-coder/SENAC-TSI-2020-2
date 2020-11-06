<?php

session_start();

if ( !isset($_SESSION['login'])) {
	
	header('Location: index.php');

}
	echo "Estamos em Qualquer e você é o: " .$_SESSION['login']. "<br><br>
	<a href='index.php'>
	<input type='button' name='menuQualquer' value='Menu'></a>";	


