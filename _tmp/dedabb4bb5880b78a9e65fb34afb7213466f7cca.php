<article class="bg-white mb-8">
    <header class="summary-block w-full mb-8 h-48 lg:h-68 relative bg-cover bg-center" style="background-image: url('<?php echo e($img); ?>');">
        <div class="summary-description">
            <div class="leading-normal z-10 absolute pin-b pin-l pin-r pb-2">
                <h1 class="text-white text-2xl lg:text-5xl"><?php echo e($title); ?></h1>
                <?php if(isset($date)): ?>
                    <h3 class="text-gold text-xl lg:text-2xl"><?php echo e((new \Carbon\Carbon($date))->format("F jS, Y")); ?></h3>
                <?php endif; ?>
            </div>
        </div>
    </header>

    <?php if(isset($photo_credit) && $photo_credit): ?>
        <div class="-mt-6 pl-4 italic text-grey-darker text-sm">Photo Credit:
            <?php if(isset($photo_credit['link'])): ?>
                <a href="<?php echo e($photo_credit['link']); ?>"><?php echo e($page->photo_credit['name']); ?></a>
            <?php else: ?>
                <?php echo e($page->photo_credit['name']); ?>

            <?php endif; ?>
        </div>
    <?php endif; ?>

    <div class="post-content max-w-xl mx-auto text-normal lg:text-xl leading-loose p-2 lg:p-8">
        <?php echo (isset($slot)) ? (new Parsedown())->parse($slot) : ''; ?>

        <?php echo $__env->yieldContent('post_content', ''); ?>
    </div>
</article>
