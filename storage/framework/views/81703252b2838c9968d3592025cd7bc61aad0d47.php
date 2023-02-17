<?php echo e(View:: make('title')); ?>



<link href="css/heroes.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <div class="container col-xl-10 col-xxl-8 px-4 py-5 my-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        
      <form action="/reset" method="post" class="p-4 p-md-5 border rounded-3 bg-light"> <?php echo csrf_field(); ?>
          <div class="py-2 text-center">
            <h3>Reset Password</h3>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" placeholder="" name="password">
            <label for="floatingPassword">Password</label>
          </div>
          <div class="form-floating mb-3">
          <input type="password" class="form-control" placeholder="" name="password">
            <label for="floatingPassword">Verifying password</label>
          </div>
          <div class="mb-3">
            <button class="w-100 btn btn-lg btn-warning" type="submit">Reset password</button>
          </div>
        </form>
      </div>
    </div>
  </div><?php /**PATH C:\xampp\htdocs\finalproject\resources\views/reset.blade.php ENDPATH**/ ?>