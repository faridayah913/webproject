<?php echo e(View::make('title')); ?>

<?php echo e(View::make('menu')); ?>


<link rel="stylesheet" href="css/navbars.css">
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
          <div class="col-lg-6 me-0">
            <div class="col-sm-6">
              <label for="fullname" class="form-label">Full Name</label>
    
              <div>
        <input class="edit w-50 border rounded-3 btn-outline-dark " maxlength="100" value="<?php echo e($users->name); ?>" type="text" name="fullname"></div>
</div><br>

<div class="col-12">
              <label for="email" class="form-label">Email</label>
              <div>
        <input class="edit w-50 border rounded-3 btn-outline-dark" maxlength="100" value="<?php echo e($users->email); ?>" type="email" name="email"></div>
</div><br>
</div>

<div class="col-10 col-sm-8 col-lg-6 me-0">
              <div class="col-6">
              <label for="gender" class="form-check-label">Gender</label> 
        <div>
        <input type="radio" name="gender" id="gender_female" value="Female"<?php if($users->gender=='Female'): ?> checked <?php endif; ?>>&nbsp;Female
        <input type="radio" name="gender" id="gender_male" value="Male"<?php if($users->gender=='Male'): ?> checked <?php endif; ?>>&nbsp;Male
       
</div>   
              
</div><br>

<div class="col-6">
                <label for="birthday" class="form-label">Date of Birth</label>
                <div>
        <input class="edit w-50 border rounded-3 btn-outline-dark" maxlength="50" value="<?php echo e($users->birthday); ?>" type="date" name="birthday">
</div>
</div><br>
</div>

<div class="d-flex justify-content-end align-items-end">
<button class="btn btn-warning rounded-4" type="submit">Save changes</button>&emsp;
<button class="btn btn-outline-warning rounded-4" type="button" onclick="javascript:history.back()">Cancel</button>
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
<?php /**PATH C:\xampp\htdocs\finalproject\resources\views/useredit.blade.php ENDPATH**/ ?>