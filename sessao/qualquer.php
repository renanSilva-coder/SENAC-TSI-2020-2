<?php

require 'sessao.php';

include 'header_tpl.php';
include 'index_menu_tpl.php';
include 'footer_tpl.php';

echo "Estamos em Qualquer e você é: " .$_SESSION['login'];	


