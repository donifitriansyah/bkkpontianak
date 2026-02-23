<?php $__env->startSection('title'); ?>
    Detail
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title-navbar'); ?>
    Detail Pelayanan
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <a href="<?php echo e(route('standar-pelayanan')); ?>" class="btn btn-secondary btn-sm mt-4 mb-4">
                ← Kembali
            </a>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="h3" class="text-center"><?php echo e($data->nama); ?></h1>

        </div>

        <div class="card shadow">
            <div class="card-body">
                <?php echo $data->text; ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.detail', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/frontend/layanan/standar-pelayanan-show.blade.php ENDPATH**/ ?>