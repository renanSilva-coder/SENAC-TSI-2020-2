<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

// myseli_connect('host','user','password','nameDb');
$db = mysqli_connect('localhost','root','','php'); //Conecta o SGBD;

$query = mysqli_query($db,'CREATE TABLE IF NOT EXISTS contatos (id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
                                nome varchar(255) NOT NULL, 
                                whatsapp BIGINT)');
if($query){    
    echo 'Tabela contatos criada com sucesso!<br>';

}else{
    
    echo 'Não foi possível criar a tabela contatos';
    echo mysqli_connect_error();
}

$contato = ['nome' => 'Luiz Bono', 'whatsapp' => '5511982789982'];

///////////////////////
//INSERE DADOS NO BANCO
/*if(mysqli_query($db, //ASPAS DUPLAS PQ TEM VARIAVEL NO COMANDO;
                    "
                    INSERT INTO  contatos 
                        (nome,whatsapp)
                    VALUES
                       ('{$contato['nome']}','{$contato['whatsapp']}')")){
    echo 'Foi inserido um registo na tabela contatos!<br>';

}else{
    
    echo 'Não foi possível inserir o registro';
    echo mysqli_connect_error();
}*/

/////////////////////////////
//LISTA O QUE ESTÁ NA TABELA
$query = mysqli_query($db,  'SELECT 
                                id, nome, whatsapp 
                            FROM 
                                contatos');

echo '<table border="1">';
echo "<tr><td><b>ID</b></td><td><b>NOME</b></td><td><b>WHATSAPP</b></td></tr>";
while ( $registro = $query->fetch_assoc() ) {
    echo"<tr>   <td>{$registro['id']}</td>
                <td>{$registro['nome']}</td>
                <td>{$registro['whatsapp']}</td>
        </tr>";
}

echo '</table>';

//////////////////////////////////////
//APAGA UM REGISTRO QUE ESTÁ NA TABELA

if($delete = mysqli_query($db, 'DELETE FROM contatos WHERE id=1')){
    echo 'Foi deletado um registo na tabela contatos!<br>';
}else{
    echo 'Não foi possível deletar o registro';
    echo mysqli_connect_error();
}


//$POST $ GET $ REQUEST - Vetores super globais para receber dados do usuário;

echo "<br><br> Nome Enviado {$_POST['nm']}, Whatsapp {$_POST['whats']}";

echo "<br><br>";











