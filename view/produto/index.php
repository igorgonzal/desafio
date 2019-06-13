<?php
include_once '../../layout/topo.php';
?>

<h1>Produtos</h1><br>
<div class="row">
    <div class="col-12 col-md-12  form-group">
        <a href="<?= CAMINHO ?>produto/form.php" class="btn btn-primary"> Cadastro </a>
        <a href="<?= CAMINHO ?>produto/importarxml.php" class="btn btn-primary"> Importar XML </a>
    </div>
</div>

<div class="table-responsive-xl">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Código</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preco</th>
                <th colspan="4">Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dados as $value) { ?>
                <tr>
                    <td> <?= $value->id ?> </td>
                    <td> <?= $value->codigo ?> </td>
                    <td> <?= $value->nome ?> </td>
                    <td> <?= $value->descricao ?> </td>
                    <td> <?= $value->preco ?> </td>
                    <td> <a href='<?= CAMINHO ?>produto/delete.php?id=<?= $value->id ?>' style="color: #e74c3c;"> <i class="fas fa-trash"></i> </a> 
                        <a href='<?= CAMINHO ?>produto/form.php?id=<?= $value->id ?>'  style="color: #2980b9;"> <i class="fas fa-pencil-alt"></i> </a> </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


<?php
include_once '../../layout/topo.php';
?>            
