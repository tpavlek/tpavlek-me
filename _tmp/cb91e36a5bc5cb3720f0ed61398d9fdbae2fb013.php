<a href="<?php echo e($post->getUrl()); ?>" class="block w-full h-auto lg:h-72 lg:flex mx-auto bg-tertiary no-underline mb-8">
    <?php if($post->img): ?>
        <div class="flex-1 w-full lg:w-80 h-48 lg:h-auto flex-none bg-center bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('<?php echo e($post->imgpath); ?><?php echo e($post->img); ?>');"></div>
    <?php else: ?>
        <div class="">BLOG</div>
    <?php endif; ?>
    <div class="p-2 lg:p-8 flex flex-col items-center justify-center">
        <div class="leading-loose">
            <h1 class="text-xl text-white"><?php echo e($post->title); ?></h1>
            <h3 class="text-normal text-gold"><?php echo e((new \Carbon\Carbon($post->date))->format("F jS, Y")); ?></h3>
        </div>
    </div>
</a>



