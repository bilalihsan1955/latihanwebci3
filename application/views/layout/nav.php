<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url() ?>">Perpustakaan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="<?= base_url() ?>">Home</a>
        <!-- <a class="nav-link" href="<?= base_url('book') ?>">Book</a> -->
        <a class="nav-link" href="<?= base_url() ?>welcome/aboutUs">About us</a>
        <a class="nav-link" href="<?= base_url() ?>auth">Sign in</a>
        <!-- <a class="nav-link" href="<?= base_url() ?>auth/logout" onclick="return confirm('Apakah Anda Yakin Ingin Keluar?');">Sign Out</a>
        <a class="nav-link" href="#"><?= $this->session->userdata('fullname') ?></a> -->
      </div>
    </div>
  </div>
</nav>