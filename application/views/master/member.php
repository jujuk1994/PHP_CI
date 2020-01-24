        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Daftar Member</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>
          <a class="btn btn-primary" href="#" role="button" data-toggle="modal" data-target="#createModal"> <i class="fa fa-plus" aria-hidden="false" width="100px"></i> Create</a>
          <table class="table table-striped mt-3">
  <thead>
    <tr>

      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">No Telepon</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php $no=1;
    foreach($member as $a) : ?>
      <th scope="row"><?= $no++?></th>
      <td><?= $a['nama']?></td>
      <td><?= $a['alamat']?></td>
      <td><?= $a['no_telp']?></td>
      <td><a class="btn" href="#" role="button" data-toggle="modal" data-target="#createModal"><i class="fa fa-pencil text-success" aria-hidden="true"></i></a>
      <a class="btn" href="#" role="button" data-toggle="modal" data-target="#createModal"><i class="fa fa-trash-o text-danger" aria-hidden="true"></i></a>
    </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
      </div>
</html>
