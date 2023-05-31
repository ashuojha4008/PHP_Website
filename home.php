<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="contain.css">

<!-- Icon CDN -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <title>Document</title>

   
</head>
<body>
  <!-- class="shadow-lg" -->
 
   <!-- navbar start here  -->

   <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img class="w-50" src="../Image/Eu.jpg" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ss mx-auto ">
          
          <a class="nav-link " href="Login.php">Login</a>
          <a class="nav-link" href="#">LogOut</a>
          <a class="nav-link" href="#"><span><i class="bi bi-cart4"></i></span></a>
          
        </div>
      </div>
    </div>
  </nav> -->

    <!-- navbar end here  -->


    <header class="navbar navbar-expand-lg navbar-white bg-white sticky-top">
      <div class="container-fluid">

        <a class="navbar-brand" href="#">
          <!-- <img class="w-25" src="../Image/oleez.png" alt=""> -->
          <h1>Rockstar</h1>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav xyz mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active mx-3 text-dark" aria-current="page" href="#"><b>Home</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-3 text-dark" href="about.php"><b>About</b></a>
            </li>

            <li class="nav-item">
              <a class="nav-link mx-3 text-dark" href="product.php"><b>Product</b></a>
            </li>
            <li class="nav-item">
            <a class="nav-link " href="Login.php">Login</a>
            </li>

          </ul>


        </div>
      </div>
    </header >
 

  <!-- carousel start here -->

  <div class="container-fluid">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./Image/girl1.jpg" class="d-block w-50 car-image" alt="...">
            <div class="carousel-caption d-none d-md-block text-dark">
              <h1>E-SHOPPER</h1>
              <p class="fs-5">Some representative placeholder content for the first slide.</p>
              <button class="btn btn-warning">Get it now</button>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./Image/girl2.jpg" class="d-block w-50 car-image" alt="...">
            <div class="carousel-caption d-none d-md-block text-dark">
              <h1>E-SHOPPER</h1>
              <p class="fs-5">Some representative placeholder content for the second slide.</p>
              <button class="btn btn-warning">Get it now</button>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./Image/girl3.jpg" class="d-block w-50 car-image" alt="...">
            <div class="carousel-caption d-none d-md-block text-dark">
              <h1>E-SHOPPER</h1>
              <p class="fs-5">Some representative placeholder content for the third slide.</p>
              <button class="btn btn-warning">Get it now</button>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

  <!-- carousel end here -->

  <!-- card start here -->

  <section class="container  mt-5 ">
    <!-- card-1 start here -->

    <h3>Latest collection kids -</h3>
    <hr>
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="card" style="width: 18rem;">
                <img class=" shadow-lg " src="./Image/k3.jpg" alt="">
                <div class="card-body ">
                    <h class="card-title"><b>JOHN</b></h>
                    <p class="card-text"><small><b>Price:/-3000</b></small></p>
                    <a class="btn btn-primary" href="login.php">Buy</a>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="card" style="width: 18rem;">
                <img class=" shadow-lg" src="./Image/b2.jpg" alt="">
                <div class="card-body ">
                    <h class="card-title"><b>JOHN</b></h>
                    <p class="card-text"><small><b>Price:/-1500</b></small></p>
                    <a class="btn btn-primary" href="login.php">Buy</a>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4 ">
            <div class="card" style="width: 18rem;">
                <img class=" shadow-lg" src="./Image/b3.jpg" alt="">
                <div class="card-body ">
                    <h class="card-title"><b>JOHN</b></h>
                    <p class="card-text"><small><b>Price:/-3000</b></small></p>
                    <a class="btn btn-primary" href="login.php">Buy</a>
                </div>
            </div>
        </div>
    </div>
    <!-- card-1 end here -->

    <h3 class="mt-5">Latest collection boys -</h3>
    <hr>
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="card" style="width: 18rem;">
                <img class=" shadow-lg " src="./Image/a1.jpg" alt="">
                <div class="card-body ">
                    <h class="card-title"><b>JOHN</b></h>
                    <p class="card-text"><small><b>Price:/-3000</b></small></p>
                    <a class="btn btn-primary" href="login.php">Buy</a>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="card" style="width: 18rem;">
                <img class=" shadow-lg" src="./Image/a2.jpg" alt="">
                <div class="card-body ">
                    <h class="card-title"><b>JOHN</b></h>
                    <p class="card-text"><small><b>Price:/-1500</b></small></p>
                    <a class="btn btn-primary" href="login.php">Buy</a>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="card" style="width: 18rem;">
                <img class=" shadow-lg" src="./Image/a3.jpg" alt="">
                <div class="card-body ">
                    <h class="card-title"><b>JOHN</b></h>
                    <p class="card-text"><small><b>Price:/-3000</b></small></p>
                    <a class="btn btn-primary" href="login.php">Buy</a>
                </div>
            </div>
        </div>
    </div>
    <!-- card-2 end here -->



    <h3 class="mt-5">Latest collection girls -</h3>
    <hr>
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="card" style="width: 18rem;">
                <img class=" shadow-lg " src="./Image/g1.jpg" alt="">
                <div class="card-body ">
                    <h class="card-title"><b>JOHN</b></h>
                    <p class="card-text"><small><b>Price:/-3000</b></small></p>
                    <a class="btn btn-primary" href="login.php">Buy</a>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="card" style="width: 18rem;">
                <img class=" shadow-lg" src="./Image/g2.jpg" alt="">
                <div class="card-body ">
                    <h class="card-title"><b>JOHN</b></h>
                    <p class="card-text"><small><b>Price:/-1500</b></small></p>
                    <a class="btn btn-primary" href="login.php">Buy</a>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="card" style="width: 18rem;">
                <img class=" shadow-lg" src="./Image/g3.jpg" alt="">
                <div class="card-body ">
                    <h class="card-title"><b>JOHN</b></h>
                    <p class="card-text"><small><b>Price:/-3000</b></small></p>
                    <a class="btn btn-primary" href="login.php">Buy</a>
                </div>
            </div>
        </div>
    </div>
    <!-- card-3 end here -->


  </section>
  <div class="col-sm-12 col-md-11 col-lg-11" >
                <div class="card-body " Align="right">
                    <a class="btn btn-primary" href="Product.php">Show All</a>
                </div>
        </div>
<!-- container close  -->

  <!-- card end here -->

  <footer class="bg-dark text-center text-white mt-5">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="bi bi-facebook"></i
        ></a>
  
        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="bi bi-twitter"></i
        ></a>
  
        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="bi bi-google"></i
        ></a>
  
        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="bi bi-instagram"></i
        ></a>
  
        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="bi bi-linkedin"></i
        ></a>
  
        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="bi bi-github"></i
        ></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
</body>
</html>