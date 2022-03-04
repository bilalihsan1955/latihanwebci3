<!-- Begin Page Content -->
<div class="container-fluid">
<?php if ($this->session->flashdata('massage')) : ?>
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
          <strong><?= $this->session->flashdata('massage') ?></strong>
        </div>
      <?php endif ?>
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">List Buku</h1>



  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">List</h6>
      <a href="<?php echo base_url('book/insertBook') ?>" class="btn btn-primary mt-3">Tambah Buku</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Judul Buku</th>
              <th scope="col">Tahun Terbit</th>
              <th scope="col">Penerbit</th>
              <th scope="col">Sampul</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>

            <?php foreach ($list as $key => $value) : ?>
              <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $value->judul ?></td>
                <td><?= $value->tahun ?></td>
                <td><?= $value->nama_penerbit ?></td>
                <td>
                  <img src="<?= base_url('uploads/' . $value->gambar) ?>" alt="img" width="80">
                </td>
                <td>
                  <a href="<?= base_url('book/updateBook/' . $value->id_buku) ?>" class="btn btn-success btn-sm">Edit</a>
                  <a href="<?= base_url('book/deleteBook/' . $value->id_buku) ?>" class="btn btn-warning btn-sm" onclick="return confirm('Apakah Anda Yakin Menghapus Buku (<?= $value->judul ?>) ');">Hapus</a>
                </td>
              </tr>
            <?php endforeach ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->