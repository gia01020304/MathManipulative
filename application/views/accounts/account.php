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
        <label for="web-link">Email:</label>
        <input type="text" class="form-control" name="siteWebpageAdress" value="<?=$webpage?>" id="web-link">
      </div>
      <div class="form-group">
        <label for="help-link">Site help link address:</label>
        <input type="text" value="<?=$helpLink?>" name="siteHelpLinkAddress" class="form-control" id="help-link">
      </div>
      <button type="submit" class="btn btn-default">Save</button>
    </form>
  </div>
</div>