<?php echo e(View:: make('title')); ?>

<link rel="stylesheet" href="css/menu.css">
<link rel="stylesheet" href="css/heroes.css"> 
<link rel="stylesheet" href="css/navbars.css">  

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-0 border-bottom" aria-label="Eighth navbar example">
      <div class="container">
        <a class="navbar-brand" href="#"><img class="d-block mx-auto mb-0" src="images/logo.png" alt="" width="40" height="40"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="material-symbols-outlined">
expand_more
</span>
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
        <ul class="navbar-nav">
            <li class="nav-item dropdown "><a class="nav-link" href="#" data-bs-toggle="dropdown" aria-expanded="false">
          <button class="btn pt-1  border-0 d-inline-flex"><span class="material-symbols-outlined">
            shopping_cart
            </span>&nbspCart</button></a>&emsp;
            <ul class="dropdown-menu">
              <li class="dropdown-item">
                <div class="d-flex justify-content-center">Your cart is empty.</div>
                
                <div class="btn">
                  <a class="nav-link" href="/cart"><button type="button" class="btn btn-warning btn-lg px-2 fs-6 fw-bold">Go to Cart</button></a>
                </div>
  
              </li>
            </ul>
          </li>
            
            <li class="nav-item dropdown "><a class="nav-link " href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="images/profile.png" width="25px" height="25px"/></a>
            <ul class="dropdown-menu">
            <li class="dropdown-item">
                <a href="/userlist" class="dropdown-link link-dark d-inline-flex text-decoration-none" aria-current="page">
                  <span class="material-symbols-outlined">
                    list_alt
                    </span>
                  &nbspUser List
                </a>
              </li>
              <li class="dropdown-item">
                <a href="/setting" class="dropdown-link link-dark d-inline-flex text-decoration-none" aria-current="page">
                  <span class="material-symbols-outlined">
                    manage_accounts
                    </span>
                  &nbspSettings
                </a>
              </li>
              <li class="dropdown-item">
                <a href="/booking" class="dropdown-link link-dark d-inline-flex text-decoration-none">
                  <span class="material-symbols-outlined">
                    book_online
                    </span>
                    &nbspBookings
                </a>
              </li>
              <li class="dropdown-item">
                <a href="/billing" class="dropdown-link link-dark d-inline-flex text-decoration-none">
                  <span class="material-symbols-outlined">
                    receipt_long
                    </span>
                    &nbspBilling
                </a>
              </li>
              <li class="dropdown-item">
                <a href="/review" class="dropdown-link link-dark d-inline-flex text-decoration-none">
                  <span class="material-symbols-outlined">
                    reviews
                    </span>
                    &nbspReviews
                </a>
              </li>
              <li class="dropdown-item"><hr></li>
              <li class="dropdown-item"><a href="/logout" class="dropdown-link link-dark d-inline-flex text-decoration-none">
                <span class="material-symbols-outlined">
                  logout
                  </span>
                  &nbspLog out
              </a></li>
            </ul>
            </li>
          </ul>
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
              <a class="nav-link" aria-current="page" href="/user">Home</a>
            </li>
            <li class="nav-item "><a class="nav-link" href="/category" aria-expanded="false">All Categories</a>
            <li class="nav-item dropdown">   
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false"></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/destination.html">Destinations</a></li>
                <li><a class="dropdown-item" href="/tour.html">Tours and Tickets</a></li>
                <li><a class="dropdown-item" href="/activity.html">Activities</a></li>
              </ul>
            </li></li>
            <li class="nav-item">
              <a class="nav-link" href="#">Promotion</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link " href="/about">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="/contact">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

<script src="js/bootstrap.bundle.min.js"></script>
    

      
<?php /**PATH C:\xampp\htdocs\finalproject\resources\views/menu.blade.php ENDPATH**/ ?>