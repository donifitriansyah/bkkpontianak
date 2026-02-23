<?php $__env->startSection('title'); ?>
    Survey Kepuasan Masyarakat
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title-navbar'); ?>
    Survey Kepuasan Masyarakat
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            
            <div class="row">
                <!-- SKM -->
                <div class="col-lg-6 mb-4">
                    <h2>Survey Kepuasan Masyarakat</h2>
                    <div class="accordion shadow mt-3" id="accordionSKM">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-skm1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-skm1" aria-expanded="false" aria-controls="collapse-skm1">
                                    <i class="fa fa-scale me-2"></i> 2025
                                </button>
                            </h2>
                            <div id="collapse-skm1" class="accordion-collapse collapse" aria-labelledby="heading-skm1"
                                data-bs-parent="#accordionSKM">

                                <div class="accordion-body">
                                    <ol>
                                        <li><a href="#">Triwulan I</a></li>
                                        <li><a href="#">Triwulan II</a></li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- SPAK -->
                <div class="col-lg-6 mb-4">
                    <h2>Survey Persepsi Anti Korupsi</h2>
                    <div class="accordion shadow mt-3" id="accordionSPAK">

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-spak1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-spak1" aria-expanded="false" aria-controls="collapse-spak1">
                                    <i class="fa fa-scale me-2"></i> Data Pelayanan Vaksinasi
                                </button>
                            </h2>
                            <div id="collapse-spak1" class="accordion-collapse collapse" aria-labelledby="heading-spak1"
                                data-bs-parent="#accordionSPAK">
                                <div class="accordion-body">
                                    <ol>
                                        <li><a href="#">Triwulan I</a></li>
                                        <li><a href="#">Triwulan II</a></li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.detail', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/frontend/informasi-publik/survey-kepuasan-masyarakat.blade.php ENDPATH**/ ?>