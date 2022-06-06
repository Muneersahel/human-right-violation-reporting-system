<!DOCTYPE html>
<html>
<head>
    <!-- CSRF Token -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=yes" name="viewport"/>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo e(config('app.name', 'Human Right')); ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

	<!-- Font Awesome-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    
    <!-- Select -->
    <link rel="stylesheet" href="<?php echo e(asset('css/select/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/select/select2-bootstrap4.min.css')); ?>">
    
    <!-- BS Stepper -->
    <link rel="stylesheet" href="<?php echo e(asset('css/bs-stepper/bs-stepper.min.css')); ?>">

	<!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('css/app/adminlte.min.css')); ?>">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    <!--App Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="<?php echo e(asset('js/jquery/jquery.min.js')); ?>"></script>

    <!-- Bootstrap 4 -->
    

    <!-- BS-Stepper -->
    <script src="<?php echo e(asset('js/bs-stepper/bs-stepper.min.js')); ?>"></script>

    <!-- Bs-Custom-file-input -->
    <script src="<?php echo e(asset('js/bs-custom/bs-custom-file-input.min.js')); ?>"></script>

    <!-- AdminLTE App -->
    <script src="<?php echo e(asset('js/app/adminlte.min.js')); ?>"></script>
    
    <!--Dynamic StyleSheets added from a view would be pasted here  -->
        <?php echo $__env->yieldContent('css'); ?>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    
      
    <!-- Navigation -->
    <nav class="main-header navbar navbar-expand bg-success navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a class="navbar-brand text-white" href=""><?php echo e(('Human Right Violations Reporting System - HRVRS')); ?></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <?php if(auth()->guard()->guest()): ?>
                <li><a class="btn" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a></li>
                <li><a class="btn" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a></li>
            <?php else: ?>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre >
                        <i class="fa fa-user"></i> &nbsp;<?php echo e(Auth::user()->last_name); ?><span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-warning" href="<?php echo e(route('logout')); ?>"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off"></i> <?php echo e(__('Logout')); ?>

                        </a>

                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>
                    </div>
                </li>
            <?php endif; ?>
        </ul>
    </nav>

    <!-- Main Sidebar Container -->
    <div class="sidebar">
        <?php echo $__env->yieldContent('sidebar'); ?>
    </div>

    <section class="content">
        <main class="py-2">
            <?php echo $__env->yieldContent('main'); ?>
        </main>

        <footer class="main-footer bg-white">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 1.0.0-hrvrs
            </div>
            <strong>Copyright &copy; <script>document.write(new Date().getFullYear());</script> LHRC.</strong> All rights reserved.
        </footer>
    </section>

    <?php echo $__env->yieldContent('js'); ?>
     
</body>
</html>
<?php /**PATH E:\Projects\human\resources\views/layouts/home.blade.php ENDPATH**/ ?>