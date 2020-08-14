<?php $__env->startSection('content'); ?>

<?php echo $__env->make('_partials.blog-page', [ 'posts' => $pagination->items, 'pagination' => $pagination ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('_layouts.wrapped', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>