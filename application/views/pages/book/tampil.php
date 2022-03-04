<section class="mt-3">
      <h3 align="center">Data Buku</h3>

      <?php if ($this->session->flashdata('massage')) : ?>
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
          <strong><?= $this->session->flashdata('massage') ?></strong>
        </div>
      <?php endif ?>

      <a href="<?= base_url('book/insertbook') ?>" class="btn btn-primary mb-3">Tambah Buku</a>
      <table class="table table-hover" id="example">
        <thead>
          <tr>
            <th scope="col">No</th>
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
                <img src="<?= base_url('uploads/' .$value->gambar) ?>" alt="img" width="50">
              </td>
              <td>
                <a href="<?= base_url('book/updateBook/'. $value->id_buku) ?>" class="btn btn-success btn-sm">Edit</a>
                <a href="<?= base_url("book/deleteBook/" .$value->id_buku);?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?');">Hapus</a>
              </td>
            </tr>
          <?php endforeach ?>

        </tbody>
      </table>
    </section>