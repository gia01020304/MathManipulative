<style type="text/css">
  .btnShare{
    width: 50px;
    height: 25px;
  }
</style>
<div class="container-fluid" style="margin-left:80px;margin-right:80px;">
  <br>
  <div class="box">
    <div class="box-header">
      <form id="frmFilter">
        <div class="input-group">
          <input type="text" class="form-control" id="valueText" placeholder="Search by name..." id="">
          <span class="input-group-btn">
            <button class="btn btn-default" type="submit" id="searchInput" onclick="filter($('#valueText').val().toLowerCase())">
              <i class="fa fa-search"></i>
            </button>
            <button class="btn btn-default" type="button" id="searchInput" onclick="filter()">
              Reset
            </button>
          </span>
        </div>
      </form>
    </div>
    <!-- /.box-header -->
    <div class="box-body" style="overflow: auto;max-height: 300px" id="bodyTable">
      <table class="table table-bordered table-hover" id="myTable">
        <tr>
         <th>#</th>
         <th>Name</th>
         <th>Url</th>
         <th>Share Status</th>
         <th>Action</th>
       </tr>
       <?php if (isset($shares)): ?>
        <?php $i=1 ?>
        <?php foreach ($shares as $val): ?>
          <tr class="item">
            <th scope="row"><?= $i++ ?></th>
            <td><?= $val->name ?></td>
            <td class="div-url"><a target="_blank" href="<?= $val->url ?>"><?= $val->url ?></a></td>
            <td>
              <?php if ($val->isshare): ?>
                <button class="btn btn-outline-secondary fas fa-check btnShare" style="color: green" onclick=unActiveFile(<?= $val->id ?>,this)></button>
                <?php else: ?>
                  <button class="btn btn-outline-secondary fas fa-times btnShare" style="color: red" onclick=activeFile(<?= $val->id ?>,this)></button>
                <?php endif ?>
              </td>
              <td><button class="btn far fa-copy btnClipboard" title="Copy to clipboard" onclick=copyTest('<?= $val->url ?>')></button></td>
            </tr>

          <?php endforeach ?>
        <?php endif ?>
      </table>
   <!--  <ul class="pagination">
      <li class="active"><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
    </ul> -->
  </div>
</div>
</div>
<br>
<input type="text" name="" id="temp-input" value="" style="opacity: 0">
<script type="text/javascript">
  document.querySelector("#frmFilter").addEventListener("submit", function(e){
    e.preventDefault();
  });

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
function filter(value="") {
  $("#myTable tr.item").filter(function() {
    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
  });
}
</script>
