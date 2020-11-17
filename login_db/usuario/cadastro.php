<?php

require 'model/dados.php';
chdir( __DIR__ );

if(isset($_POST['cadastrar'])){
require 'controller/consistencia_cadastro.php';
}

include 'view/cadastro_tpl.php';
