<div class="container-fluid" style="margin-left:80px;margin-right:80px;">
<?php 
  if(isset($isSaveSuccessful)){ ?>
   <?php if($isSaveSuccessful === false) { ?>
    <div class="alert alert-danger" role="alert" id="msgerror"> <?php echo $message ?> </div>
   <?php } else { ?>
    <div class="alert alert-success" role="alert" id="msgerror"> <?php echo $message ?> </div>
  <?php  }
  }
?>

<div class="row">
    <form action="<?= base_url()?>AccountCL/saveUserAccount" method="post">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" required value="<?= $user->email?>" disabled name="email" id="email">
      </div>
      <div class="form-group">
        <label for="user-name">User name:</label>
        <input type="text" name="username" required value="<?= $user->username?>" disabled class="form-control" id="user-name">
      </div>
      <div class="form-group">
        <label for="password">Old password:</label>
        <input type="password" value="" required name="oldpassword" class="form-control" id="old-password">
      </div>
      <div class="form-group">
        <label for="new-password">New password:</label>
        <input type="password" value="" required name="newpassword" class="form-control" id="new-password">
      </div>
      <button type="submit" class="btn btn-default">Save</button>
    </form>
  </div>
</div>