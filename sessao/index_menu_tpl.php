<!DOCTYPE html>
<html>
<head>
	<title>Menu Index</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="T-style.css">
</head>
<body class="bg-dark">
<div class="container text-center text-white pt-sm-5">
	<?php echo "Seja Muito Bem-Vindo ". $_SESSION['login'] . "<br><hr class='hrWhite'>"?>
	<p><font color=white><a href="nps_tpl.php">NPS</a></font></p>
	<p><font color=white><a href="qualquer.php">Qualquer</a></font></p>
	<p><font color=white><a href="outroqualquer.php">Outro Qualquer</a></font></p>
	<p><font color=white><a href="./novo/umoutroainda.php">Um outro ainda</a></font></p>
	<p><font color=white><a href="sair.php">Sair</a></font></p>
	<hr class='hrWhite'>
</div>
	
</body>
</html>