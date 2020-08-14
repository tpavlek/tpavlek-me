<?php $__env->startSection('title', 'Subscribe to Campaign Updates'); ?>

<?php $__env->startSection("social_meta"); ?>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="@troypavlek"/>

    <meta name="twitter:title" content="<?php echo e($page->title); ?>"/>
    <meta property="og:title" content="<?php echo e($page->title); ?>"/>

    <?php if($page->description): ?>
        <meta name="twitter:description" content="<?php echo e($page->description); ?>"/>
        <meta property="og:description" content="<?php echo e($page->description); ?>"/>
    <?php else: ?>
        <meta name="twitter:description" content="Troy Pavlek -- Edmonton City Council Candidate for Ward 11"/>
        <meta property="og:description" content="Troy Pavlek -- Edmonton City Council Candidate for Ward 11"/>
    <?php endif; ?>

    <meta name="twitter:image" content="<?php echo e($page->baseUrl); ?>/img/splash-banner-bg.jpg"/>
    <meta property="og:image" content="<?php echo e($page->baseUrl); ?>/img/splash-banner-bg.jpg"/>

    <meta property="og:type" content="article"/>
    <meta property="fb:admins" content="551604144"/>
    <meta property="fb:app_id" content="691298577729703"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <h1 class="main-heading">Subscribe to Updates!</h1>

    <article class="mx-auto bg-white shadow">
        <div class="post-content post-text">
            <p>
                Subscribe to the mailing list and you'll get updates about things that I'm doing.
            </p>
            <p>
                Following on Twitter or Facebook is probably a better strategy, though.
            </p>
            <p class="text-center">
                <a href="http://eepurl.com/ccFea9" class="button button-lg"><i class="fa fa-envelope"></i> Subscribe to
                    the Mailing List</a>
            </p>
        </div>
    </article>

    <div class="text-center">
        <?php echo $__env->make('_partials.contact', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('_layouts.wrapped', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>