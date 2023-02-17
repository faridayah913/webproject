<?php echo e(View:: make('title')); ?>

<?php echo e(View:: make('menu')); ?>


<script src="js/checkout.js"></script>

<link href="css/navbars.css" rel="stylesheet">
    <link href="css/heroes.css" rel="stylesheet">
    <link href="css/progress.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">

    <div class="container">
            <ul class="progressbar">
              <li class="active">Select Booking</li>
              <li class="active">Insert Information</li>
              <li class="active">Payment</li>
            </ul>
          </div>

          <br><br>

         <div class="container my-5 mx-auto">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
              <div class="col-lg-7 p-3 p-lg-5 pt-lg-1">
                <div class="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    <h5><strong>Your payment has been successfully made!</strong></h5><br>
                    <p>Your booking and payment details will be send to your email.</p>
                    <p>You may check your booking through <a class="text-decoration-none text-dark fw-bold" href="booking.html">Bookings</a></p>
                  </div>
               
                
              </div>
              <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
                  
              </div>
              <div class="col-lg-7 p-3 p-lg-5 pt-lg-1">
               
              </div>
            </div>
          </div><?php /**PATH C:\xampp\htdocs\finalproject\resources\views//statuspayment.blade.php ENDPATH**/ ?>