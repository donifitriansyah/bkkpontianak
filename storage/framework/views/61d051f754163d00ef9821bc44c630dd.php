<?php $__env->startSection('title'); ?>
    PPID
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title-navbar'); ?>
    PPID BALAI KEKARANTINAAN KESEHATAN KELAS I PONTIANAK
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto">
                <h1 class="mb-0">SELAMAT DATANG DI LAYANAN E-PPID BALAI KEKARANTINAAN KESEHATAN KELAS I PONTIANAK</h1>
                <p>Layanan ini merupakan sarana layanan online bagi pemohon informasi publik sebagai salah satu wujud
                    pelaksanaan keterbukaan informasi publik pada Balai Kekarantinaan Kesehatan Kelas I Pontianak </p>
            </div>
            <?php echo $__env->make('includes.frontend.ppid', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <hr>
            
            <div class="text-center shadow">
                <a href="<?php echo e($form?->form_permohonan_informasi ?? '#'); ?>" target="_blank"
                    class="btn btn-kemenkes btn-lg text-white w-100">

                    Formulir Permohonan Informasi
                </a>
            </div>

            
            <div class="text-center mt-3 shadow">
                <a href="<?php echo e($form?->form_keberatan ?? '#'); ?>" target="_blank"
                    class="btn btn-kemenkes btn-lg text-white w-100">

                    Formulir Keberatan
                </a>
            </div>

            
            <div class="text-center mt-3 shadow">
                <a href="<?php echo e($form && $form->file_daftar_informasi_publik ? asset('storage/' . $form->file_daftar_informasi_publik) : '#'); ?>"
                    target="_blank" class="btn btn-kemenkes btn-lg text-white w-100">

                    Daftar Informasi Publik (E-DIP)
                </a>
            </div>
            <hr>
            <h2 class="text-center mt-3">Frequently Asked Question</h2>

            <div class="accordion shadow mt-3" id="kemenkesAccordion">

                <?php $__currentLoopData = $faq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading<?php echo e($item->id); ?>">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse<?php echo e($item->id); ?>" aria-expanded="false"
                                aria-controls="collapse<?php echo e($item->id); ?>">
                                <?php echo e($item->judul); ?>

                            </button>
                        </h2>

                        <div id="collapse<?php echo e($item->id); ?>" class="accordion-collapse collapse"
                            aria-labelledby="heading<?php echo e($item->id); ?>" data-bs-parent="#kemenkesAccordion">

                            <div class="accordion-body">
                                <?php echo $item->deskripsi; ?>

                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.detail', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/frontend/informasi-publik/ppid.blade.php ENDPATH**/ ?>