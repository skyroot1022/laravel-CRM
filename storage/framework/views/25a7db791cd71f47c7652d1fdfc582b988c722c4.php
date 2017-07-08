<!-- Navigation -->
<?php echo $__env->make('index.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- Main view  -->
<?php echo $__env->yieldContent('content'); ?>

<!-- Footer -->
<?php echo $__env->make('index.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
