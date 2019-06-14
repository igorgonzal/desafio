<?php
include_once '../../model/produto.php';

if (isset($_GET['id'])) {
    $obj = new Produto();
    
    $obj->delete($_GET['id']);
    $_SESSION['info'] = 'danger,Operação realizada com Sucesso!!';
        
    header('Location: ' . CAMINHO . '/produto');
    exit();
}