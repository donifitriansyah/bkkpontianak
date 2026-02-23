<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - Mazer Admin Dashboard</title>

    <?php echo $__env->make('includes.backend.style', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?php echo e(asset('backend/assets/static/js/initTheme.js')); ?>"></script>
    <div id="app">
        <?php echo $__env->make('includes.backend.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <?php echo $__env->yieldContent('content'); ?>

            <?php echo $__env->make('includes.backend.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
    </div>
    <?php echo $__env->make('includes.backend.script', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <script>
        <?php if(session('success')): ?>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: "<?php echo e(session('success')); ?>",
                timer: 2500,
                showConfirmButton: false
            });
        <?php endif; ?>

        <?php if(session('error')): ?>
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: "<?php echo e(session('error')); ?>",
            });
        <?php endif; ?>

        <?php if($errors->any()): ?>
            Swal.fire({
                icon: 'error',
                title: 'Terjadi Kesalahan',
                html: `<?php echo implode('<br>', $errors->all()); ?>`,
            });
        <?php endif; ?>
    </script>

</body>

</html>
<?php /**PATH D:\Koding\bkkpontianak\resources\views/layouts/back.blade.php ENDPATH**/ ?>