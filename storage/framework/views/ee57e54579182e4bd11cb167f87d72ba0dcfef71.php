
<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Dawasa')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
     <?php echo $__env->yieldContent('css'); ?>

</head>
    <body style="background-color: #ebf7f5;">
       
        <!-- Navigation -->
        <nav class="main-header navbar navbar-expand bg-white navbar-light">
            <img src="<?php echo e(url ('images/dawasa/dawasa_logo_2.png')); ?>" class="img-responsive">
            <a class="navbar-nav px-3 lead"><?php echo e(('ONLINE WATER CONNECTIONS MANAGEMENT SYSTEM - OWCMS')); ?></a>
            
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                
                <li class="nav-item d-none d-sm-inline-block">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <?php if(auth()->guard()->guest()): ?>
                    <li><a class="btn btn-info"  href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a></li>
                    <li><a class="btn btn-info"  href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a></li>
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
    
        <main class="py-3">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
        
    </body>
</html>
<?php /**PATH E:\Projects\dawasa\resources\views/layouts/app.blade.php ENDPATH**/ ?>