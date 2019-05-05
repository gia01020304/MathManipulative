<style type="text/css">
  .btnShare{
    width: 50px;
    height: 25px;
  }
</style>
<div class="container-fluid" style="margin-left:80px;margin-right:80px;">
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Url</th>
          <th scope="col">Share</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

       <?php if (isset($shares)): ?>
        <?php $i=1 ?>
        <?php foreach ($shares as $val): ?>
          <tr>
            <th scope="row"><?= $i++ ?></th>
            <td><?= $val->name ?></td>
            <td class="div-url"><?= $val->url ?></td>
            <td>
              <?php if ($val->isshare): ?>
                <button class="btn btn-outline-secondary fas fa-check btnShare" style="color: green" onclick=unActiveFile(<?= $val->id ?>,this)></button>
                <?php else: ?>
                  <button class="btn btn-outline-secondary fas fa-times btnShare" style="color: red" onclick=activeFile(<?= $val->id ?>,this)></button>
                <?php endif ?>
              </td>
              <td><button class="btn far fa-clipboard btnClipboard" title="Copy to clipboard" onclick=copyTest('<?= $val->url ?>')></button></td>
            </tr>
            
          <?php endforeach ?>
        <?php endif ?>

      </tbody>
    </table>
  </div>
</div>
<input type="text" name="" id="temp-input" value="" style="opacity: 0">
<script type="text/javascript">
  function copyTest(text) {
    $('#temp-input').val(text)
    var copyText = document.getElementById("temp-input");
    copyText.select();
    document.execCommand("copy");
  }
  function unActiveFile(id,elt) {
    var cf=confirm('Are you sure to unshared file?');
    if (!cf) {
      return false;
    }
    sendToServer(id,0,elt);
  }
  function activeFile(id,elt) {
    var cf=confirm('Are you sure to share file?');
    if (!cf) {
      return false;
    }
    sendToServer(id,1,elt);
  }
  function sendToServer(id,status,elt) {
    triggerSpinner()
    $.ajax({
      url: '<?= site_url('ShareCL/ChangeStatusShare') ?>',
      type: 'POST',
      dataType: 'json',
      data: {
        idFile:id,
        status:status
      },
      success:function (resp) {
        if (resp.success) {
          debugger;
          changeStaus(elt,status,id);
        }else{
          alert('Error');
        }
      },
      error:function (resp) {
        alert('Error');
      }
    })
    .always(function() {
      removeSpinner();
    });
  }
  function changeStaus(elt,status,id) {
   if (status==0) {
    $(elt).removeClass('fa-check').addClass('fa-times').css('color', 'red').attr('onclick','activeFile('+id+',this)');
  }else{
    $(elt).removeClass('fa-times').addClass('fa-check').css('color', 'green').attr('onclick','unActiveFile('+id+',this)');
  }
}
</script>
