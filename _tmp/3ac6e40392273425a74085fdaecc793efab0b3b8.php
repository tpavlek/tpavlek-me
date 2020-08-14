<?php if(isset($caption) && $caption): ?>
    <figure class="bg-orange-lightest p-8 shadow border-2 border-orange-lighter text-center mb-2" <?php if(isset($inline) && $inline): ?> style="display: inline;" <?php endif; ?>>
        <img src="<?php echo e($page->imgpath); ?><?php echo e($name); ?>"/>
        <figcaption class="text-center"><?php echo (new Parsedown())->parse($caption); ?></figcaption>
    </figure>
<?php else: ?>
    <img src="<?php echo e($page->imgpath); ?><?php echo e($name); ?>" <?php if(isset($inline) && $inline): ?> style="display:inline;" <?php endif; ?> />
<?php endif; ?>
