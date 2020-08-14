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

    <?php if($page->imgpath && $page->img): ?>
        <meta name="twitter:image" content="<?php echo e($page->baseUrl); ?><?php echo e($page->imgpath); ?><?php echo e($page->img); ?>"/>
        <meta property="og:image" content="<?php echo e($page->baseUrl); ?><?php echo e($page->imgpath); ?><?php echo e($page->img); ?>"/>
    <?php else: ?>
        <meta name="twitter:image" content="<?php echo e($page->baseUrl); ?>/img/splash-banner-bg.jpg"/>
        <meta property="og:image" content="<?php echo e($page->baseUrl); ?>/img/splash-banner-bg.jpg"/>
    <?php endif; ?>


    <meta property="og:type" content="article"/>
    <meta property="fb:admins" content="551604144"/>
    <meta property="fb:app_id" content="691298577729703"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="w-full flex flex-wrap justify-center">

        <?php echo $__env->make('_partials.page.embed', [ 'embed_page' => (object)[
            'url' => '/bylaw-exemption',
            'img' => '/img/exemption-card-demo.png',
            'title' => 'Bylaw Exemption Generator',
            'sub_title' => 'Bylaws? More like schmy-laws!',
            'wrapper_class' => 'w-full lg:w-2/5 h-48 shadow-md mx-4'
        ]], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo $__env->make('_partials.page.embed', [ 'embed_page' => (object)[
            'url' => '/speaking-municipally',
            'img' => '/img/projects/speaking-municipally.jpg',
            'title' => 'Speaking Municipally Podcast',
            'sub_title' => '',
            'wrapper_class' => 'w-full lg:w-2/5 h-48 shadow-md mx-4'
        ]], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo $__env->make('_partials.page.embed', [ 'embed_page' => (object)[
            'url' => '/edmonton-photo-radar',
            'img' => '/img/posts/2017-08-15-open-photo-radar-locations-audit/spider-photo.jpg',
            'title' => 'Edmonton Photo Radar: The Stats',
            'sub_title' => '',
            'wrapper_class' => 'w-full lg:w-2/5 h-48 shadow-md mx-4'
        ]], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo $__env->make('_partials.page.embed', [ 'embed_page' => (object)[
            'url' => '/jeopardy',
            'img' => '/img/posts/2017-12-05-starcraft-jeopardy-is-returning/banner.jpg',
            'title' => 'Starcraft Jeopardy',
            'sub_title' => '',
            'wrapper_class' => 'w-full lg:w-2/5 h-48 shadow-md mx-4'
        ]], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo $__env->make('_partials.page.embed', [ 'embed_page' => (object)[
            'url' => '/edmonton-memes',
            'img' => '/img/posts/2017-10-14-adding-some-levity/sweetie-star.jpg',
            'title' => 'Edmonton Memes',
            'sub_title' => 'I make political memes on YouTube sometimes',
            'wrapper_class' => 'w-full lg:w-2/5 h-48 shadow-md mx-4'
        ]], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>

    <?php echo $__env->make('_partials.blog-page', [ 'posts' => $posts->slice(0,4), 'pagination' => null ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="text-center p-2">
        <a href="/blog" class="inline-block mx-auto py-4 px-8 bg-secondary no-underline text-white hover:bg-secondary-light shadow rounded-sm text-lg border-b-4 border-green-darker">
            <i class="fa fa-archive"></i> Blog Archive
        </a>
    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('_layouts.wrapped', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>