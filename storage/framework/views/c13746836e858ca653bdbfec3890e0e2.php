<?php $__env->startSection('title', 'Visi & Misi'); ?>

<?php $__env->startSection('content'); ?>

    <link href="<?php echo e(asset('backend/assets/extensions/summernote/summernote-lite.min.css')); ?>" rel="stylesheet">

    <div class="container-fluid">

        <h1 class="h3 mb-3 text-gray-800">Visi, Misi & Tujuan</h1>

        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <div class="card shadow">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h6 class="font-weight-bold text-primary">Data Visi & Misi</h6>

                <?php if($data->count() < 1): ?>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#createModal">
                        Tambah Data
                    </button>
                <?php endif; ?>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th width="30%">Visi</th>
                            <th width="30%">Misi</th>
                            <th width="30%">Tujuan</th>
                            <th width="10%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo Str::limit(strip_tags($item->visi), 100); ?></td>
                                <td><?php echo Str::limit(strip_tags($item->misi), 100); ?></td>
                                <td><?php echo Str::limit(strip_tags($item->tujuan), 100); ?></td>
                                <td class="text-center">
                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#editModal<?php echo e($item->id); ?>">
                                        Edit
                                    </button>
                                </td>
                            </tr>

                            
                            <div class="modal fade" id="editModal<?php echo e($item->id); ?>" tabindex="-1">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <form method="POST" action="<?php echo e(route('visi-misi.update', $item->id)); ?>">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('PUT'); ?>

                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Visi & Misi</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label class="form-label">Visi</label>
                                                    <textarea class="summernote" name="visi"><?php echo $item->visi; ?></textarea>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Misi</label>
                                                    <textarea class="summernote" name="misi"><?php echo $item->misi; ?></textarea>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Tujuan</label>
                                                    <textarea class="summernote" name="tujuan"><?php echo $item->tujuan; ?></textarea>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Batal
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    Update
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

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

    
    <div class="modal fade" id="createModal" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <form method="POST" action="<?php echo e(route('visi-misi.store')); ?>">
                    <?php echo csrf_field(); ?>

                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Visi & Misi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Visi</label>
                            <textarea class="form-control summernote" name="visi"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Misi</label>
                            <textarea class="form-control summernote" name="misi"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tujuan</label>
                            <textarea class="form-control summernote" name="tujuan"></textarea>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Batal
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="<?php echo e(asset('backend/assets/extensions/summernote/summernote-lite.min.js')); ?>"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $('.summernote').summernote({
                height: 250,
                toolbar: [
                    ['style', ['bold', 'italic', 'underline']],
                    ['para', ['ul', 'ol', 'paragraph']],
                ]
            });
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/backend/profil/visi-misi/index.blade.php ENDPATH**/ ?>