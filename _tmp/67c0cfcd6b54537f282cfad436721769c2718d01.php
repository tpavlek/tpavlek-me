<div class="project" style="background-image: url('<?php echo e($image); ?>')">
    <div class="summary-description">
        <div class="leading-normal text-white z-10 absolute pin-b pin-l pin-r pb-2">
            <h2 class="text-2xl">
                <?php echo e($title); ?>

            </h2>
            <p class="text-xl max-w-2xl mx-auto my-4">
                <?php echo $description; ?>

            </p>
            <a href="<?php echo e($action_url); ?>" class="inline-block mx-auto py-4 px-8 bg-secondary no-underline text-white hover:bg-secondary-light shadow rounded-sm text-lg border-b-4 border-green-darker">
                <?php echo e($action_name); ?> <i class="fa fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>
