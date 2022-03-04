<section class="mt-3">
      <h3 align="center">Edit Data Buku</h3>

      <form method="POST" action="<?= base_url('book/updateAction') ?>" enctype="multipart/form-data">

        <input type="hidden" name="id_buku" value="<?= $row->id_buku ?>" readonly>

        <div class="mb-3">
          <label for="exampleInputJudul" class="form-label">Judul</label>
          <input type="text" name="judul" class="form-control" id="exampleInputJudul" value="<?= $row->judul ?>" required>
        </div>

        <div class="mb-3">
          <label for="exampleInputTahun" class="form-label">Tahun</label>
          <input type="text" name="tahun" class="form-control" id="exampleInputTahun" value="<?= $row->tahun ?>" required>
        </div>

        <div class="mb-3">
          <label for="exampleInputPenerbit" class="form-label">Penerbit</label>
          <!-- <input type="text" name="in_penerbit" class="form-control" id="exampleInputPenerbit" required>  -->

          <select class="form-control" name="penerbit" id="penerbit" required>
            <option value="">Select Penerbit</option>
            
            <?php foreach ($list_penerbit as $key => $value) : ?>
              <option value="<?= $value->nama_penerbit ?>" <?= $row->penerbit == $value->nama_penerbit ? 'selected' : '' ?> ><?= $value->nama_penerbit ?></option>
            <?php endforeach ?>

          </select>
        </div>

        <div class="mb-3">
          <label for="exampleInputgambar" class="form-label">gambar</label>
          <input type="file" name="file" class="form-control mb-3" id="exampleInputgambar">
          <?= $this->session->flashdata('error_img') ?>
          <img src="<?= base_url('uploads/' .$row->gambar) ?>" alt="img" width="90">

        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>
    </section>