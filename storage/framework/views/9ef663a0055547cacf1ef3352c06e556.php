<?php $__env->startSection('title', 'Laporan SKI'); ?>

<?php $__env->startSection('title-navbar'); ?>
    Laporan Satuan Kepatuhan Internal
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">

            <div class="text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">
                    Laporan Satuan Kepatuhan Internal
                </h5>
                <h1 class="mb-0">
                    Balai Kekarantinaan Kesehatan Kelas I Pontianak
                </h1>
            </div>

            <div class="card">
                <table class="table-bordered text-center">
                    <thead class="bg-primary" style="color:white;">
                        <tr>
                            <th>Tahun</th>
                            <th>Semester</th>
                            <th>Lihat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($item->tahun); ?></td>
                                <td><?php echo e($item->semester); ?></td>
                                <td>
                                    <?php if($item->file_pdf): ?>
                                        <a href="<?php echo e(route('laporan-ski.show', $item->id)); ?>" class="btn btn-success btn-sm">
                                            ✔
                                        </a>
                                    <?php else: ?>
                                        <span class="text-muted">-</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="2">Data belum tersedia</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.detail', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/frontend/SKI/laporan-ski.blade.php ENDPATH**/ ?>