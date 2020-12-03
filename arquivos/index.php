<?php
//criando arquivo com dados usando o w, planilha foi nome criado na hora
// $fp = fopen('planilha.csv', 'w');
// fwrite($fp, "Nome;Telefone\n");
// fwrite($fp, "Luiz;1123132132\n");

// fclose($fp);

// echo "<pre>ARQUIVO GERADO\n\n";

//adicionando/alterando ao arquivo com a 
// $fp = fopen('planilha.csv', 'a');
// fwrite($fp, "Marcel;999999999\n");
// fwrite($fp, "Bruno;555555555\n");
// fwrite($fp, "Eduardo;3333333333\n");

// fclose($fp);

echo "VEJA O QUE ESTÁ NO ARQUIVO:<br><br>";
	require_once 'db.php';
//abrindo o arquivo com r para read
$fp = fopen('CIDADES_CAPITAIS_IBGE.csv', 'r');

$c = 0;
	
while($linha = fgets($fp)){//lê linha por linha do arquivo

	$c+=1;
	$dados = explode(';',$linha);

	if($c > 0){

		echo $id_cidade = $dados[0];
		echo $nome = $dados[1];
		echo $latitude = $dados[2];
		echo $longitude = $dados[3];
		echo "<br>";
	}

	$stmt =	$db->prepare('	INSERT INTO cidades_capitais_ibge 
								(id_cidade,nome,latitude,longitude) 
							VALUES 
								(:id,:nome,:lati,:longi)');

	$stmt->bindParam(':id', 	$id_cidade);
	$stmt->bindParam(':nome', 	$nome);
	$stmt->bindParam(':lati', 	$latitude);
	$stmt->bindParam(':longi', 	$longitude);

	$stmt->execute();

}



fclose($fp);//fecha o arquivo

