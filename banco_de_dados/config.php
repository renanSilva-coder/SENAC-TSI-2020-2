<?php
//dsn -> fonte dos dados que vamos usar,
//precisa de host e nome do bd, é o drive que usamos para a conexão;

//Explicando o DSN
//driver:dbname=nome_do_db;host=host_do_db
//driver no PDO para SQL Server é sqlsrv
//lembrando que é preciso instalar o driver do PDO para sqlserve no pc


//$dsn = 'mysql:dbname=php;host=localhost';
define('DSN','mysql:dbname=php;host=localhost');
//Usamos define pq ele configura a variável como uma constante
//aqui convém usar constante
define('DB_USER',   'root'  );
define('DB_PASS',   ''      );


