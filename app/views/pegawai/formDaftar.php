<!-- navbar -->
<div class="container">
      <div class="row">
        
         
            <nav class="navbar navbar-expand-lg navbar-light bg-light">

              <div class="container-fluid">
                <span><h3>Pendaftaran Izin Belajar</h3></span>
              </div>

              <div class="justify-content-end container-fluid">
                
                  <img src="gambar\logo bkkbn.png" class="w-25">
                
              </div>

              
            </nav>

                   

        
      </div>
    </div>
    <!-- akhir navbar -->


    <!-- form daftar -->
      <div class="container">
        <div class="row">
          <div class="col-sm-6 bg-light">
            <form action="form pendaftaranL.php" method="POST">
              <div class="row mb-3">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nama_karyawan" required value="<?=$pns["nama_karyawan"];?>">
                </div>
              </div>
              <div class="row mb-3">
                <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nip" required value="<?=$pns["nip"];?>">
                </div>
              </div>
              <div class="row mb-3">
                <label for="tempatlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="tempatlahir" required value="<?=$pns["tempat_lahir"];?>">
                </div>
              </div>
              <div class="row mb-3">
                <label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" name="tanggallahir" required value="<?=$pns["tanggal_lahir"];?>">
                </div>
              </div>
              <div class="row mb-3">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="alamat" required value="<?=$pns["alamat"];?>">
                </div>
              </div>
              <div class="row mb-3">
                <label for="tmtpns" class="col-sm-2 col-form-label">TMT PNS</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" name="tmtpns" required value="<?=$pns["tmt"];?>">
                </div>
              </div>

              <div class="row mb-3">
                <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="jabatan" required value="<?=$pns["jabatan"];?>">
                </div>
              </div>

              <div class="row mb-3">
                <label for="pangkatgolongan" class="col-sm-3 col-form-label">Golongan Ruang</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="golongan" required value="<?=$pns["golongan"];?>">
                </div>
              </div>

              <div class="row mb-3">
                <label for="unitkerja" class="col-sm-3 col-form-label">Unit Kerja</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="unit_kerja" required value="<?=$pns["unit_kerja"];?>">
                </div>
              </div>
              
              <div class="row mb-3">
                <label for="alamat" class="col-sm-3 col-form-label">Alamat Kantor</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="alamatkantor" required value="<?=$pns["alamat_kantor"];?>">
                </div>
              </div>

              

              <div class="row mb-3">
                <label for="prestasikerja" class="col-sm-3 col-form-label">Nilai Prestasi Kerja Terakhir</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" required name="prestasikerja">
                </div>
              </div>

              <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-6 pt-0">Sedang Menjalani Hukuman Disiplin?</legend>
                <div class="col-sm-2">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radiohukuman" id="gridRadios1" value="ya" checked>
                    <label class="form-check-label" for="gridRadios1">
                      YA
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radiohukuman" id="gridRadios2" value="tidak" checked="TIDAK">
                    <label class="form-check-label" for="gridRadios2">
                      TIDAK
                    </label>
                  </div>
                </div>
              </fieldset>

               <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-6 pt-0">Sedang Menjalani Pemberhentian Sementara?</legend>
                <div class="col-sm-2">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radiopemberhentian" id="gridRadios1" value="ya" checked>
                    <label class="form-check-label" for="gridRadios1">
                      YA
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radiopemberhentian" id="gridRadios2" checked="TIDAK" value="tidak">
                    <label class="form-check-label" for="gridRadios2">
                      TIDAK
                    </label>
                  </div>
                </div>
              </fieldset>

              <div class="row mb-3">
                <label for="perguruantinggi" class="col-sm-3 col-form-label">Perguruan Tinggi Yang Dituju</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="nama_universitas" required value="">
                </div>
                <!-- asalnya list perguruan tinggi -->
                <!-- <div class="col-sm-9">
                  <?php 
                    $data_universitas=mysqli_query($koneksi,"SELECT * FROM data_universitas");
                    
                  
                   ?>
                  <select class="form-select" name="nama_universitas" aria-label="Default select example">
                    <option selected>pilih perguran tinggi</option>
                    <?php 
                      foreach ($data_universitas as $universitas):?>
                    <option value="<?=$universitas['nama_universitas']; ?>"><?=$universitas['nama_universitas']; ?></option>
                  
                  <?php endforeach; ?>
                  <script>
                    $(".form-select").select2();
                  </script>
                  </select>
                </div> -->
              </div>

              <div class="row mb-3">
                <label for="alamatpt" class="col-sm-3 col-form-label">Alamat Perguruan Tinggi</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" required name="alamatpt">
                </div>
              </div>

              <div class="row mb-3">
                <label for="Program" class="col-sm-3 col-form-label">Jenjang</label>
                <div class="col-sm-9">
                  <select class="form-select" name="jenjang" aria-label="Default select example">
                    <option selected>Pilih Program</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                  </select>
                </div>
              </div>

              <div class="row mb-3">
                <label for="jurusan" class="col-sm-3 col-form-label">Jurusan</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" required name="jurusan">
                </div>
              </div>

              <div class="row mb-3">
                <label for="perguruantinggi" class="col-sm-3 col-form-label">Akreditasi PRODI</label>
                <div class="col-sm-9">
                  <select class="form-select" name="akreditasi" aria-label="Default select example">
                    <option selected>Pilih Akreditasi</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                  </select>
                </div>
              </div>
                       
              
              <div class="row mb-3">
                <label for="rencanamasukkuliah" class="col-sm-3 col-form-label">Rencana Masuk Kuliah</label>
                <div class="col-sm-9">
                  <input type="date" class="form-control" required name="rencanamasukkuliah">
                </div>
              </div>

                             

              
              
              <button type="submit" class="btn btn-primary" name="simpan">Simpan</button></div>
            </form>
          </div>

         
        </div>
      </div>

    <!-- akhir form daftar -->