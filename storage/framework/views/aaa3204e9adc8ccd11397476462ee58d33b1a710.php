<?php $__env->startSection('content'); ?>
<style>
    kbd, .key {
    color: rgba(50, 50, 50, 1);

    font: normal 0.6em/1 "Lucida Grande", Lucida, Verdana, sans-serif;
    text-align: center;
    line-height: 1em;
    text-shadow: 0 0.1em 0 rgb(255, 255, 255);
    display: inline;
    padding: .3em .55em;
    -webkit-border-radius: .25em;
    -moz-border-radius: .25em;
    border-radius: .25em;
    -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: 0.2em solid #bbb;

    /* Old browsers */
    background-color: rgb(247, 247, 247);
    /* FF3.6+ */
    background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0));
    /* Chrome,Safari4+ */
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(rgba(0, 0, 0, 0.1)), to(rgba(0, 0, 0, 0)));
    /* Chrome10+,Safari5.1+ */
    background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0));
    /* Opera 11.10+ */
    background-image: -o-linear-gradient(top, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0));
    /* IE10+ */
    background: -ms-linear-gradient(top, rgba(60,60,60, 1) 0%, rgba(80, 80, 80, 1) 100%);
    /* W3C */
    background-image: linear-gradient(top, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0));
    background-repeat: repeat-x;

    /* IE6-9 */
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#1a000000', endColorstr='#00000000', GradientType=0);

    box-shadow: 0px 2px 0 #bbbbbb, 0 3px 1px #999999, 0 3px 0 #bbbbbb, inset 0 1px 1px #ffffff, inset 0 -1px 3px #cccccc;

    min-width: 1em;

    cursor: default;
    -moz-user-select: none;
    -webkit-user-select: none;
    user-select: none;

    text-decoration: none;
}


kbd.keyboard, kbd.menu {
    border:1px solid #efefef;
    border-radius:0px;
    box-shadow: none;
    color:#666
}

kbd.menu kbd {
    border:none;
    border-radius:0px;
    box-shadow: none;
      font-size: 1.0em;
}

kbd:hover,
.key:hover {
    background: rgb(179, 179, 179);
    background-image: -webkit-linear-gradient(top, rgb(179, 179, 179), rgb(214, 214, 214));
    background-image: -moz-linear-gradient(top, rgb(179, 179, 179), rgb(214, 214, 214));
    background-image: -ms-linear-gradient(top, rgb(179, 179, 179), rgb(214, 214, 214));
    background-image: -o-linear-gradient(top, rgb(179, 179, 179), rgb(214, 214, 214));
    background-image: linear-gradient(to bottom, rgb(179, 179, 179), rgb(214, 214, 214));
    text-decoration: none;
}
kbd.keyboard:hover, kbd.menu:hover {
    /* Old browsers */
    background-color: rgb(247, 247, 247);
    /* FF3.6+ */
    background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0));
    /* Chrome,Safari4+ */
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(rgba(0, 0, 0, 0.1)), to(rgba(0, 0, 0, 0)));
    /* Chrome10+,Safari5.1+ */
    background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0));
    /* Opera 11.10+ */
    background-image: -o-linear-gradient(top, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0));
    /* IE10+ */
    background: -ms-linear-gradient(top, rgba(60,60,60, 1) 0%, rgba(80, 80, 80, 1) 100%);
    /* W3C */
    background-image: linear-gradient(top, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0));
}

kbd[title],
.key[title] {
    cursor: help;
}

    </style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div <?php if(app()->getlocale()=='ar'): ?>
                style="direction:rtl"
            <?php endif; ?> class="card">
                <div class="card-header text-center"><?php echo e(__('lang.login')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('lang.email')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('lang.password')); ?></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">
                                <div class="message text-danger"></div>
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                    <label class="form-check-label" for="remember">
                                        <?php echo e(__('lang.remember')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('lang.btnlogin')); ?>

                                </button>

                                <?php if(Route::has('password.request')): ?>
                                    <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                        <?php echo e(__('lang.forgetpassword')); ?>

                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>const password = document;
    const message = document.querySelector('.message');
   
    password.addEventListener('keyup', function (e) {
        if (e.getModifierState('CapsLock')) {
            message.innerHTML = '<kbd>Caps lock</kbd> is on';
        } else {
            message.textContent = '';
        }
    });</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\opticalClinic\resources\views/auth/login.blade.php ENDPATH**/ ?>