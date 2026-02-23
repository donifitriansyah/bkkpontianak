<?php $__env->startSection('title'); ?>
    Maklumat Pelayanan
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title-navbar'); ?>
    Maklumat Pelayanan
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <img src="<?php echo e(asset('storage/' . $gambar->path)); ?>" alt="Maklumat Pelayanan"
                            style="max-width: 100%; border-radius: 5px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.detail', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/frontend/layanan/maklumat-pelayanan.blade.php ENDPATH**/ ?>