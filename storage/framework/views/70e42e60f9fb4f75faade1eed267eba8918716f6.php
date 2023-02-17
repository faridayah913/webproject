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
            <a class="nav-link" href="cart.html" id="cart">Cart</a>
            <a class="nav-link" href="billing.html" id="billing">Billing</a>
            <a class="nav-link" href="booking.html" id="booking">Bookings</a>
            <a class="nav-link active link-dark" href="#" id="review">Reviews</a>   
        </div>

        <div class="container my-5 mx-auto">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
              <div class="col-lg-7 p-3 p-lg-5 pt-lg-1">
                <div class="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    Your review has been successfully deleted!
                  </div>
               
                
              </div>
              <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
                  
              </div>
              <div class="col-lg-7 p-3 p-lg-5 pt-lg-1">
               
              </div>
            </div>
          </div><?php /**PATH C:\xampp\htdocs\finalproject\resources\views//deletedreview.blade.php ENDPATH**/ ?>