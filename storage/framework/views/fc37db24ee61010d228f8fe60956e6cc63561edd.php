<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no shrink-to-fit=yes"/>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo e(config('app.name', 'Human Right')); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!--Java Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/jquery./jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap/bootstrap.bundle.min.js')); ?>"></script>
</head>

    <body class="hold-transition sidebar-mini" style="background-color: #ebf7f5;" >
        <!-- Navigation -->
        <nav class="main-header navbar navbar-expand bg-white navbar-light">
            <img src="<?php echo e(url ('images/app/lhrc_logo-2.png')); ?>" class="img-responsive">
            <a class="navbar-nav px-3 lead"><?php echo e(('HUMAN RIGHT VIOLATIONS REPORTING SYSTEM - HRVRS')); ?></a>
            
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item d-none d-sm-inline-block">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </li>
            </ul>
        </nav>

        <section class="content">
            <main class="py-3">
                <?php echo $__env->yieldContent('content'); ?>
            </main>
        </section>
    </body>
</html>
<?php /**PATH E:\Projects\human\resources\views/layouts/errors.blade.php ENDPATH**/ ?>