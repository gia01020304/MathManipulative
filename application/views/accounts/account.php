<?php 
  if(isset($isSaveSuccessful)){ ?>
   <?php if($isSaveSuccessful === false) { ?>
    <div class="alert alert-danger" role="alert" id="msgerror">Save config not successfully!</div>
   <?php } else { ?>
    <div class="alert alert-success" role="alert" id="msgerror">Save config successfully!</div>
  <?php  }
  }
?>
<div class="container-fluid" style="margin-left:80px;margin-right:80px;">
  <div class="row">
    <form action="<?= base_url()?>" method="post">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" name="email" value="" id="email">
      </div>
      <div class="form-group">
        <label for="user-name">User name:</label>
        <input type="text" value="" name="username" class="form-control" id="user-name">
      </div>
      <button type="submit" class="btn btn-default">Save</button>
    </form>
  </div>
</div>