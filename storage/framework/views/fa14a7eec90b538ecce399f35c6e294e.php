<?php $__env->startSection('title'); ?>
    Wilayah Kerja
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title-navbar'); ?>
    Wilayah Kerja
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class=" text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Wilayah Kerja</h5>
                <h1 class="mb-0">Balai Kekarantinaan Kesehatan Kelas I Pontianak</h1>
            </div>
            <div class="mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <img class="d-block mx-auto mb-3" style="width: 40%;"
                            src="<?php echo e(asset('frontend/img/logokemenkes.png')); ?>" alt="Logo Kemenkes">
                        <div class="section-title text-center position-relative pb-3 mb-4 mx-auto"
                            style="max-width: 600px;">
                            <h3>Wilayah Kerja</h3>
                        </div>
                        <?php if($wilkerText): ?>
                            <p class="card-text">
                                <?php echo $wilkerText->text; ?>

                            </p>
                        <?php endif; ?>
                        <div class="">
                            <table id="example" class="display table table-bordered">
                                <thead class="bg-primary">
                                    <tr>
                                        <th>No</th>
                                        <th>Tempat Kedudukan</th>
                                        <th>Alamat</th>
                                        <th>Nama Kepala</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $wilkers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($index + 1); ?></td>
                                            <td><?php echo e($item->tempat); ?></td>
                                            <td><?php echo e($item->alamat); ?></td>
                                            <td><?php echo e($item->nama_kepala); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>



                    </div>
                </div>
            </div>
            <div class="mb-4">
                <div class="card shadow">
                    <div class="card-body text-center">
                        <iframe id="googleMap"
                            src="https://www.google.com/maps/d/embed?mid=118NmmtW-hcRa1YNvFqeVD7zeqXvPmQKx&ehbc=2E312F"
                            width="100%" height="480"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.detail', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/frontend/profil/wilayah-kerja.blade.php ENDPATH**/ ?>