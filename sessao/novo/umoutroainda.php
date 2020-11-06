<?php

session_start(); 
	
if ( !isset($_SESSION['login'])) {
	
	header('Location: index.php');

}else{
	
	echo  "Estamos em Um outro ainda e você é o: ' .$_SESSION['login']. '<br><br>
	<input class='btn btn-outline-primary' onclick='location.href='sair.php'' name='menuUmOutroAinda' value='Menu'>";	
}