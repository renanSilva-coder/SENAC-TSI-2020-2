<html lang="pt-br">

<head>
    <title>Micro_App Lista</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>

<body>
<div class="text-center">
    <br><br>
    <a href="./contato.html">+Novo Contato</a>
    <div class="container">    
        <p>Abaixo está a lista de registros</p>        
    <table class="table">
        <thead class="text-bolder">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Whatsapp</th>
            <th>Ação</th>
        </tr>
        </thead>
        <?php 
            if( count($tabela) > 0){ //Se tiver dado na tabela

                foreach ($tabela as $id => $reg){
                    echo "<tbody>
                    <tr>
                        <td>$id</td>
                        <td>{$reg['nome']}</td>
                        <td>{$reg['whatsapp']}</td>
                        <td>
                        <a href='apaga_contato.php?id=$id'>Apagar</a>
                        <a href='edita_contato.php?id=$id'>Editar</a>
                        </td>
                    </tr>
                    </tbody>";
                }

            }else{ // se não tiver dado na tabela
                echo "
                <tbody>
                    <tr>
                        <td colspan = '4'>Não há dados</td>
                    </tr>
                </tbody>";
            }
        ?>
    
    </table>
    </div>
</div>
</body>

</html>