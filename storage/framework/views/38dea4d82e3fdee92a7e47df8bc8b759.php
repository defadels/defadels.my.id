<?php $__env->startSection('content'); ?>

<div class="col-xl-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card p-3 mb-0">
                <div class="card-body">

                    <div class="mb-0 border-0 p-md-5 p-lg-0 p-4">
                        <div class="mb-4 p-0 text-center">
                            <a href="<?php echo e(route('second', [ 'dashboard' , 'index'])); ?>" class="auth-logo">
                                <img src="/images/logo-dark.png" alt="logo-dark" class="mx-auto" height="28" />
                            </a>
                        </div>

                        <div class="auth-title-section mb-3 text-center"> 
                            <h3 class="text-dark fs-20 fw-medium mb-2">Welcome back</h3>
                            <p class="text-dark text-capitalize fs-14 mb-0">Sign in to continue to silve.</p>
                        </div>

                        <div class="pt-0">
                            <form action="#" class="my-4">
                                <div class="form-group mb-3">
                                    <label for="emailaddress" class="form-label">Email address</label>
                                    <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                </div>
                                
                                <div class="form-group mb-0 row">
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button class="btn btn-primary" type="submit"> Recover Password </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="text-center text-muted">
                                <p class="mb-0">Change the mind  ?<a class='text-primary ms-2 fw-medium' href='auth-login.html'>Back to Login</a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            
        </div>
    </div>
</div>

<div class="col-xl-7">
    <div class="account-page-bg p-md-5 p-4">
        <div class="text-center">
            <div class="auth-image">
                <img src="/images/auth-images.svg" class="mx-auto img-fluid"  alt="images">
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', ['title' => 'Recover Password'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\User\Herd\defadels.my.id\resources\views\auth\recoverpw.blade.php ENDPATH**/ ?>