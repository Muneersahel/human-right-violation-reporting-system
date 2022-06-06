
<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Udom')); ?></title>

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

        <style>
            .input-icons i {
                position: absolute;
            }

            .input-icons {
                width: 100%;
                margin-bottom: 10px;
            }

            /* .icon {
                padding: 10px;
                color: green;
                min-width: 50px;
                text-align: center;
            } */

            .form-control{
                width: 100%;
                padding: 5px;
                /* text-align: center; */
            }

        </style>
</head>
<body style="background-color: #ebf7f5; "> <!--#099e2b; -->
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel"  > <!-- style="background: linear-gradient(to bottom  ,#88E7F8,#86E5F8,#81E1F7,#7ADBF5,#76D7F3,#70D2F1,#66C7EF,#60C1ED);" -->
          <img src="<?php echo e(url ('images/udom/udom_logo_2.png')); ?>" class="img-responsive" >
            <div class="container">
                <a class="navbar-brand" >UNIVERSITY OF DAR ES SALAM STAFFS AND STUDENTS ELECTRONIC DOCUMENT FLOW MANAGEMENT SYSTEM - EDFMS </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto ">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            
                            
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-warning" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-5">

            <?php echo $__env->yieldContent('content'); ?>

        </main>
    </div>
</body>
</html>
<?php /**PATH D:\Project\dawasa\resources\views/layouts/app3.blade.php ENDPATH**/ ?>