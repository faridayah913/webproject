<?php echo e(View::make('title')); ?>

<?php echo e(View::make('menu')); ?>



<link rel="stylesheet" href="css/heroes.css">   
<link rel="stylesheet" href="css/menu.css"> 

  <div class="container bg-light mx-auto">
            <ul class="breadcrumb">
                <li><a href="user.html">Home</a></li>
                <li>Settings</li>
              </ul>
        </div>
       
        <div id="mySidenav" class="sidenav">
            <a class="nav-link active link-dark" href="#" id="setting">Settings</a>
            <a class="nav-link" href="booking.html" id="booking">Bookings</a>
            <a class="nav-link" href="review.html" id="review">Reviews</a>
            <a class="nav-link" href="billing.html" id="billing">Billing</a>
            <a class="nav-link" href="cart.html" id="cart">Carts</a>
        </div>


  <div class="container my-5">
<?php if(!empty($users)): ?>
<div>
<form action = "useredit?rid=<?php echo e($users->id); ?>" method="post">
    <?php echo csrf_field(); ?>

    <div class="px-4 py-5 my-5  border rounded-3 shadow-lg">
          <img class="d-block mx-auto mb-4" src="images/profile.png" alt="" width="100" height="100">
              <h3 class="fw-bold text-center"><?php echo e($users->name); ?></h3>
          <div class="row flex-lg-row  g-5 py-5">
          <div class="col-lg-6 px-5">
            <div class="col-sm-6">
              <label for="fullname" class="fw-bold">Full Name</label>
              <div><?php echo e($users->name); ?></div>
            </div><br>

            <div class="col-12">
              <label for="email" class="form-label fw-bold">Email</label>
              <div><?php echo e($users->email); ?></div>
             
            </div><br>
            
            </div>
            <div class="col-10 col-sm-8 col-lg-6 me-0">
              <div class="col-6">
                <label for="gender" class="fw-bold">Gender</label>            
                <div><?php echo e($users->gender); ?></div>
                </div><br>
               
              <div class="col-6">
                <label for="birthday" class="fw-bold">Date of Birth</label>
                <div><?php echo e($users->birthday= date('d M Y',strtotime($users->birthday))); ?></div>
              </div><br>
  
            </div>
            </div>
            <div class="d-flex justify-content-end align-items-end">

              <button class="btn btn-warning rounded-4" type="button" onclick="window.location='/useredit?rid=<?php echo e($users->id); ?>'">Edit</button>&emsp;
      <button class="btn btn-outline-warning rounded-4" type="button" onclick="window.location='/userlist'">Cancel</button>
      </div>
      </form>
          </div>
    
    
                  </div>
                </div>
              </div>
            </div>
          </div>
          
<?php else: ?>
no record found
<?php endif; ?>



<?php echo e(View::make('footer')); ?>

</div>
<?php /**PATH C:\xampp\htdocs\finalproject\resources\views/userview.blade.php ENDPATH**/ ?>