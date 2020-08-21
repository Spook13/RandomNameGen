<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
   

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

</head>
<body>
    <div id="app">

    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <a class="navbar-brand" href="<?php echo e(route('home')); ?>">Rad Name</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <!-- Name Generator -->
                <li class="nav-item mx-2">
                    <a class="nav-link text-dark" href="<?php echo e(route('home')); ?>">Name Generator</a>
                </li>
                <!-- End of Name Generator-->

                <!-- Names  -->
                <li class="nav-item mx-2">
                    <a class="nav-link text-dark" href="<?php echo e(route('names')); ?>">Names A-Z</a>
                </li>
                <!-- End of Names  -->

            </ul>
        </div>
</nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>

        <footer class="px-3">
            &copy;  2020 Alyssa Clark
        </footer>
    </div>
</body>
</html><?php /**PATH /Applications/MAMP/htdocs/RadNames/resources/views/layouts/app.blade.php ENDPATH**/ ?>