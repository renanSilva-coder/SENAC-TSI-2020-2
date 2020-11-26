<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'sessao.php';

include 'header_tpl.php';
include 'index_menu_tpl.php';


$nota = $_POST['nota'];
$explicacao = $_POST['explicacao'];

echo "<br><br>Você deu a nota $nota pelo motivo \"$explicacao\"";

$db = new PDO(	'sqlsrv:Server=localhost\\SQLEXPRESS;Database=php', // DSN
				'sa', // usuário 
				'10032002jrsd' // senha
			);

$stmt = $db->prepare('	INSERT INTO avaliacao 
									( nota, explicacao)
								VALUES 
									( :nota, :explicacao)');

$stmt->bindParam(':nota', $nota);					
$stmt->bindParam(':explicacao', $explicacao);	

if ( $stmt->execute() ) {

	echo '<br><br>Pesquisa gravada com sucesso!';

} else {

	echo '<br><br> :-( deu erro, tente novamente! ';
}

echo '<br><br><a href="./agradecimento.php?nota=' . $nota . '">Seguir</a>';

include 'footer_tpl.php';