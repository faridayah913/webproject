<?php echo e(View::make('title')); ?>



<link href="css/features.css" rel="stylesheet">
<link href="css/navbars.css" rel="stylesheet">
<script src="js/bootstrap.bundle.min.js"></script>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-0 border-bottom" aria-label="Eighth navbar example">
      <div class="container">
        <a class="navbar-brand" href="#"><img class="d-block mx-auto mb-0" src="images/logo.png" alt="" width="40" height="40"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarsExample07">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-none" type="submit"><span class="material-symbols-outlined">
              search
              </span></button>
          </form>    
        </li>
        </ul>
        <button class="btn btn-warning rounded-4"><a class=" fw-bold py-1 px-0 text-decoration-none text-dark" href="/login">Log in</a></button>&emsp;
        <button class="btn btn-outline-warning rounded-4"><a class="text-decoration-none text-dark fw-bold py-1 px-0" href="/register">Sign up</a></button>
      </nav> 
        </div>
      </div>
    </nav>
  
  
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom " aria-label="Tenth navbar example">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active fw-bold" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="#" aria-expanded="false">All Categories</a>
            <li class="nav-item dropdown">   
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false"></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="destinations.html">Destinations</a></li>
                <li><a class="dropdown-item" href="tour.html">Tours and Tickets</a></li>
                <li><a class="dropdown-item" href="activity.html">Activities</a></li>
              </ul>
            </li></li>
            <li class="nav-item">
              <a class="nav-link" href="#">Promotion</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="contact.html">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/home1.jpg" width="100%" height="100%"/>
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Example headline.</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/home2.jpg" width="100%" height="100%"/>
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/home3.jpg" width="100%" height="100%"/>
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="container px-4 py-5" id="custom-cards">
    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <a class="text-decoration-none" href="destinations.html"><div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('images/destination.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-4">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Explore destinations in Malaysia</h3>
          </div>
        </div></a>
      </div>

      <div class="col">
        <a class="text-decoration-none" href="tour.html"><div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('images/tickets.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-4">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Tours and Tickets</h3>
            
          </div>
        </div></a>
      </div>

      <div class="col">
        <a class="text-decoration-none" href="activity.html"><div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('images/activities.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-4">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Exciting Activities</h3>
          </div>
        </div></a>
      </div>
    </div>
  </div><?php /**PATH C:\xampp\htdocs\finalproject\resources\views//homepage.blade.php ENDPATH**/ ?>