<?php $__env->startSection('title'); ?>
    Sejarah dan Latar Belakang
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title-navbar'); ?>
    Sejarah dan Latar Belakang
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    
        <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-3">
                        <h5 class="fw-bold text-primary text-uppercase">Sejarah dan Latar Belakang</h5>
                        <h1 class="mb-0">Balai Kekarantinaan Kesehatan Kelas I Pontianak</h1>
                    </div>
                    <?php echo $sejarah->text; ?>

                </div>
                <div class="col-lg-5" style="min-height: 400px;">
                    <div class="position-relative h-100 shadow">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="<?php echo e(asset('storage/' . $sejarah->path)); ?>" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.detail', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/frontend/profil/sejarah.blade.php ENDPATH**/ ?>