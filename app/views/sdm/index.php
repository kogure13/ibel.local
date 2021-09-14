<!-- navbar -->
<div class="container">
  <div class="row">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <span>
          <h3>Sistem Informasi Izin Belajar</h3>
        </span>
      </div>

      <div class="justify-content-end container-fluid">
        <img src="<?= BASEURL ?>img/logo bkkbn.png" class="w-25">
      </div>
    </nav>
  </div>
</div>

<!-- akhir navbar -->

<!-- beranda -->
<!-- profil -->
<div class="container">
  <div class="row">
    <div class="col-sm-3">
      <div class="card bg-success">
        <img src="<?= BASEURL ?>img/user.svg" class="card-img-top" alt="..."
          style="width: 85%; padding: 15px 40px; margin: 5px 15px; padding-bottom: 0 !important; margin-bottom: 0 !important;">
        <div class="card-body">
          <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
              data-bs-toggle="dropdown" aria-expanded="false">
              Nama Saya Adalah<?= $_SESSION['nama'] ?>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">Ganti Password</a></li>
              <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
          </div>

          <!-- <a href="ubah password.php?nip=<?= $nip; ?>" class="btn btn-primary">Ganti Password</a>
          <form action="" method="POST"> <button class="btn btn-warning" type="submit" name="logout">Log Out</button>
          </form> -->
        </div>
      </div>
    </div>
    <!-- akhir profil -->

    <div class="col-sm-9">
      <a href="daftar pengaju untuk sdm.php" class="btn btn-outline-dark">Daftar Pengaju Tahap 1</a>
      <a href="daftar pengaju file pendukung untuk sdm.php" class="btn btn-outline-dark">Daftar Pengaju Tahap 2</a>
      <a href="daftar yang lolos.php" class="btn btn-outline-dark">Daftar Pengajuan yang berhasil</a>
      <a href="history penolakan untuk sdm.php" class="btn btn-outline-dark">History Penolakan</a>
    </div>

    <!-- akhir beranda -->