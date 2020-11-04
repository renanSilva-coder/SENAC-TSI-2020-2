<!DOCTYPE html> <br>
<html lang="pt-br">

<head>
    <title>Micro_App Edição</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>

<body>
    <div class="text-center">
        <h1>Edite seu contato!</h1>
        <br><br>
        <?php
            if(isset($msg)) echo $msg;
        ?>
        <form method="post" action="edita_contato.php">
            <label>Nome: </label>
            <input type="text" name="nm" value="<?php echo $contato['nome']?>">
            <label>Whatsapp: </label>
            <input type="text" name="whats" value="<?php echo $contato['whatsapp']?>">
            <input type="hidden" name="id" value="<?php echo $contato['id']?>">
            <br><br>
            <input type="submit" value="Editar">
            <br><br>          
            <label class="text-danger font-italic">(se você acabou de editar use o link)</label><br>
            <input class="btn btn-primary" type="button" value="Voltar" onClick="history.go()">
            <br><br>
            <a href="lista_contato.php">Voltar para lista</a><br>

        </form>
    </div>
</body>

</html>