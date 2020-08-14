<?php $__env->startSection('title', $page->title); ?>

<?php $__env->startSection('content'); ?>
<div class="mx-auto p-1 lg:p-8">

    <?php echo $__env->make('_partials.posts.post-body', [ 'img' => $page->imgpath.$page->img, 'title' => $page->title, 'date' => $page->date, 'photo_credit' => $page->photo_credit ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="blog-archive">
        <?php if($page->getPrevious()): ?>
            <h1 class="text-white my-4">Next Post</h1>
            <?php echo $__env->make('_partials.posts.archive-post', [ 'post' => $page->getPrevious() ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endif; ?>
        <?php if($page->getNext()): ?>
            <h1 class="text-white my-4">Previous Post</h1>
            <?php echo $__env->make('_partials.posts.archive-post', [ 'post' => $page->getNext() ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endif; ?>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection("social_meta"); ?>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="@troypavlek"/>

    <meta name="twitter:title" content="<?php echo e($page->title); ?>"/>
    <meta property="og:title" content="<?php echo e($page->title); ?>"/>

    <meta name="twitter:description" content="<?php echo e($page->description); ?>"/>
    <meta property="og:description" content="<?php echo e($page->description); ?>"/>

    <?php if($page->img): ?>
        <meta name="twitter:image" content="<?php echo e($page->baseUrl); ?><?php echo e($page->imgpath); ?><?php echo e($page->img); ?>"/>
        <meta property="og:image" content="<?php echo e($page->baseUrl); ?><?php echo e($page->imgpath); ?><?php echo e($page->img); ?>"/>
    <?php else: ?>
        <meta name="twitter:image" content="<?php echo e($page->baseUrl); ?>/img/logo.png"/>
        <meta property="og:image" content="<?php echo e($page->baseUrl); ?>/img/logo.png"/>
    <?php endif; ?>

    <meta property="og:type" content="article"/>
    <meta property="fb:admins" content="551604144"/>
    <meta property="fb:app_id" content="691298577729703"/>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('_layouts.wrapped', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>