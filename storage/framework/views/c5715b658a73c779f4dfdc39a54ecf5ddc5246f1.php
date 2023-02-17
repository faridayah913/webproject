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

        <div id="overlay" onclick="off()">
        <div id="text" class=" p-4 p-md-5 w-50% border rounded-5 bg-light text-dark position-fixed top-50 start-50 translate-middle shadow" >

            
            <h5 style="text-align: center;">Are you sure you want to delete your review?</h5><br/>

          <div class="modal-footer flex-column border-top-0 ">
            
            <button type="button" class="btn btn-lg btn-warning w-100 mx-0 mb-2"><a href="deletedreview.html" class="nav-link">Delete</a></button>
              <button type="button" class="btn btn-lg btn-outline-warning w-100 mx-0" data-bs-dismiss="modal">Cancel</button>
          </div>
          </div>
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
                    <button onclick="on()" class="btn btn-outline-warning "><a class="text-decoration-none text-dark fw-bold py-1 px-0" href="deletereview.html">Delete</a></button>
                </div>
              </div>
            </div>
          </div><?php /**PATH C:\xampp\htdocs\finalproject\resources\views//deletereview.blade.php ENDPATH**/ ?>