<?php $__env->startSection('title', 'Residential Speed Limits'); ?>

<?php $__env->startSection('content'); ?>

    <h1 class="main-heading">Residential Speed Limits</h1>

    <article class="mx-auto bg-white shadow">
        <div class="post-content post-text">
            <p>
                50 km/h as a speed limit is too high for our neighbourhoods where people walk, live and play. This is an issue
                I feel very strongly about.
            </p>

            <p>
                And you simply cannot find a candidate in Ward 11 who has worked harder at this goal than I have. As President
                of the Hazeldean Community League, I led an initiative to lower the speed limit in our neighbourhood under
                the existing city policy.
            </p>

            <p>
                The results were catastrophic.
            </p>

            <?php echo $__env->make('_partials.posts.post-embed', [ 'slug' => 'city-dysfunction' ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <p>
                City Administration was not held to account when they simply did not complete their job or follow council's direction.
                City Council did not find it prudent to investigate why or take any real action. And the incumbent City Councillor
                for Ward 11 chose instead to propose
                <a href="http://edmontonjournal.com/news/local-news/edmonton-could-see-speed-limit-reductions-at-hundreds-of-playgrounds">
                    the question be asked to the whole city at the ballot box
                </a>
                instead of following existing policy and responding to the concerns of a neighbourhood of his constituents.
            </p>

            <p>
                Sometimes when candidates are running for city council they have broad swathes of new policy proposals to "fix the city".
                In this case, I've simply asked for city administration and council to do their job and follow existing city policy - something
                they have both refused to do.
            </p>

            <p>
                It's time to hold elected officials and city administration accountable for implementing existing policy.
            </p>

            <p>
                Elect Troy Pavlek to Edmonton City Council in Ward 11.
            </p>

            <a href="/platform" class="button">
                Platform
            </a>

        </div>
    </article>

    <h1 class="main-heading my-8 text-3xl">What I've written about it:</h1>

    <div class="blog-archive">
        <?php $__currentLoopData = $page->tagged($posts, 'speed-limits'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('_partials.posts.archive-post', [ 'post' => $post ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('_layouts.wrapped', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>