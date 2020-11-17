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

function ja_existe_email(string $email): bool//cria function com paramentro de uma string $email que retorna valor booleano
{
	global $db; //para conseguir acessar fora desse código e neste cod
	
	if(empty($email)) return false; //se me passarem uma string vazia ja retorna false

	//1) preparo a consulta e faço ela de forma segura
	$stmt = $db->prepare('SELECT id FROM usuario WHERE email = :email ');

	//2)Acima Coloca :email como valor para tratar e depois aqui no 2) ele trata e coloca em $email dnv;
	$stmt->bindParam(':email', $email);

	//3) Executo a consulta
	$stmt->execute();

	$registro = $stmt->fetch();//retorna o registro; //com os parenteses () ele retorna o padrão que é parametro BOTH, ou seja, os índices numérioco e alfanumérioco

	return is_numeric($registro['id']) ? true : false; //verifica se id é numérico, ou seja, se tem id, se tiver é true señão é false. verificando em algo que eu sei que é numerico para ver se existe apenas.
	// ? é igual ao {} do if comum e : é o else{}

}