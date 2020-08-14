<div class="lg:h-32 mb-6">
    <a href="<?php echo e($post->getUrl()); ?>" class="shadow-lg block no-underline bg-tertiary h-full w-full flex flex-col lg:flex-row">
        <div class="w-full lg:w-70 h-24 lg:h-auto bg-center bg-cover text-center overflow-hidden" <?php if($post->img): ?> style="background-image: url('<?php echo e($post->imgpath); ?><?php echo e($post->img); ?>');" <?php else: ?> style="background-image: url('/img/blog-img.png');" <?php endif; ?>></div>
        <div class="p-2 lg:p-8 flex-1 flex flex-col justify-center h-full">
            <div class="leading-normal">
                <h1 class="text-white text-lg lg:text-2xl mb-2"><?php echo e($post->title); ?></h1>
                <h3 class="text-gold text-normal lg:text-lg"><?php echo e((new \Carbon\Carbon($post->date))->format("F jS, Y")); ?></h3>
            </div>
        </div>
    </a>
</div>
