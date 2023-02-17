
<?php $__env->startSection('login'); ?>
<?php echo e(View:: make('title')); ?>


<link href="css/heroes.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">

    <main>
 
  <div class="container col-xl-10 col-xxl-8 px-4 py-5 my-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        
      <form action="/forgot" method="post" class="p-4 p-md-5 border rounded-3 bg-light" >
      <?php echo csrf_field(); ?>
          <div class="py-2 text-center">
            <h3>Forgot Password</h3>
            
          </div>
          <div class="pb-3">
            
            <label><strong>Email address</strong></label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="email" placeholder="name@example.com" require>
            <label for="floatingInput">Enter your email address</label>
          </div>
          
          <div class="mb-3">
            <button class="w-100 btn btn-lg btn-warning" type="submit">Forgot password</button>
          </div>
          
        </form>
      </div>
    </div>
  </div>

  
</main>

<script src="js/bootstrap.bundle.min.js"></script>

<?php echo e(View:: make('footer')); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\finalproject\resources\views/forgot.blade.php ENDPATH**/ ?>