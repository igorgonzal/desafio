<?php

include_once '../../model/produto.php';

$obj = new Produto();

if (isset($_POST['id'])) {
    
    $obj->save($_POST, 'id');   
    $_SESSION['info'] = 'success,Operação realizada com Sucesso!!';
}

header('Location: ' . CAMINHO . '/produto');
