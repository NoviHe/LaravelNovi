<?php $__env->startSection('title','Dashboard | '); ?>
<?php $__env->startSection('content'); ?>
<h1>Blank Page</h1>
 <hr>
 <p>This is a great starting point for new custom pages.</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>