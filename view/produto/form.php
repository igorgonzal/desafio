<?php
include_once '../../layout/topo.php';
?>

<h1><?php echo $acao ?> Produtos</h1>

<form  method="POST" action="<?= CAMINHO ?>produto/add.php" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo (isset($produto) ? $produto->id : "") ?>">
    <div class="row">
        <div class="col-4 col-md-3 form-group">
            <label>Id</label>
            <input class="form-control" value="<?php echo (isset($produto) ? $produto->id : "") ?>" type="text" id="id" readonly="true">
        </div>
        <div class="col-4 col-md-3 form-group">
            <label>Código</label>
            <input class="form-control" value="<?php echo (isset($produto) ? $produto->codigo : "") ?>" type="text" id="codigo" name="codigo">
        </div>
        <div class="col-4 col-md-3 form-group">
            <label>Preco</label>
            <input class="form-control" value="<?php echo (isset($produto) ? $produto->preco : "") ?>" type="number" id="preco" name="preco" min="0" step="any">
        </div>
        <div class="col-12 col-md-3 form-group">
            <label>Nome</label>
            <input class="form-control" value="<?php echo (isset($produto) ? $produto->nome : "") ?>" type="text" id="nome" name="nome">
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-12  form-group">
            <label>Descrição</label>
            <textarea id="descricao" class="form-control rounded-0" name="descricao" ><?php echo (isset($produto) ? $produto->descricao : "") ?></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-12  form-group">
            <button type="submit" class="btn btn-primary"><?php echo $acao ?></button>
            <a href="javascript:history.back()" class="btn btn-info">Voltar</a>
        </div>
    </div>
    
</form>

<?php
include_once '../../layout/topo.php';
?>            
