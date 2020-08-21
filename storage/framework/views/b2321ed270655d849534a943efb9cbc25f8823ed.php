<?php $__env->startSection('content'); ?>

<!-- Alphabet Buttons -->
<div class="m-3 border border-secondary text-center ">
    <button class="btn btn-light p-2"> <a href="#A" class="text-secondary"> A </a></button>
    <button class="btn btn-light p-2 "><a href="#B" class="text-secondary"> B </a></button>
    <button class="btn btn-light p-2 "><a href="#C" class="text-secondary"> C </a></button>
    <button class="btn btn-light p-2 "><a href="#D" class="text-secondary"> D </a></button>
    <button class="btn btn-light p-2 "><a href="#E" class="text-secondary"> E </a></button>
    <button class="btn btn-light p-2 "><a href="#F" class="text-secondary"> F </a></button>
    <button class="btn btn-light p-2 "><a href="#G" class="text-secondary"> G </a></button>
    <button class="btn btn-light p-2 "><a href="#H" class="text-secondary"> H </a></button>
    <button class="btn btn-light p-2"><a href="#I" class="text-secondary"> I </a></button>
    <button class="btn btn-light p-2"><a href="#J" class="text-secondary"> J </a></button>
    <button class="btn btn-light p-2"><a href="#K" class="text-secondary"> K </a></button>
    <button class="btn btn-light p-2"><a href="#L" class="text-secondary"> L </a></button>
    <button class="btn btn-light p-2"><a href="#M" class="text-secondary"> M </a></button>
    <button class="btn btn-light p-2"><a href="#N" class="text-secondary"> N </a></button>
    <button class="btn btn-light p-2"><a href="#O" class="text-secondary"> O </a></button>
    <button class="btn btn-light p-2"><a href="#P" class="text-secondary"> P </a></button>
    <button class="btn btn-light p-2"><a href="#Q" class="text-secondary"> Q </a></button>
    <button class="btn btn-light p-2"><a href="#R" class="text-secondary"> R </a></button>
    <button class="btn btn-light p-2"><a href="#S" class="text-secondary"> S </a></button>
    <button class="btn btn-light p-2"><a href="#T" class="text-secondary"> T </a></button>
    <button class="btn btn-light p-2"><a href="#U" class="text-secondary"> U </a></button>
    <button class="btn btn-light p-2"><a href="#V" class="text-secondary"> V </a></button>
    <button class="btn btn-light p-2"><a href="#W" class="text-secondary"> W </a></button>
    <button class="btn btn-light p-2"><a href="#X" class="text-secondary"> X </a></button>
    <button class="btn btn-light p-2"><a href="#Y" class="text-secondary"> Y </a></button>
    <button class="btn btn-light p-2"><a href="#Z" class="text-secondary"> Z </a></button>
</div>
<!-- End of Alphabet Buttons -->

<!-- A Section -->

<div class="container" id="A">
    <h1 class="m-3">A</h1>
    <div class="row m-3 border border-secondary rounded">
        <?php $__currentLoopData = $ANames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a class= "col-4 " href=<?php echo e(route("name.info", [ "type" => "Firstname", "id" => $name->ID ])); ?> >
            <button class="col-4 px-2 py-3 btn btn-light text-left"><?php echo e($name->Firstname); ?></button>
        </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<!-- End of A Section -->

<!-- B Section -->
<div class="container" id="B">
    <h1 class="m-3 pt-3">B</h1>
    <div class="row m-3 border border-secondary rounded">
        <?php $__currentLoopData = $BNames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a class= "col-4 " href=<?php echo e(route("name.info", [ "type" => "Firstname", "id" => $name->ID ])); ?> >
            <button class="col-4 px-2 py-3 btn btn-light text-left"><?php echo e($name->Firstname); ?></button>
        </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<!-- End of  B Section -->

<!-- C Section -->
<div class="container" id="C">
    <h1 class="m-3 pt-3">C</h1>
    <div class="row m-3 border border-secondary rounded">
        <?php $__currentLoopData = $CNames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a class= "col-4 " href=<?php echo e(route("name.info", [ "type" => "Firstname", "id" => $name->ID ])); ?> >
            <button class="col-4 px-2 py-3 btn btn-light text-left"><?php echo e($name->Firstname); ?></button>
        </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<!-- End of C section -->

<!-- D Section -->
<div class="container" id="D">
    <h1 class="m-3 pt-3">D</h1>
    <div class="row m-3 border border-secondary rounded">
        <?php $__currentLoopData = $DNames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a class= "col-4 " href=<?php echo e(route("name.info", [ "type" => "Firstname", "id" => $name->ID ])); ?> >
            <button class="col-4 px-2 py-3 btn btn-light text-left"><?php echo e($name->Firstname); ?></button>
        </a>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<!-- End of D Section -->

<!-- E Section -->
<div class="container" id="E">
    <h1 class="m-3 pt-3">E</h1>
    <div class="row m-3 border border-secondary rounded">
        <?php $__currentLoopData = $ENames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a class= "col-4 " href=<?php echo e(route("name.info", [ "type" => "Firstname", "id" => $name->ID ])); ?> >
            <button class="col-4 px-2 py-3 btn btn-light text-left"><?php echo e($name->Firstname); ?></button>
        </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<!-- End of E Section -->

<!-- F Section -->
<div class="container" id="F">
    <h1 class="m-3 pt-3">F</h1>
    <div class="row m-3 border border-secondary rounded">
        <?php $__currentLoopData = $ENames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a class= "col-4 " href=<?php echo e(route("name.info", [ "type" => "Firstname", "id" => $name->ID ])); ?> >
            <button class="col-4 px-2 py-3 btn btn-light text-left"><?php echo e($name->Firstname); ?></button>
        </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<!-- End of F Section -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/RadNames/resources/views/names.blade.php ENDPATH**/ ?>