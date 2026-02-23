<?php $__env->startSection('title'); ?>
    SK & SOP
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title-navbar'); ?>
    SK & SOP
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class=" text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Surat Keputusan & Standar Operasional Prosedur Satuan
                    Kepatuhan Internal</h5>
                <h1 class="mb-0">Balai Kekarantinaan Kesehatan Kelas I Pontianak</h1>
            </div>

            <div class="mb-4">
                <!-- Visi Card -->
                <div class="card shadow">
                    <div class="card-body text-center">
                        <img class="m-auto mb-3" style="width: 10%;" src="<?php echo e(asset('frontend/img/email.png')); ?>"
                            alt="Logo Kemenkes">
                        <h3 class="section-title text-center position-relative pb-3 mb-4 mx-auto">Surat Keputusan</h3>
                        <div class="card">
                            <table class="table-bordered text-center">
                                <thead class="bg-primary" style="color:white;">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Lihat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $dataSK; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td><?php echo e($item->nama); ?></td>
                                            <td>
                                                <a href="<?php echo e(route('sk-dan-sop.show', $item->id)); ?>"
                                                    class="btn btn-success btn-sm">✔</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td colspan="3">Data SK belum tersedia</td>
                                        </tr>
                                    <?php endif; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5 card shadow">
                <div class="card-body text-center">
                    <img class="m-auto mb-3" style="width: 10%;" src="<?php echo e(asset('frontend/img/sop.png')); ?>"
                        alt="Logo Kemenkes">
                    <h3 class="section-title text-center position-relative pb-3 mb-4 mx-auto">Standar Operasional Prosedur
                    </h3>
                    <div class="card">
                        <table class="table-bordered text-center">
                            <thead class="bg-primary" style="color:white;">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Lihat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $dataSOP; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($item->nama); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('sk-dan-sop.show', $item->id)); ?>"
                                                class="btn btn-success btn-sm">✔</a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="3">Data SOP belum tersedia</td>
                                    </tr>
                                <?php endif; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.detail', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/frontend/ski/sk-dan-sop.blade.php ENDPATH**/ ?>