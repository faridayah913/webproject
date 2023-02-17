<?php echo e(View:: make('title')); ?>

<?php echo e(View:: make('menu')); ?>


<link href="css/navbars.css" rel="stylesheet">
<link href="css/heroes.css" rel="stylesheet">
<link href="css/menu.css" rel="stylesheet">

<div class="container bg-light mx-auto">
            <ul class="breadcrumb">
                <li><a href="user.html">Home</a></li>
                <li>Billing</li>
              </ul>
        </div>
       
        <div id="mySidenav" class="sidenav">
            <a class="nav-link" href="viewprofile.html" id="setting">Settings</a>
            <a class="nav-link" href="cart.html" id="cart">Cart</a>
            <a class="nav-link " href="booking.html" id="booking">Bookings</a>            
            <a class="nav-link active link-dark" href="#" id="billing">Billing</a>            
            <a class="nav-link" href="review.html" id="review">Reviews</a>
        </div>

        <div class="container my-5 mx-auto">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
              <div class="col-lg-7 p-3 p-lg-5 pt-lg-1">
                <h3>Billing Details</h3>
                <div class="p-5">
                <h4>PRICE: RM140.00</h4>
                <br/>
                <p class="lead fw-bold">User 1 (user1@gmail.com)</p>
                <p class="lead">Tour & Tickets: Sunway Lagoon</p>
                <p class="lead">Ticket: Admission Ticket</p>
                <p class="lead">Status:<strong> PAID</strong></p>
                <p class="lead">Payment date: 09 Feb 2023 , Mon</p>
                </div>
              </div>
            </div>
          </div><?php /**PATH C:\xampp\htdocs\finalproject\resources\views//billing.blade.php ENDPATH**/ ?>