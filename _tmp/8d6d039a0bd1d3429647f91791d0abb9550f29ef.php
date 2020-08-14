<?php $__env->startSection('title', $page->title); ?>

<?php $__env->startSection('content'); ?>

    <article class="mx-auto bg-white shadow">
        <header class="w-full mb-8 h-68 relative bg-cover bg-center" style="background-image: url('<?php echo e($page->imgpath); ?><?php echo e("launch.jpg"); ?>');">

            <div class="summary-description">
                <div class="leading-normal z-10 absolute pin-b pin-l pin-r pb-2">
                    <h2 class="text-white text-5xl"><?php echo e($page->title); ?></h2>
                    <h3 class="text-gold text-2xl">Troy's Vision for Ward 11</h3>
                </div>
            </div>

        </header>
        <div class="post-content max-w-xl mx-auto text-xl leading-loose p-8">
            <div class="-mx-8">
                <?php echo $__env->make('_partials.page.embed', [ 'embed_page' => (object)[
                    'url' => '/vision-zero',
                    'img' => '/img/platform/vision-zero.jpg',
                    'title' => 'Vision Zero',
                    'sub_title' => 'End all serious injuries and fatalities in traffic'
                ]], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>

            <p>
                We need to stop paying lip service to Vision Zero and take real action. That starts with leadership that can
                understand and commit to the hard work.
            </p>

            <div class="-mx-8">
                <?php echo $__env->make("_partials.page.embed", [ 'embed_page' => (object)[
                    'url' => '/open-city',
                    'img' => '/img/platform/open-city.jpg',
                    'title' => 'Open City',
                    'sub_title' => 'True government openness and transparency, leveraging technology'
                ]], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>

            <p>
                When City Council makes a decision, all the data used to make that decision should be publicly available, by
                default, without you or a journalist having to ask.
            </p>

            <div class="-mx-8">
                <?php echo $__env->make("_partials.page.embed", [ 'embed_page' => (object)[
                    'url' => '/photo-radar-reform',
                    'img' => '/img/platform/photo-radar-reform.jpg',
                    'title' => 'Photo Radar Reform',
                    'sub_title' => 'Rebuilding public trust in the program'
                ]], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>

            <p>
                The Photo Radar program has lost the public trust. All data relating to the program needs to be made public,
                allowing <em>anyone</em> to audit the program and see where reforms are truly needed.
            </p>

            <div class="-mx-8">
                <?php echo $__env->make("_partials.page.embed", [ 'embed_page' => (object)[
                    'url' => '/missing-middle',
                    'img' => '/img/platform/infill.jpg',
                    'title' => 'Infill',
                    'sub_title' => 'Embracing the missing middle for a more sustainable city'
                ]], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>

            <p>
                Missing middle housing like townhomes, stacked row housing, courtyard apartments and low-rise apartments
                can enable us to achieve much more density without compromising human scale characteristics of neighbourhoods.
            </p>

            <div class="-mx-8">
                <?php echo $__env->make("_partials.page.embed", [ 'embed_page' => (object)[
                   'url' => '/transit',
                   'img' => '/img/platform/transit.jpg',
                   'title' => 'Transit',
                   'sub_title' => "Let's make our transit system competitive with the private car"
               ]], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>

            <p>
                Our transit system is difficult to use, and expensive. We need to make the system an appealing choice,
                rather than a punitive one.
            </p>

            <div class="-mx-8">
                <?php echo $__env->make("_partials.page.embed", [ 'embed_page' => (object)[
                   'url' => '/residential-speed-limits',
                   'img' => '/img/platform/residential-speed-limits.jpg',
                   'title' => 'Residential Speed Limits',
                   'sub_title' => "50 km/h is too high for communities where people live"
               ]], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>

            <p>
                You cannot find a candidate in Ward 11 who has worked harder to make 40km/h in our neighbourhoods a reality.
            </p>

            <hr />

            <p>
                <strong>Note:</strong> This platform is a living document, and is generally just a collection of posts
                that I have already made, so it's easier to see at a glance where I stand.
            </p>

            <p>
                If you have any questions or something isn't addressed here, feel free to reach out. I'm happy to answer
                questions, as I've done in my <a href="https://www.reddit.com/r/Edmonton/comments/5xaway/im_troy_pavlek_and_my_campaign_for_city_council/">reddit AMA</a>, for example.
            </p>

            <blockquote>
                <p>Let's Talk</p>
            </blockquote>

        </div>

    </article>

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