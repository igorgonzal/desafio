<?php

include_once '../../model/produto.php';

$obj = new Produto();

if (isset($_POST['id'])) {
    
    $obj->save($_POST, 'id');   
}

header('Location: ' . CAMINHO . '/produto');
