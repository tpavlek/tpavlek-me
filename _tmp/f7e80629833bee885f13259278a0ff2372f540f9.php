<div class="w-full mx-auto p-2 lg:p-8">

    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($loop->index == 0): ?>
            <?php echo $__env->make('_partials.posts.hero-post', [ "post" => $post], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php elseif($loop->index > 0 && $loop->index < 4): ?>
            <?php echo $__env->make('_partials.posts.sidekick-post', [ "post" => $post], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php if($loop->index == 3 && $loop->remaining > 0): ?>
                <h1 class="text-white font-black text-5xl uppercase tracking-wide mb-4">The Archive</h1>
            <?php endif; ?>
        <?php else: ?>
            <?php echo $__env->make('_partials.posts.archive-post', [ "post" => $post], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <div class="text-center p-2">
        <?php if($pagination && $pagination->next): ?>
            <a href="<?php echo e($pagination->next); ?>" class="inline-block mx-auto py-4 px-8 bg-secondary no-underline text-white hover:bg-secondary-light shadow rounded-sm text-lg border-b-4 border-green-darker">
                <i class="fa fa-arrow-left"></i>
                Older Posts
            </a>
            &nbsp;
        <?php endif; ?>
        <?php if($pagination && $pagination->previous): ?>
            <a href="<?php echo e($pagination->previous); ?>" class="inline-block mx-auto py-4 px-8 bg-secondary no-underline text-white hover:bg-secondary-light shadow rounded-sm text-lg border-b-4 border-green-darker">
                Newer Posts
                <i class="fa fa-arrow-right"></i>
            </a>
        <?php endif; ?>
    </div>
</div>
