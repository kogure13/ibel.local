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

                <img src="<?=BASEURL?>/img/logo bkkbn.png" class="w-25">
            </div>
        </nav>
    </div>
</div>

<!-- akhir navbar -->

<!-- beranda -->

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

        <div class="col-sm-9">
            <?php if ($datapenolakan && $datatgfilepengajuan['setujui']==0): ?>
            <div class="card" <?=''; ?>>
                <?php else: ?>
                <div class="card" <?='hidden'; ?>>
                    <?php endif ?>

                    <div class="card-body">
                        <h5 class="card-title text-danger">Alasan Pengajuan Sebelumnya Ditolak</h5>
                        <p class="card-text"><?=$datapenolakan['alasan'];  ?></p>
                        <!-- <a href="#" class="btn btn-primary">Lihat</a> -->
                    </div>
                </div>


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">1. Pendaftaran</h5>
                        <?php 
                        if ($datatbfilepengajuan) : ?>
                        <p class="card-text">Anda sudah melakukan pendaftaran dan mengajukan file pendukung pengajuan.
                            Data anda sedang diteruskan ke JPT Pratama anda untuk diperiksa dan selanjutnya diajukan
                            kepada Biro Sumber Manusia BKKBN Pusat</p>

                        <?php else : ?>
                        <p class="card-text">Silahkan melakukan pendaftaran dan upload file yang diperlukan!</p>
                        <a href="<?=BASEURL?>/pegawai/formDaftar" class="btn btn-primary">Daftar</a>


                        <?php endif; ?>

                    </div>
                </div>
                <!-- notifikasi upload file pendukung ketika setujui=1-------------- -->
                <?php if ($datatgfilependukung['surat_persetujuan']): ?>
                <div class='card' <?=''; ?>>
                    <?php else: ?>
                    <div class='card' <?='hidden'; ?>>
                        <?php endif ?>

                        <div class="card-body">
                            <h5 class="card-title">2. Upload file pendukung</h5>
                            <?php if ($datatgfilependukung['prestasi_kerja']): ?>
                            <p class="card-text">Anda telah meng-upload 6 file pendukung, saat ini file anda sedang
                                diverifikasi oleh JPT Pratama anda untuk selanjutnya diajukan kepada Biro Sumber Manusia
                                BKKBN Pusat.
                            </p>
                            <?php else: ?>
                            <p class="card-text">Selamat! pengajuan telah disampaikan oleh Pejabat Tinggi Pratama anda
                                kepada Biro SDM dan telah mendapat Surat Persetujuan. Lanjutkan dengan Mengupload file
                                pendukung. Maksimal 3 bulan setelah diterima kuliah.
                            </p>
                            <a href="downloadsuratpersetujuan.php?nip=<?=$nip; ?>" class="btn btn-warning"
                                target="_blank">Surat persetujuan</a>

                            <a href="downloadsuratpernyataan.php?nip=<?=$nip; ?>" class="btn btn-warning"
                                target="_blank">Format Surat Pernyataan</a>
                            <a href="upload file pendukung.php" class="btn btn-primary">Upload File</a>

                            <?php endif ?>

                        </div>
                    </div>

                    <?php if ($datatgfilependukung['setujui']==1): ?>
                    <div class='card' <?=''; ?>>
                        <?php else: ?>
                        <div class='card' <?='hidden'; ?>>
                            <?php endif ?>
                            <div class="card-body">
                                <h5 class="card-title">3. Download Surat Perintah Izin Belajar</h5>
                                <p class="card-text">Selamat! pengajuan telah disampaikan oleh Pejabat Tinggi Pratama
                                    anda
                                    kepada Biro SDM dan telah mendapat Surat Perintah Izin Belajar.</p>
                                <a href="downloadsuratperintah.php?nip=<?=$nip; ?>" target="_blank"
                                    class="btn btn-primary">Download</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- akhir beranda -->