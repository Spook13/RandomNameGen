<?php $__env->startSection('content'); ?>
<!-- Views are the interface -->
<!-- Form-->
<form class="m-3 border border-secondary rounded " method= "POST" action="<?php echo e(route('names.get')); ?>">
<?php echo csrf_field(); ?>

<!-- Gender -->
    <div class="form-group p-3">
        <label for="gender"> Number of names </label>
        <select class="form-control" id="gender" name="gender">
            <option> Female </option>
            <option> Male </option>
            <option> Neutral </option>
        </select>
    </div>
<!-- End of Gender -->

<!-- Amount of Names -->
    <div class="form-group p-3">
        <label for="amount"> Number of names </label>
        <select class="form-control" id="amount" name="amount">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
    </div>
    <!-- End of Amount of Names -->

    <!-- Submit Button -->
    <div class="d-flex justify-content-center pb-3">
        <input class="btn btn-secondary" type="submit" value="Submit">
    </div>
    <!-- End of Submit Button -->

</form>
<!-- End of Form -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/RadNames/resources/views/home.blade.php ENDPATH**/ ?>