<?php $__env->startSection('social_meta'); ?>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="@troypavlek"/>

    <meta name="twitter:title" content="<?php echo e($page->title); ?>"/>
    <meta property="og:title" content="<?php echo e($page->title); ?>"/>

    <?php if($page->description): ?>
        <meta property="og:description" content="<?php echo e($page->description); ?>"/>
    <?php else: ?>
        <meta property="og:description" content="Troy Pavlek -- Edmonton City Council Candidate for Ward 11"/>
    <?php endif; ?>

    <?php if($page->imgpath && $page->img): ?>
        <meta property="og:image" content="<?php echo e($page->baseUrl); ?><?php echo e($page->imgpath); ?><?php echo e($page->img); ?>"/>
    <?php else: ?>
        <meta property="og:image" content="<?php echo e($page->baseUrl); ?>/img/splash-banner-bg.jpg"/>
    <?php endif; ?>


    <meta property="og:type" content="article"/>
    <meta property="fb:admins" content="551604144"/>
    <meta property="fb:app_id" content="691298577729703"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body_content'); ?>
    <div class="content-wrapper unwrapped">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('_layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>