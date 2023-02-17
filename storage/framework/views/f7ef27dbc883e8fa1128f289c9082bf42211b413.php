
<?php $__env->startSection('login'); ?>
<?php echo e(View:: make('title')); ?>

<link rel="stylesheet" href="css/custom.css" >
<link rel="stylesheet" href="css/heroes.css" > 

    <main>

    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
    <div class="col-lg-7 text-center text-lg-start">
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form action="login" method="post" class="p-4 p-md-5 border rounded-3 bg-light"><?php echo csrf_field(); ?>
        <div class="container mb-4 px-0 text-center">
            <div class="row gx-1">
              <div class="col">
               <div class="pb-2 pt-0" data-mdb-ripple-color="light"><button type="button" class="btn btn-outline-light text-muted" onclick="window.location='/register'"><strong>Sign up</strong></button></a></div>
              </div>
                          
              <div class="vr vr-blurry" style="height: 50px;"></div>
              
              <div class="col">
                <div class="pb-2 pt-0 border-bottom border-warning border-3 shadow"><button class="btn btn-outline-light text-dark"><strong>Log in</strong></button></div>
               </div>
            </div>
          </div>  

          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required>
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
            <label for="floatingPassword">Password</label>
          </div>
          <div class="d-flex justify-content-between text-dark">
            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>
            <div class="d-flex flex-row-reverse">
              <label>
                <a class="text-decoration-none text-warning" href="/forgot">
                Forgot password?</a>
              </label>
            </div>
          </div>

          <div class="form-floating">
          <button class="w-100 btn btn-lg btn-warning" type="submit">Login</button>
          <br/><br/>
          </div>

          <div class="form-floating">
          <small class="text-muted" >Do not have an account?</small>
          <strong class="text-warning" onclick="window.location='/register'">Register</strong>
          </div>

          <hr class="my-4">
          <h2 class="fs-5 fw-bold mb-3 text-center text-muted">Or</h2>

          <div class="form-floating">
            <a class="text-decoration-none text-dark" href="https://accounts.google.com">                   
          <button class="w-100 py-2 mb-2 btn border-1 btn-outline-warning rounded " type="button">
            <img src="images/google.png" width="16" height="16">
            <strong>Login with Google</strong></a>
          </button>
          </div>
        </form>
      </div>
    </div>

</main>

<script src="js/bootstrap.bundle.min.js"></script>

<?php echo e(View:: make('footer')); ?>

<?php $__env->stopSection(); ?>






    
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\finalproject\resources\views/login.blade.php ENDPATH**/ ?>