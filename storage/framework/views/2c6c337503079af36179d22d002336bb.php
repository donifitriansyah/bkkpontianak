<?php $__env->startSection('title'); ?>
    BEDESUT
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title-navbar'); ?>
    BEDESUT
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h1 class="mb-0">BEDESUT</h1>
                <h5 class="fw-bold text-primary text-uppercase">Berita dan Diseminasi Surveilans di Pintu Masuk</h5>
            </div>
            <div class="row">


                <?php $__empty_1 = true; $__currentLoopData = $bedesut; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-lg-3 mb-4">
                        <a href="<?php echo e(route('bedesut.show', $item->id)); ?>" class="text-decoration-none">
                            <div class="service-card haji-card shadow h-100">
                                <div class="haji-card-img">
                                    <img src="<?php echo e($item->thumbnail ? asset('storage/' . $item->thumbnail) : asset('frontend/img/tes1.png')); ?>"
                                        class="img-fluid">
                                </div>

                                <div class="haji-card-body">
                                    <h6 class="text-center text-dark">
                                        <?php echo e($item->nama); ?>

                                    </h6>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="col-12 text-center text-muted">
                        Data BEDESUT belum tersedia
                    </div>
                <?php endif; ?>



            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.detail', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/frontend/informasi-publik/bedesut.blade.php ENDPATH**/ ?>