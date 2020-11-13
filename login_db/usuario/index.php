<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../sessao.php';

require 'model/dados.php'
//sempre teste quando for fazer um require ou include para ver se está puxando msm;
$lista = listarTudo();
require 'view/lista.php';