<?php echo e(View:: make('title')); ?>

<?php echo e(View:: make('menu')); ?>


<link href="css/navbars.css" rel="stylesheet">
    <link href="css/heroes.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">

    <div class="container bg-light mx-auto">
            <ul class="breadcrumb">
                <li><a href="user.html">Home</a></li>
                <li>Settings</li>
              </ul>
        </div>
       
        <div id="mySidenav" class="sidenav">
            <a class="nav-link active link-dark" href="#" id="setting">Settings</a>
            <a class="nav-link" href="cart.html" id="cart">Carts</a>
            <a class="nav-link" href="booking.html" id="booking">Bookings</a>
            <a class="nav-link" href="billing.html" id="billing">Billing</a>
            <a class="nav-link" href="review.html" id="review">Reviews</a>            
        </div>

        <div id="overlay" onclick="off()">
        <div id="text" class=" p-4 p-md-5 w-50% border rounded-5 bg-light text-dark position-fixed top-50 start-50 translate-middle shadow" >

            
            <h5 style="text-align: center;">Are you sure you want to delete your account?</h5><br/>

          <div class="modal-footer flex-column border-top-0 ">
            
            <button type="button" class="btn btn-lg btn-warning w-100 mx-0 mb-2"><a href="deletedprofile.html" class="nav-link">Delete</a></button>
              <button type="button" class="btn btn-lg btn-outline-warning w-100 mx-0" data-bs-dismiss="modal">Cancel</button>
          </div>
          </div>
      </div>

       <div class="container my-5">
         <div class="px-4 py-5 my-5  border rounded-3 shadow-lg">
          <img class="d-block mx-auto mb-4" src="images/profile.png" alt="" width="100" height="100">
              <h3 class="fw-bold text-center">User 1</h3>
          <div class="row flex-lg-row  g-5 py-5">
          <div class="col-lg-6 px-5">
            <div class="col-sm-6">
              <label for="fullname" class="fw-bold">Full Name</label>
              <div>User 1</div>
            </div><br>

            <div class="col-sm-6">
              <label for="phonenumber" class=" fw-bold">Phone Number</label>
              <div>0123456789</div>
            </div><br>

            <div class="col-12">
              <label for="email" class="form-label fw-bold">Email</label>
              <div>user1@gmail.com</div>
             
            </div><br>
            
            </div>
            <div class="col-10 col-sm-8 col-lg-6 me-0">
              <div class="col-6">
                <label for="gender" class="fw-bold">Gender</label>            
                <div>Female</div>
                </div><br>
               
              <div class="col-6">
                <label for="birthday" class="fw-bold">Date of Birth</label>
                <div>09 Sep 1999</div>
              </div><br>
  
              <div class="col-md-5">
                <label for="country" class="fw-bold">State</label>
                <div>Kuala Lumpur</div>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-end align-items-end">

              <button class="btn btn-warning rounded-4"><a class=" fw-bold py-1 px-0 text-decoration-none text-dark" href="editprofile.html">Edit</a></button>&emsp;
      <button onclick="on()" class="btn btn-outline-warning "><a class="text-decoration-none text-dark fw-bold py-1 px-0" href="deleteprofile.html">Delete</a></button>
      </div>
          </div>
          
          </div><?php /**PATH C:\xampp\htdocs\finalproject\resources\views//deleteprofile.blade.php ENDPATH**/ ?>