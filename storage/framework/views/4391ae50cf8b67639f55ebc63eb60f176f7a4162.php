<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport"/>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo e(('Dawasa')); ?></title>

	<!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, shrink-to-fit=yes" >

	<!-- Font Awesome-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

	<!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('css/customer_css/adminlte.min.css')); ?>">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

	<!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!--Java Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Latest compiled and minified JavaScript -->
    

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    

    <script src="<?php echo e(asset('js/customer_js/jquery.min.js')); ?>"></script>

    <!-- Bootstrap 4 -->
    

    <!-- FastClick -->
    <script src="<?php echo e(asset('js/customer_js/fastclick.js')); ?>"></script>

    <!-- AdminLTE App -->
    <script src="<?php echo e(asset('js/customer_js/adminlte.min.js')); ?>"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo e(asset('js/customer_js/demo.js')); ?>"></script>

    <!--Dynamic StyleSheets added from a view would be pasted here-->
        <?php echo $__env->yieldContent('css'); ?>

</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <!-- Navigation -->
    <nav class="main-header navbar navbar-expand bg-success navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a class="navbar-brand text-white" href="#"><?php echo e(('Online Water Connections Management System - OWCMS')); ?></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <?php if(auth()->guard()->guest()): ?>
                <li><a class="btn" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a></li>
                <li><a class="btn" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a></li>
            <?php else: ?>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre >
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
                <b>Version</b> 1.0.0-Edfms
            </div>
            <strong>Copyright &copy; <script>document.write(new Date().getFullYear());</script> Dawasa.</strong> All rights reserved.
        </footer>
    </section>

    <?php echo $__env->yieldContent('js'); ?>
     
</body>
</html>
<?php /**PATH D:\Project\dawasa\resources\views/layouts/user_home.blade.php ENDPATH**/ ?>