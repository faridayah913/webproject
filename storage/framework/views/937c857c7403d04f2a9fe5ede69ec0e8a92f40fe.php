<?php echo e(View:: make('title')); ?>

<?php echo e(View:: make('menu')); ?>




<div class="container">
<h5>User Account</h5>
    
</div> <br>

<div class="container">
          <div class="bd-example-snippet bd-code-snippet "><div class="bd-example">
          <main>
          <table class="table table-striped ">

    <?php if(count($listofuser)): ?>
    <thead>
        <tr colspan="3">
    <form method='get' action="/userlist">
    <input  class="search border rounded-3" value="<?php echo e(request()->input('q')); ?>" name="q">
    <button type="submit" class="btn border-none"><span class="material-symbols-rounded align-text-bottom">search</span></button>
</form></tr>
    <tr>
        <th></th>
        <th>Full name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Created Date</th>
        <th>Updated Date</th>
        <th></th>
    <tr>
</thead>
<tbody>
    <?php $__currentLoopData = $listofuser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><span class="material-symbols-outlined">
                account_circle
                </span></td>
        <!--<td><?php echo e($loop->iteration); ?></td>-->
        <td><?php echo e($user->name); ?></td>
        <td><?php echo e($user->email); ?></td>
       <td><?php echo e($user->gender); ?></td>
        <td><?php echo e($user->created_at ? date('D, d F Y',strtotime($user->created_at)) : 'N/A'); ?></td>
        <td><?php echo e($user->updated_at ? date('D, d F Y',strtotime($user->updated_at)) : 'N/A'); ?></td>
        <td><a href="/userview?rid=<?php echo e($user->id); ?>"><span class="material-symbols-outlined">
                fullscreen
                </span></a>&nbsp;&nbsp;
        <a href="/useredit?rid=<?php echo e($user->id); ?>"> <span class="material-symbols-outlined">
                  edit
                  </span></a>&nbsp;&nbsp;
        <a href="/userdelete?rid=<?php echo e($user->id); ?>"> <span class="material-symbols-outlined">
                delete
                </span></a>
</td>
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
    
 <?php echo e($listofuser->appends(['q' => Request::get('q')])->links()); ?>

</td></tr>


</tbody>
<?php else: ?>
<td>No record found</td>
<?php endif; ?>
</table>
</main>
</div>


<?php echo e(View:: make('footer')); ?>





<?php /**PATH C:\xampp\htdocs\finalproject\resources\views/userlist.blade.php ENDPATH**/ ?>