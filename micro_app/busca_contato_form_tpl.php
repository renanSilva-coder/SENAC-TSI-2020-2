<html lang="pt-br">

<head>
    <title>Micro_App Busca</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
	<body class="text-center">
        <a href='lista_contato.php'>Listar</a> 
        <a href='lista_contato.php'>Editar</a> 
        <a href='lista_contato.php'>Apagar</a> 
        <a href='busca_contato.php'>Buscar</a>
        <a href='contato.html'> +NOVO CONTATO</a><br><br>
        <br><br>
        <form method="post" action="busca_contato.php">
            Buscar <input type="text" name="argumento"> 
        <input type="submit" value="Ir!">
        </form>
	</body>	
</html>