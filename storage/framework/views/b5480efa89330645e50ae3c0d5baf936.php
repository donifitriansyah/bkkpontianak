<?php $__env->startSection('title', $bedesut->nama); ?>
<?php $__env->startSection('title-navbar', $bedesut->nama); ?>

<?php $__env->startSection('content'); ?>
    <div class="container py-5">

        <div class="text-center mb-4">
            <h1><?php echo e($bedesut->nama); ?></h1>
            <div class="mt-3">
                <?php echo $bedesut->text; ?>

            </div>
        </div>

        <a href="<?php echo e(route('bedesut')); ?>" class="btn btn-secondary">
            ← Kembali
        </a>

        
        <?php if($bedesut->infografis->count()): ?>
            <h3 class="mt-5">Infografis</h3>
            <div class="row">
                <?php $__currentLoopData = $bedesut->infografis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4 mb-3">
                        <a href="<?php echo e(route('infografis.show', $info->id)); ?>" class="text-decoration-none text-dark">
                            <div class="card shadow h-100">
                                <img src="<?php echo e(asset('storage/' . $info->thumbnail)); ?>" class="card-img-top">

                                <div class="card-body text-center">
                                    <h6><?php echo e($info->nama); ?></h6>
                                </div>
                            </div>

                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>


        
        <?php if($bedesut->dashboard->count()): ?>
            <?php $__currentLoopData = $bedesut->dashboard; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dash): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 mb-3 mt-5">
                    <a href="<?php echo e(route('dashboard-interaktif.show', $dash->id)); ?>" class="text-decoration-none text-dark">

                        <div class="card shadow h-100">
                            <img src="<?php echo e(asset('storage/' . $dash->thumbnail)); ?>" class="card-img-top">

                            <div class="card-body text-center">
                                <h6><?php echo e($dash->nama); ?></h6>
                            </div>
                        </div>

                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>


        
        <?php if($bedesut->sunmore->count()): ?>
            <ul>
                <table class="table table-bordered bg-primary text-center mt-5">
                    <thead class="bg-primary" style="color:white;">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>PDF</th>
                        </tr>
                    </thead>
                    <tbody >
                        <?php $__empty_1 = true; $__currentLoopData = $bedesut->sunmore; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($item->nama); ?></td>
                                <td>
                                    <a href="<?php echo e(route('sunmore.flipbook', $item->id)); ?>" class="btn btn-sm btn-success">
                                        Lihat
                                    </a>
                                </td>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="5">Belum ada data</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
    </div>
    </ul>
    <?php endif; ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.detail', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/frontend/informasi-publik/bedesut-detail.blade.php ENDPATH**/ ?>