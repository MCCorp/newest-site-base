<?php echo $__env->make('blogs.blocks.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div id="content">
    <?php echo $__env->yieldContent('content'); ?>
</div>

<?php $__env->startSection('scriptDevMod'); ?>
    ##parent-placeholder-951e41b4b92ca1fa7394c46af4c6595b0d6adb43##
<?php $__env->stopSection(); ?>
<?php echo $__env->make('blogs.blocks.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>