<?php

include_once '../../model/produto.php';

$array = new Produto();

if (isset($_GET['id'])) {
    $acao = "Editar";
    $produto = $array->findById($_GET['id']);

    //---- Direciona se não encontrar Categorias ----
    (!$produto) ? header('Location: ' . CAMINHO . '/produto') : '';
}else{
    $acao = "Cadastrar";
}

include_once '../../view/produto/form.php';

