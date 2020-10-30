<html>
	<head>
	</head>
	<body class="text-center">
		<br><br>
		<a href="./contato.html">+Novo contato</a>
        <br><br>
        <div class="container"> 
			<table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Whatsapp</th>
                    <th>Ação</th>
                </tr>
                </thead>
					<?php
					if ( count($tabela) > 0 ) { // Se tiver dado na tabela

						foreach ($tabela as $id => $reg) {
							
                            echo "  <tbody>	
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

					} else { // Se não tiver dado na tabela
                        echo "	<tbody>
                                <tr>
									<td colspan='4'>
										Não encontrei nada com \"{$_POST['argumento']}\"
									</td>
                                </tr>
                                </tbody>";
					}
					?>
            </table>
        </div>     
	</body>
</html>