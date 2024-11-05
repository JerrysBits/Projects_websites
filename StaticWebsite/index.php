<!DOCTYPE html>
<html lang="en">
<head>
    <title>Photo Shop</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Photo Gallary</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categories
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#mockup">Mockup</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#3dlogo">3D Logo</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#design">Graphic Design</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
        </ul> 
      </div>
    </div>
  </nav>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">

      <div class="carousel-item active">
        <img class="d-block w-100" src="images/Fortizo_Logo_Light.jpg" alt="FortizoLight 3D Logo"> 
        <div class="carousel-caption d-none d-md-block">
          <h3>Fortizo Light Photo Shop</h3>
          <!--<p>Fortizo Light 3D Logo MockUp</p>-->
        </div>
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src="images/Visual_Hunter_Man.png" alt="Visual Hunter Man MockUp"> 
        <div class="carousel-caption d-none d-md-block">
          <h3>Visual Hunter MockUp</h3>
        </div>
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src="images/TheJerrys_Services_Center.jpg" alt="TheJerrys Services Man MockUp"> 
        <div class="carousel-caption d-none d-md-block">
          <h3>TheJerrys Services MockUp</h3>
        </div>
      </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only"></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only"></span>
    </a>
  </div>

  <a id="mockup">
    <section class="my-4">
      <div class="py-4">
          <h2 class="text-center">Mockup</h2>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/Pace_Setters_Transparent.png" class="img-fluid pb-3" />
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/Visual_Hunter_MockUp_WaterDrops.jpg" class="img-fluid pb-3" />
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/Presh_Tech_YellowBG.jpg" class="img-fluid pb-3" />
          </div>
        </div>
      </div>
    </section>
  </a>

  <a id="3dlogo">
    <section class="my-4">
      <div class="py-4">
          <h2 class="text-center">3D Logo</h2>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/TheJerrys_Services_Center_Transparent.png" class="img-fluid pb-3" />
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/Harry-TV-1.jpg" class="img-fluid pb-3" />
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/Visual_Hunter_Man.png" class="img-fluid pb-3" />
          </div>
        </div>
      </div>
    </section>
  </a>

  <a id="design">
    <section class="my-4">
      <div class="py-4">
          <h2 class="text-center">Graphic Design</h2>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/TheJerrys_Auto.jpg" class="img-fluid pb-3" />
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/Fortizo_BG_Change.jpg" class="img-fluid pb-3" />
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/Pearl_Fragrance_2D.jpg" class="img-fluid pb-3" />
          </div>
        </div>
      </div>
    </section>
  </a>

  <a id="contact">
    <section class="my-4">
      <div class="py-4">
          <h2 class="text-center">Contact Us</h2>
      </div>

      <div class="w-50 m-auto" >
        <form action="about.php" method="post">
          <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" />
          </div>

          <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" />
          </div>

          <div class="form-group">
            <label>Number:</label>
            <input type="text" name="number" class="form-control" />
          </div>

          <button type="submit" class="btn btn-success" >Submit</button>
        </form>
          
      </div>
    </section>
  </a>
  
  <a id="about">
    <section class="my-4">
      <div class="py-4">
          <h2 class="text-center">About</h2>
      </div>
      <div class="container-fluid">
        <h3 class="text-center" >Temitope Olusanya</h3>
        <p class="text-center"><b>I am a passionate designer interested in working in Mockups, 3D Logo Design and general graphic designs.
          <br /> My brand name is "4'Tizo Services" and I am a full time freelancer with experience of 4 years.</b>
          <br /> Contact me on via call or WhatsApp on <b>+2347019583485</b>.
        </p>
      </div>
    </section>
  </a>
  
    <script type="text/javascript">
      $('.carousel').carousel();

    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>