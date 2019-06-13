<?php

include_once '../../model/produto.php';

if (!empty($_FILES)) {
    $obj = new Produto();
    $obj->importarXML();
} else {
    $acao = "Importar XML";
    include_once '../../view/produto/importarxml.php';
}

