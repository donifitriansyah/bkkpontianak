<?php $__env->startSection('title', $infografis->nama); ?>
<?php $__env->startSection('title-navbar', $infografis->nama); ?>

<?php $__env->startSection('content'); ?>
<div class="container py-5">

    <a href="<?php echo e(route('bedesut.show', $infografis->id)); ?>" class="btn btn-secondary mb-4">
        ← Kembali
    </a>

    <h1 class="mb-3"><?php echo e($infografis->nama); ?></h1>

    <?php if($infografis->thumbnail): ?>
        <img src="<?php echo e(asset('storage/'.$infografis->thumbnail)); ?>"
             class="img-fluid mb-4">
    <?php endif; ?>

    <div class="content">
        <?php echo $infografis->text; ?>

    </div>


</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.detail', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/frontend/informasi-publik/bedesut-infografis-show.blade.php ENDPATH**/ ?>