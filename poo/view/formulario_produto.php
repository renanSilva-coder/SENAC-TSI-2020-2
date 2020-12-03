<html>
<head>
	<title>Formulário</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
	<body>
		<center>
			<form method="post">

				<?php
				if ( !empty($msg) ) {

					echo "<strong>$msg</strong>";
				}
				?>

				<table>
					<tr>
						<td>Nome: </td><td> <input type="text" name="nome"> </td>
					</tr>
					<tr>
						<td>Descrição: </td><td> <input type="text" name="descricao"> </td>
					</tr>
					<tr>
						<td>Preço: </td><td> <input type="text" name="preco"> </td>
					</tr>
					<tr>
						<td></td><td> <input type="submit" class="btn btn-primary" name="gravar" value="Gravar"> </td>
					</tr>
				</table>
			</form>
		</center>
	</body>
</html>
