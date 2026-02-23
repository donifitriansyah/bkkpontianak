<?php $__env->startSection('title', $dashboard->nama); ?>
<?php $__env->startSection('title-navbar', $dashboard->nama); ?>

<?php $__env->startSection('content'); ?>
    <div class="container py-5">

        <a href="<?php echo e(route('bedesut.show', $dashboard->id)); ?>" class="btn btn-secondary mb-4">
            ← Kembali
        </a>
        
        <h1><?php echo e($dashboard->nama); ?></h1>

        <?php if($dashboard->bedesut): ?>
            <p class="text-muted">
                <?php echo e($dashboard->bedesut->nama); ?>

            </p>
        <?php endif; ?>


        
        

        
        <div class="content">
            <?php echo $dashboard->text; ?>

        </div>

        
        <?php if($dashboard->link_looker): ?>
            <div class="text-center mt-4">
                <a href="<?php echo e($dashboard->link_looker); ?>" target="_blank" class="btn btn-success">
                    Buka Dashboard Interaktif
                </a>
            </div>
        <?php endif; ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.detail', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/frontend/informasi-publik/bedesut-dashboard-show.blade.php ENDPATH**/ ?>