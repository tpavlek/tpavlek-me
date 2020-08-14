<div class="h-64 mb-6">
    <a href="<?php echo e($post->getUrl()); ?>" class="block no-underline bg-tertiary rounded-r-xl h-full w-full flex flex-col lg:flex-row">
        <div class="w-full lg:w-72 h-32 lg:h-auto bg-center bg-cover text-center overflow-hidden" <?php if($post->img): ?> style="background-image: url('<?php echo e($post->imgpath); ?><?php echo e($post->img); ?>');" <?php else: ?> style="background-image: url('/img/blog-img.png');" <?php endif; ?>></div>
        <div class="p-2 lg:p-8 flex-1 flex flex-col justify-center h-full">
            <div class="leading-loose">
                <h1 class="text-xl text-white"><?php echo e($post->title); ?></h1>
                <h3 class="text-normal text-gold"><?php echo e((new \Carbon\Carbon($post->date))->format("F jS, Y")); ?></h3>
            </div>
        </div>
    </a>
</div>

