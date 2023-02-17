<?php echo e(View:: make('title')); ?>

<?php echo e(View:: make('menu')); ?>


<link href="css/navbars.css" rel="stylesheet">
    <link href="css/heroes.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">

    <div class="container bg-light mx-auto">
            <ul class="breadcrumb">
                <li><a href="user.html">Home</a></li>
                <li>Cart</li>
              </ul>
        </div>
       
        <div id="mySidenav" class="sidenav">
            <a class="nav-link" href="viewprofile.html" id="setting">Settings</a>
            <a class="nav-link" href="booking.html" id="booking">Bookings</a>
            <a class="nav-link" href="review.html" id="review">Reviews</a>
            <a class="nav-link" href="billing.html" id="billing">Billing</a>
            <a class="nav-link active link-dark" href="#" id="cart">Cart</a>
        </div>

        <div class="container my-5 mx-auto">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
              <div class="col-lg-7 p-3 p-lg-5 pt-lg-1">
                <h4 class=" fw-bold lh-1">Cart</h4>
                <div class="p-5">
                    <div class="alert">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        Your item has been successfully deleted!
                      </div>
                      <hr><br><br>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                    <h6 class="fw-bold">Explore more destinations, exciting tour & tickets, and fun activities</h6>
                  
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                    <button type="button" class="btn btn-warning btn-lg  me-md-2 fw-bold">Explore more ...</button>
                  
                </div>
               
                
              </div>
            </div>
          </div><?php /**PATH C:\xampp\htdocs\finalproject\resources\views//deletedcart.blade.php ENDPATH**/ ?>