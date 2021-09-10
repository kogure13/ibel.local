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

<!-- log in -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 bg-light">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?= BASEURL ?>img/Slide1.JPG" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?= BASEURL ?>img/Slide2.JPG" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?= BASEURL ?>img/Slide3.JPG" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?= BASEURL ?>img/Slide4.JPG" class="d-block w-100" alt="...">
            </div>
          </div>
        </div>
      </div>


      <div class="col-sm-3 bg-light">

        <form action='' method='POST'>
          <fieldset>
            <legend>Log in Untuk Mengajukan Izin Belajar</legend>
            <?php if (isset($error)) : ?>
            <p style="color: red; font-style: italic;">username atau password salah!</p>

            <?php endif ?>
            <div class='mb-3'>
              <input type='text' name='username' class='form-control' placeholder='NIP' required="">
            </div>
            <div class='mb-3'>
              <input type='password' name='password' class='form-control' placeholder='PASSWORD' required="">
            </div>
            <button class=" btn btn-primary" type='submit' name="submit">Submit</button>
          </fieldset>
        </form>
      </div>

    </div>
  </div>
</section>

<!-- akhir login -->