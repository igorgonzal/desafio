<?php
include_once '../../layout/topo.php';
?>

<h1><?php echo $acao ?> Produtos</h1>

<div class="row">
    <div class="col-12 col-md-12  form-group">
        <div class="drop-imagem m-dropzone dropzone m-dropzone--success dz-clickable" action="<?= CAMINHO ?>/produto/importarxml.php" id="myDropzone ">
            <div class="m-dropzone__msg dz-message needsclick">
                <h3 class="m-dropzone__msg-title">Arraste o arquivo ou clique aqui para enviar.</h3>
                <span class="m-dropzone__msg-desc">São permitidos somente arquivos em XML</span>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-md-12  form-group">
        <a href="javascript:history.back()" class="btn btn-info">Voltar</a>
    </div>
</div>

<?php
include_once '../../layout/topo.php';
?>            
