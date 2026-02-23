<?php $__env->startSection('title'); ?>
    Tentang WBK & WBBM
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title-navbar'); ?>
    Tentang WBK & WBBM
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Wilayah Bebas dari Korupsi, Wilayah Birokrasi Bersih dan
                    Melayani</h5>
                <h1 class="mb-0">TANYA JAWAB TENTANG PEMBANGUNAN ZONA INTEGRITAS MENUJU WBK/WBBM</h1>
            </div>
            <div class="accordion mt-3" id="accordionGabungan">

                <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading<?php echo e($loop->iteration); ?>">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse<?php echo e($loop->iteration); ?>" aria-expanded="false"
                                aria-controls="collapse<?php echo e($loop->iteration); ?>">
                                <?php echo e($item->nama); ?>

                            </button>
                        </h2>

                        <div id="collapse<?php echo e($loop->iteration); ?>" class="accordion-collapse collapse"
                            aria-labelledby="heading<?php echo e($loop->iteration); ?>" data-bs-parent="#accordionGabungan">

                            <div class="accordion-body">
                                <?php echo e($item->deskripsi); ?>

                            </div>

                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="text-center text-muted">
                        Data belum tersedia
                    </div>
                <?php endif; ?>

            </div>




        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.detail', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/frontend/pengaduan/tentang-wbk-wbbm.blade.php ENDPATH**/ ?>