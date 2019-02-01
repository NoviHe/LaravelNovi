
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $__env->yieldContent('title'); ?> Tokap Admin</title>
    <link rel="icon" type="image/png" href="<?php echo e(url('favicon.png')); ?>">

    <!-- Bootstrap core CSS-->
    <link href="<?php echo e(url('theme-sbadmin/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo e(url('theme-sbadmin/vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="<?php echo e(url('theme-sbadmin/vendor/datatables/dataTables.bootstrap4.css')); ?>" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo e(url('theme-sbadmin/css/sb-admin.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldPushContent('css'); ?>
  </head>

  <body id="page-top">

   <?php echo $__env->make('admin.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div id="wrapper">

      <!-- Sidebar -->
       <?php echo $__env->make('admin.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->

          <!-- Page Content -->
          <?php echo $__env->yieldContent('content'); ?>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <?php echo $__env->make('admin.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Modal-->
    <?php echo $__env->yieldPushContent('modal'); ?>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo e(url('theme-sbadmin/vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(url('theme-sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo e(url('theme-sbadmin/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo e(url('theme-sbadmin/js/sb-admin.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(url('theme-sbadmin/js/navbar-nav.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('js'); ?>
  </body>

</html>
