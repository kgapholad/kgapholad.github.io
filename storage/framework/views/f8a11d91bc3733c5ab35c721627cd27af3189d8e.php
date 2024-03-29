<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Larry')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="icon" href="http://www.theengagecloud.co.za/wp-content/uploads/2018/06/ENGAGE-Logo-B-1.jpg" type="image/png"/>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <!--<a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <?php echo e(config('app.name', 'Laravel')); ?>

                </a>-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    

                    

                    
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
						<!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
								<!-- Right Side Of Navbar -->
                    
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li></ul>
                            <?php endif; ?>
                        <?php else: ?>
							<!-- Left Side Of Navbar -->
							<ul class="navbar-nav mr-auto">
							<!--<li class="nav-item">
								<a  class="nav-link" href="<?php echo e(url('/home')); ?>">Home</a>
                            </li>
                            <li class="nav-item">
								<a class="nav-link" href="<?php echo e(url('/profile')); ?>">Profile</a>
							</li>-->
                            <li class="nav-item">
								<a class="nav-link" href="<?php echo e(url('/ussds')); ?>">USSDs</a>
                            </li>
                            <li class="nav-item">
								<a class="nav-link" href="<?php echo e(url('/create')); ?>">Create Ussd</a>
							</li>
							<li class="nav-item">
								<a  class="nav-link" href="<?php echo e(url('/user')); ?>">Users</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo e(url('/contact')); ?>">Contact us</a>
							</li>
							
							</ul>
							<!-- Right Side Of Navbar -->
							<ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
							</ul>
                        <?php endif; ?>
                    
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\larry\resources\views/layouts/app.blade.php ENDPATH**/ ?>