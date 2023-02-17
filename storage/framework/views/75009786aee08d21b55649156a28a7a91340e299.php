<?php echo e(View:: make('title')); ?>

<?php echo e(View:: make('menu')); ?>


<link href="css/navbars.css" rel="stylesheet">
    <link href="css/heroes.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">

    <div class="container bg-light mx-auto">
            <ul class="breadcrumb">
                <li><a href="user.html">Home</a></li>
                <li>Reviews</li>
              </ul>
        </div>
       
        <div id="mySidenav" class="sidenav">
            <a class="nav-link" href="viewprofile.html" id="setting">Settings</a>
            <a class="nav-link" href="cart.html" id="cart">Carts</a>
            <a class="nav-link" href="billing.html" id="billing">Billings</a>
            <a class="nav-link" href="booking.html" id="booking">Bookings</a>
            <a class="nav-link active link-dark" href="#" id="review">Reviews</a>            
        </div>

        <div class="container my-5 mx-auto">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
              <div class="col-lg-7 p-3 p-lg-5 pt-lg-1">
                <img src="images/profile.png">
                
                <div class="p-5">
                <p class="lead fw-bold">User 1</p>
                <p class="lead">Tour & Tickets : Sunway Lagoon</p>
                <p class="lead">Review : Fun and exciting</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <p class="lead"></p></div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                    <a href="booking.html"><button type="button" class="btn btn-warning btn-lg  me-md-2 fw-bold">Edit</button></a>
                    <a href="deletereview.html"><button type="button" class="btn btn-outline-warning btn-lg text-dark me-md-2 fw-bold">Delete</button>
                </div>
              </div>
            </div>
          </div><?php /**PATH C:\xampp\htdocs\finalproject\resources\views//review.blade.php ENDPATH**/ ?>