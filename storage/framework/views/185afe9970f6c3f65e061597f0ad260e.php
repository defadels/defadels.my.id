<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('layouts.partials/title-meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.partials/head-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body class="bg-primary-subtle">

    <!-- Begin page -->
    <div class="account-page">
        <div class="container-fluid p-0">

            <div class="row align-items-center g-0">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </div>
    </div>

    <?php echo $__env->make('layouts.partials/vendor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html><?php /**PATH C:\Users\User\Herd\defadels.my.id\resources\views\layouts\auth.blade.php ENDPATH**/ ?>