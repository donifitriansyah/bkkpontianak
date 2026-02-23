<?php $__env->startSection('title'); ?>
    Artikel
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title-navbar'); ?>
    Artikel
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            
            <div class="row">
                <!-- Misi Card Gambar Dikiri-->
                

                <div class="col-lg-3 mb-4">
                    <div class="service-card haji-card shadow">
                        <div class="haji-card-img">
                            <img src="<?php echo e(asset('frontend/img/tes1.png')); ?>" alt="Haji">
                        </div>
                        <div class="haji-card-body">
                            <h6 class="text-center">
                                PENGAWASAN LALU LINTAS ALAT ANGKUT
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="service-card haji-card shadow">
                        <div class="haji-card-img">
                            <img src="<?php echo e(asset('frontend/img/goal.png')); ?>" alt="Haji">
                        </div>
                        <div class="haji-card-body">
                            <h6 class="text-center">
                                SISTEM KEWASPADAAN DINI DAN RESPON INDICATOR BASED SURVEILLANCE (IBS) & EVENT BASED SURVEILLANCE (EBS)
                            </h6>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.detail', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/frontend/informasi-publik/artikel.blade.php ENDPATH**/ ?>