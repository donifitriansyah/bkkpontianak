<?php $__env->startSection('title'); ?>
    Standar Pelayanan
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title-navbar'); ?>
    Standar Pelayanan
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class=" text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h1 class="fw-bold text-primary text-uppercase">Standar Pelayanan</h1>
                <h5 class="mb-0">Balai Kekarantinaan Kesehatan Kelas I Pontianak</h5>
            </div>
            <div class="mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
                            <div class="container">
                                <div class="service-item rounded align-items-center justify-content-center text-center p-3">
                                    <table class="table table-bordered">
                                        <thead class="bg-primary">
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">Nama Standar Pelayanan</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <tr>
                                                    <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                                    <td><?php echo e($item->nama); ?></td>
                                                    <td class="text-center">
                                                        <a href="<?php echo e(route('standar-pelayanan.show', $item->id)); ?>"
                                                            class="btn btn-primary btn-sm">
                                                            Lihat
                                                        </a>
                                                    </td>

                                                </tr>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <tr>
                                                    <td colspan="4" class="text-center text-muted">
                                                        Belum ada data
                                                    </td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.detail', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/frontend/layanan/standar-pelayanan.blade.php ENDPATH**/ ?>