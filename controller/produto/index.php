<?php

include_once '../../model/produto.php';

$array = new Produto();

$dados = $array->findAll();

include_once '../../view/produto/index.php';

?>  

