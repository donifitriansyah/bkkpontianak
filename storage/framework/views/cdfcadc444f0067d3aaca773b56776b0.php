<?php $__env->startSection('title', 'Profil Singkat PPID'); ?>

<?php $__env->startSection('content'); ?>

    <link href="<?php echo e(asset('backend/assets/extensions/summernote/summernote-lite.min.css')); ?>" rel="stylesheet">

    <div class="container-fluid">
        <h1 class="h3 mb-3">Profil Singkat PPID</h1>

        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <div class="card shadow">
            <div class="card-header d-flex justify-content-between">
                <h6 class="fw-bold">Data Profil Singkat</h6>
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#createModal">
                    Tambah Data
                </button>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="text-center">
                        <tr>
                            <th width="5%">No</th>
                            <th>Isi Profil</th>
                            <th width="15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                <td><?php echo Str::limit(strip_tags($item->text), 150); ?></td>
                                <td class="text-center">
                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#editModal<?php echo e($item->id); ?>">
                                        Edit
                                    </button>
                                </td>
                            </tr>

                            


                            <div class="modal fade" id="editModal<?php echo e($item->id); ?>" tabindex="-1"
                                aria-labelledby="editModalLabel<?php echo e($item->id); ?>" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <form action="<?php echo e(route('admin-ppid-profil.update', $item->id)); ?>" method="POST"
                                            enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>

                                        <div class="modal-header">
                                            <h5>Edit Profil Singkat</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <div class="modal-body">
                                            <textarea name="text" class="form-control summernote" required><?php echo $item->text; ?></textarea>
                                        </div>

                                            <div class="modal-footer">
                                                <button class="btn btn-primary">Update</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="3" class="text-center">Belum ada data</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
    <div class="modal fade" id="createModal">
        <div class="modal-dialog modal-lg">
            <form method="POST" action="<?php echo e(route('admin-ppid-profil.store')); ?>" class="modal-content">
                <?php echo csrf_field(); ?>

                <div class="modal-header">
                    <h5>Tambah Profil Singkat</h5>
                </div>

                <div class="modal-body">
                    <textarea name="text" class="form-control summernote" required></textarea>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <script src="<?php echo e(asset('backend/assets/extensions/summernote/summernote-lite.min.js')); ?>"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $('.summernote').summernote({
                height: 300
            });
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/backend/informasi-publik/ppid/profil-singkat/index.blade.php ENDPATH**/ ?>