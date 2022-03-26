<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <?php echo \Livewire\Livewire::styles(); ?>

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/jquery.dataTables.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/dataTables.bootstrap4.min.js')); ?>" defer></script>

    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap-select.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/gijgo.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/custom.js')); ?>"></script>

    <!-- Fonts -->
    
    
    <!-- Styles -->
    <link href="<?php echo e(asset('css/dataTables.bootstrap4.min.css')); ?> " rel="stylesheet">
    <link href="<?php echo e(asset('css/gijgo.min.css')); ?> " rel="stylesheet">
    <link href="<?php echo e(asset('css/bootstrap-select.css')); ?> " rel="stylesheet">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    

    <link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet">

    <!-- Styles -->
    <style>
        body::after {
  content: "";
  background: url(<?php echo e(asset('images/bg.png')); ?>);
    opacity: 0.05;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    position: fixed;
    z-index: -1;
    }
    </style>

    <style>
    .nav-item:hover .dropdown-menu{
        display: block;
    }
    .dropdown-menu{
        margin-top: 0;
    }
</style>
</head>

<body>
    <div id="app">
        <nav <?php if(app()->getLocale()=='ar'): ?> style="direction:rtl !important" <?php endif; ?> class=" navbar
            navbar-expand-lg navbar-light bg-white shadow-sm sticky-top " data-nav-status="toggle">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <img style="transition: all 0.5s ease-in-out;" class="hoverbadges" src="<?php echo e(asset('images/logo (1).png')); ?>" height="30px" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php if(Auth::user()): ?>
                    <ul class="navbar-nav <?php if(app()->getLocale()=='ar'): ?>  ml-auto  <?php else: ?> mr-auto <?php endif; ?>">


                        <li
                            class="nav-item dropdown <?php echo e((request()->is('patient/create')) ? 'active' : ''); ?><?php echo e((request()->is('patient')) ? 'active' : ''); ?><?php echo e((request()->is('member/create')) ? 'active' : ''); ?>">
                            <a type="button" id="navbarDropdown" class="nav-link dropdown-toggle" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php echo e(__('lang.MenuItemPatients')); ?>

                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-center <?php echo e((request()->is('patient')) ? 'active' : ''); ?>"
                                    href="<?php echo e(route('patient.index')); ?>">
                                    <?php echo e(__('lang.listPatient')); ?>

                                </a> <a
                                    class="dropdown-item text-center <?php echo e((request()->is('patient/create')) ? 'active' : ''); ?>"
                                    href="<?php echo e(route('patient.create')); ?>">
                                    <?php echo e(__('lang.addPatient')); ?>

                                </a>



                            </div>


                        </li>



                        <li
                            class="nav-item dropdown <?php echo e((request()->is('appointment')) ? 'active' : ''); ?> <?php echo e((request()->is('appointments/trashlist')) ? 'active' : ''); ?> <?php echo e((request()->is('appointment/create')) ? 'active' : ''); ?>">
                            <a type="button" id="navbarDropdown" class="nav-link dropdown-toggle" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php echo e(__('lang.listAppointment')); ?>

                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-center <?php echo e((request()->is('appointment')) ? 'active' : ''); ?>"
                                    href="<?php echo e(route('appointment.index')); ?>">
                                    <?php echo e(__('lang.listAppointment')); ?>

                                </a> <a
                                    class="dropdown-item text-center <?php echo e((request()->is('appointment/create')) ? 'active' : ''); ?>"
                                    href="<?php echo e(route('appointment.create')); ?>">
                                    <?php echo e(__('lang.addAppointment')); ?>

                                </a>
                                <a
                                    class="dropdown-item text-center <?php echo e((request()->is('appointments/trashlist')) ? 'active' : ''); ?>"
                                    href="<?php echo e(route('appointment.trashlist')); ?>">
                                    <?php echo e(__('lang.DeletedAppointment')); ?>

                                </a>



                            </div>
                        </li>
                    </ul>
                    <?php endif; ?>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav <?php if(app()->getLocale()=='ar'): ?>  mr-auto  <?php else: ?> ml-auto <?php endif; ?> ">
                        <!-- Authentication Links -->

                        <?php if(auth()->guard()->guest()): ?>
                        <?php if(Route::has('login')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('lang.login')); ?></a>
                        </li>
                        <?php endif; ?>

                        <?php if(Route::has('register')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('lang.register')); ?></a>
                        </li>
                        <?php endif; ?>
                        <?php else: ?>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php echo e(Auth::user()->name); ?>

                            </a>

                            <div class="dropdown-menu dropdown-menu-right text-center" aria-labelledby="navbarDropdown">
                                <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
                                <a class="dropdown-item" href="<?php echo e(route('admin.index')); ?>">
                                    <?php echo e(__('lang.adminPanel')); ?>

                                </a>
                                <?php endif; ?>
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <?php echo e(__('lang.logout')); ?>

                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                    <?php echo csrf_field(); ?>
                                </form>


                            </div>
                        </li>

                        <?php endif; ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo e(Config::get('languages')[App::getLocale()]); ?>

                            </a>
                            <div class="dropdown-menu text-center dropdown-menu-right"
                                aria-labelledby="navbarDropdownMenuLink">
                                <?php $__currentLoopData = Config::get('languages'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($lang != App::getLocale()): ?>
                                <a class="dropdown-item" href="<?php echo e(route('lang.switch', $lang)); ?>"> <?php echo e(__($language)); ?></a>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
    <script>
        $.fn.selectpicker.Constructor.BootstrapVersion = '4';
    </script>
    <?php echo \Livewire\Livewire::scripts(); ?>

  
</body>

</html><?php /**PATH C:\wamp64\www\opticalClinic\resources\views/layouts/app.blade.php ENDPATH**/ ?>