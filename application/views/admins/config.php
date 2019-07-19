<div class="container-fluid" style="margin-left:80px;margin-right:80px;">
<?php
if (isset($isSaveSuccessful)) {?>
   <?php if ($isSaveSuccessful === false) {?>
    <div class="alert alert-danger" role="alert" id="msgerror">Save config not successfully!</div>
   <?php } else {?>
    <div class="alert alert-success" role="alert" id="msgerror">Save config successfully!</div>
  <?php }
}
?>
  <div class="row">
    <form action="<?=base_url()?>/ConfigCL/save" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="web-link">Site webpage address:</label>
        <input type="text" class="form-control" name="siteWebpageAdress" value="<?=$webpage?>" id="web-link">
      </div>
      <div class="form-group">
        <label for="help-link">Site help link address:</label>
        <input type="text" value="<?=$helpLink?>" name="siteHelpLinkAddress" class="form-control" id="help-link">
      </div>
      <div class="form-group">
        <label for="logo">Site logo:</label>
        <div class="row">
          <div class="col-sm-6">
            <input type="file" class="form-control" id="logo" name="logo">
          </div>
          <div class="col-sm-6">
            <img src="<?=base_url() . '/lib/images/logo.png'?>" id="img-logo" height="50" alt="Logo">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="favicon">Site favicon:</label>
        <div class="row">
          <div class="col-sm-6">
            <input type="file" class="form-control" id="favicon" name="favicon">
          </div>
          <div class="col-sm-6">
            <img src="<?=base_url() . '/lib/images/favicon.png'?>" id="img-favicon" height="50" alt="Favicon">
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-default">Save</button>
    </form>
  </div>
</div>