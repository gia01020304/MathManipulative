<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Url</th>
    </tr>
  </thead>
  <tbody>
  <?php if (isset($urls)): ?>
    <?php $i=1 ?>
     <?php foreach ($urls as $value): ?>
      <tr>
        <th scope="row"><?= $i++ ?></th>
        <td><a target="_blank" href="<?=site_url('ShareCL/Share/').$value->key?>"><?= site_url('ShareCL/Share/').$value->key?></a></td>
      </tr>
    <?php endforeach ?>
  <?php endif ?>
  </tbody>
</table>