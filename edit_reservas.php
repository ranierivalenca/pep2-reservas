<?php

require_once 'configs/pdoconn.php';
conect("pep2", "pep2");
$dados = filter_input_array(INPUT_POST,FILTER_DEFAULT);


 ?>