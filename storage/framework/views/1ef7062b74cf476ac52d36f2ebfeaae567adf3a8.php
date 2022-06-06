<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo e(('Dawasa')); ?></title>

	<!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes" >

	<!-- Font Awesome-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

	<!-- Theme style -->
    

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

	<!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!--Java Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- jQuery -->
    
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

    <body class="hold-transition sidebar-mini" style="background-image: url('/images/dawasa/dawasa_log.png');" >

        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel center">
                <img src="<?php echo e(asset ('images/dawasa/dawasa_logo_2.png')); ?>" >
                <div class="container">
                    <a class="navbar-brand" >ONLINE WATER CONNECTIONS MANAGEMENT SYSTEM - OWCMS</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>
        </div>

        <section class="content">
            <main class="py-3">
                <?php echo $__env->yieldContent('content'); ?>
            </main>
        </section>

        <?php echo $__env->yieldContent('js'); ?>

    </body>
</html>
<?php /**PATH D:\Project\dawasa\resources\views/layouts/app2.blade.php ENDPATH**/ ?>