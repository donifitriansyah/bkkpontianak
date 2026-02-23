<?php $__env->startSection('title'); ?>
    <?php echo e($berita->judul); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('title-navbar'); ?>
    <?php echo e($berita->judul); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class=" text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h6 class="fw-bold text-primary text-uppercase">
                    <?php echo e($berita->tanggal ? \Carbon\Carbon::parse($berita->published_at)->translatedFormat('d F Y') : '-'); ?>

                </h6>
                
            </div>
            <div class="mb-4">
                <div class="card shadow">
                    <div class="card-body" style="overflow:hidden;">

                        

                        <div style="max-width:100%; overflow:hidden;">
                            <style>
                                img {
                                    max-width: 100%;
                                    height: auto;
                                    display: block;
                                }
                            </style>

                            <?php echo $berita->konten; ?>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.detail', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/frontend/berita/detail.blade.php ENDPATH**/ ?>