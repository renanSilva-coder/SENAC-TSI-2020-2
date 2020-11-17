<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="container p-sm-2 text-center">
  <title>Cadastrar Usuário</title>
  <h1 class="container pt-sm-4">CRIE SUA CONTA :-)</h1>

  <form method="post" action="cadastro.php">
  <br>
  <div class="text-danger">
    <?php 
    if(count($erros) > 0){//conta quantos indices tem num vetor, ou seja se for 0, não tem mensagem, se for 1 ou mais ja tem, e como pode ter + q 1 fazemos um foreach para criar um looping que exibe todos
      foreach ($erros as $erro) { 
        echo $erro.'<br>'; 
      }
    } 
    ?>
  </div>
  <br>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputNome">Nome Completo</label>
      <input type="text" class="form-control" id="inputNome" placeholder="Seu Nome..." name="nome" required>
    </div>
  <div class="form-group col-md-6">
    <label for="inputEmail">Email</label>
    <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" required>
  </div>
  <div class="form-group col-md-6">
    <label for="inputSenha">Senha</label>
    <input type="password" class="form-control" id="inputSenha" placeholder="Senha" name="senha" required>
  </div>
  <div class="form-group col-md-6">
    <label for="conf_senha">Confirme a senha</label>
    <input type="password" class="form-control" id="conf_senha" placeholder="Confirme sua senha" name="conf_senha" required>
  </div>
  </div>
    <input type='submit' class='btn btn-outline-dark' name='cadastrar' value='Cadastrar'>
</form>
  
</body>
</html>