<?php $__env->startSection('title'); ?>
    Visi dan Misi
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title-navbar'); ?>
    Visi dan Misi
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Visi dan Misi</h5>
                <h1 class="mb-0">Balai Kekarantinaan Kesehatan Kelas I Pontianak</h1>
            </div>
            <div class="mb-4">
                <!-- Visi Card -->
                <div class="card shadow">
                    <div class="card-body text-center">
                        <img class="m-auto" style="width: 40%;" src="<?php echo e(asset('frontend/img/logokemenkes.png')); ?>"
                            alt="Logo Kemenkes">
                        <h5 class="card-title">Visi Kementerian Kesehatan</h5>
                        <?php echo $visi->visi; ?>

                    </div>
                </div>

            </div>

            <div class="row">
                <!-- Misi Card -->
                <div class="col-lg-6 mb-4">
                    <div class="card shadow">
                        <div style="height: 350px" class="card-body">
                            <img class="d-block mx-auto mb-3" style="width: 20%;" src="<?php echo e(asset('frontend/img/goal.png')); ?>">
                            <h5 class="card-title text-center">Misi Kementerian Kesehatan</h5>
                             <?php echo $visi->misi; ?>

                        </div>
                    </div>
                </div>

                <!-- Tujuan Strategis Card -->
                <div class="col-lg-6 mb-4">
                    <div class="card shadow">
                        <div style="height: 350px" class="card-body">
                            <img class="d-block mx-auto mb-3" style="width: 20%;" src="<?php echo e(asset('frontend/img/leadership.png')); ?>">
                            <h5 class="card-title text-center">Tujuan Strategis Kementerian Kesehatan</h5>
                             <?php echo $visi->tujuan; ?>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.detail', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/frontend/profil/visi-dan-misi.blade.php ENDPATH**/ ?>