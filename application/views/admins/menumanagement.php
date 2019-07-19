<span style="margin-left:40px;">Select the menu items which you want to show and click "Save" button</span>
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
	<form action="<?=base_url()?>MenuManagementCL/saveMenu" method="post">
		<?php
if (isset($menus)) {
    foreach ($menus as $value) {
        ?>
					<div class="checkbox">
						<label><input type="checkbox" name="menu[]" value="<?php echo $value->value ?>" <?php if ($value->visible === "1") {echo "checked";}?>  /><?php echo $value->text ?> </label>
					</div>
		<?php	}
}
?>
		<input type="submit" value="Save" class="btn btn-success" >
	</form>
</div>
