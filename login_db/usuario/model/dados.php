<?php

chdir( __DIR__ ); //Garante que o codigo seja executado no diretorio model

require_once '../../db.php';

function listarTudo(): array
{

global $db;//posso acessar $db aqui dentro

$r = $db->query("SELECT 
				id, nome, email 
			FROM 
				usuario");
$reg = $r->fetchAll();
return is_array($reg) ? $reg : [];//verifica se $reg está como array. se não ele transforma em um
}