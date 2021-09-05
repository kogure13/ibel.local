
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>beranda</title>
  </head>
  <body>
    <!-- navbar -->
    <div class="container">
      <div class="row">                 
            <nav class="navbar navbar-expand-lg navbar-light bg-light">

              <div class="container-fluid">
                <span><h3>Sistem Informasi Izin Belajar</h3></span>
              </div>

              <div class="justify-content-end container-fluid">
                
                  <img src="gambar\logo bkkbn.png" class="w-25">
                
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
                <img src="gambar\Slide1.JPG" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="gambar\Slide2.JPG" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="gambar\Slide3.JPG" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="gambar\Slide4.JPG" class="d-block w-100" alt="...">
              </div>
            </div>
          </div>
       </div>


        <div class="col-sm-3 bg-light"> 
            
          <form action='' method='POST'>
            <fieldset>
              <legend>Log in Untuk Mengajukan Izin Belajar</legend>
              <?php if (isset($error)): ?>
                <p style="color: red; font-style: italic;">username atau password salah!</p>

              <?php endif ?>
              <div class='mb-3'>
                <input type='text' name='username' class='form-control' placeholder='NIP' required="">
              </div>
              <div class='mb-3'>
                <input type='password' name='password' class='form-control' placeholder='PASSWORD' required="">
              </div>
                <div class="g-recaptcha" data-sitekey="6LdkCZYaAAAAAOQZ9u6IvyRJbOpV2nrj166xS1vp
"></div>
            <button class=" btn btn-primary" type='submit'  name="submit">Submit</button>
             

            </fieldset>              
          </form>                      
        </div>
                  
      </div>
    </div>
    </section>
    
    <!-- akhir login -->
   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>