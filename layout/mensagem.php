<?php if (isset($_SESSION['info'])) { ?>
<div class="alert alert-<?php echo explode(',',$_SESSION['info'])[0] ?> alert-dismissible fade show" role="alert">
  <?php echo explode(',',$_SESSION['info'])[1] ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php 
unset($_SESSION['info']);
} ?>