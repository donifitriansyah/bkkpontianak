<?php $__env->startSection('title', $data->nama); ?>

<?php $__env->startSection('title-navbar'); ?>
    SK & SOP
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DEARFLIP CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('dearflip/assets/css/dflip.min.css')); ?>">

    <!-- DEARFLIP JS -->
    <script src="<?php echo e(asset('dearflip/assets/js/dflip.min.js')); ?>"></script>
    <div class="container-fluid">
        <a href="<?php echo e(url()->previous()); ?>" class="btn btn-secondary mb-3 mt-3">
            ← Kembali
        </a>
        <div class="d-flex align-items-center mb-3">

            <h1 class="h3 mb-0"><?php echo e($data->nama); ?></h1>


        </div>

        <div class="card-body">
                <div class="_df_book" height="600" webgl="true" source="<?php echo e(asset('storage/' . $data->file_pdf)); ?>">
                </div>
            </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.detail', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/frontend/SKI/sk-dan-sop-show.blade.php ENDPATH**/ ?>