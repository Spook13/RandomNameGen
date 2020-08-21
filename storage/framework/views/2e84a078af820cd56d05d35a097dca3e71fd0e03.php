<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row m-3 border border-secondary rounded">
        <h1 class="col-12 text-left"><?php echo e($nameInfo->Firstname); ?></h1>
            <p class="col-12">
                <b>Gender:</b> <?php echo e($nameInfo->Gender); ?>

            </p>
            <p class="col-12">
                <b>Origin:</b> <?php echo e($nameInfo->Origin); ?>

            </p>
            <p class="col-12">
            <b>Meaning:</b> <?php echo e($nameInfo->Definition); ?>

            </p>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/RadNames/resources/views/nameInfo.blade.php ENDPATH**/ ?>