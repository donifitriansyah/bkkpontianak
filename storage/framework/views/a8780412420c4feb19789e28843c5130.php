<?php $__env->startSection('title'); ?>
    Tugas Pokok dan Fungsi
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title-navbar'); ?>
    Tugas Pokok dan Fungsi
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class=" text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Tugas Pokok dan Fungsi</h5>
                <h1 class="mb-0">Balai Kekarantinaan Kesehatan Kelas I Pontianak</h1>
            </div>
            <div class="mb-4">
                <!-- Visi Card -->
                <div class="card shadow">
                    <div class="card-body">
                        <img class="d-block mx-auto mb-3" style="width: 40%;"
                            src="<?php echo e(asset('frontend/img/logokemenkes.png')); ?>" alt="Logo Kemenkes">
                        <?php echo $tugas->text; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.detail', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/frontend/profil/tugas-pokok-dan-fungsi.blade.php ENDPATH**/ ?>