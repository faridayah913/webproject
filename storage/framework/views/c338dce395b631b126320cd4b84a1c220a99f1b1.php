<?php echo e(View:: make('title')); ?>

<?php echo e(View:: make('menu')); ?>




<div class="container">
<h5>User Account</h5>
    
</div> <br>

<div class="container">
          <div class="bd-example-snippet bd-code-snippet "><div class="bd-example">
          <main>
          <table class="table table-striped ">

    <?php if(count($listofsetting)): ?>
    <thead>
        <tr colspan="3">
    <form method='get' action="/try">
    <input  class="search border rounded-3" value="<?php echo e(request()->input('q')); ?>" name="q">
    <button type="submit" class="btn border-none"><span class="material-symbols-rounded align-text-bottom">search</span></button>
</form></tr>
    <tr>
        <th></th>
        <th>Email</th>
        <th>Booking</th>
        <th>Cart</th>
        <th>Billing</th>
        <th>Review</th>
        <th></th>
    <tr>
</thead>
<tbody>
    <?php $__currentLoopData = $listofsetting; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><span class="material-symbols-outlined">
                account_circle
                </span></td>
        <!--<td><?php echo e($loop->iteration); ?></td>-->
        
        <td><?php echo e($settings->email); ?></td>
        <td><a href="/booking?rid=<?php echo e($settings->id); ?>"><?php echo e($settings->booking); ?></a></td>
       <td><a href="/cart?rid=<?php echo e($settings->id); ?>"> <?php echo e($settings->cart); ?></a></td>
       <td><a href="/billing?rid=<?php echo e($settings->id); ?>"> RM <?php echo e($settings->billing); ?></a></td>
        <td><a href="/review?rid=<?php echo e($settings->id); ?>"> <?php echo e($settings->review); ?></a></td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<style>
.h-5 {
height: 1em;
}

.flex {
 text-align: center;
 width: 100%;
}

 .leading-5 {
 padding: 0.8em;
}
 </style>
 <tr class="page border-light" ><td  colspan=7><br>
    
 <?php echo e($listofsetting->appends(['q' => Request::get('q')])->links()); ?>

</td></tr>


</tbody>
<?php else: ?>
<td>No record found</td>
<?php endif; ?>
</table>
</main>
</div>


<?php echo e(View:: make('footer')); ?>





<?php /**PATH C:\xampp\htdocs\finalproject\resources\views/setting.blade.php ENDPATH**/ ?>