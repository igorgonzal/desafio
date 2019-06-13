<?php

include_once 'model/produto.php';

$array = new Produto();
print_r(122);
die();
//$array->manutencao();
$dados = $array->findAll();

include "view/produto/index.php";

?>  

