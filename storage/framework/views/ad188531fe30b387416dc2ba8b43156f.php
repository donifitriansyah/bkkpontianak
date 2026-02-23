<?php $__env->startSection('title', 'Sejarah & Latar Belakang'); ?>

<?php $__env->startSection('content'); ?>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-bs4.min.css" rel="stylesheet">

    <div class="container-fluid">

        <h1 class="h3 mb-3 text-gray-800">Sejarah & Latar Belakang</h1>

        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <div class="card shadow">
            <div class="card-header d-flex justify-content-between">
                <h6 class="font-weight-bold text-primary">Data</h6>

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
                            <th width="60%">Teks</th>
                            <th>Gambar</th>
                            <th width="15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo Str::limit(strip_tags($item->text), 200); ?></td>
                                <td class="text-center">
                                    <?php if($item->path): ?>
                                        <img src="<?php echo e(asset('storage/' . $item->path)); ?>" width="120">
                                    <?php else: ?>
                                        -
                                    <?php endif; ?>
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#editModal<?php echo e($item->id); ?>">
                                        Edit
                                    </button>
                                </td>
                            </tr>

                            
                            <div class="modal fade" id="editModal<?php echo e($item->id); ?>">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <form method="POST"
                                            action="<?php echo e(route('sejarah-dan-latar-belakang.update', $item->id)); ?>"
                                            enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('PUT'); ?>

                                            <div class="modal-header">
                                                <h5>Edit Data</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>

                                            <div class="modal-body">
                                                <label class="form-label">Teks</label>
                                                <textarea name="text" class="form-control summernote" required>
                                                <?php echo $item->text; ?>

                                            </textarea>

                                                <label class="form-label mt-3">Gambar</label>
                                                <input type="file" name="path" class="form-control">

                                                <?php if($item->path): ?>
                                                    <small class="d-block mt-2">
                                                        <img src="<?php echo e(asset('storage/' . $item->path)); ?>" width="120">
                                                    </small>
                                                <?php endif; ?>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Batal
                                                </button>
                                                <button class="btn btn-primary">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="3" class="text-center text-muted">
                                    Belum ada data
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
    <div class="modal fade" id="createModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form method="POST" action="<?php echo e(route('sejarah-dan-latar-belakang.store')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="modal-header">
                        <h5>Tambah Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <label class="form-label">Teks</label>
                        <textarea name="text" class="form-control summernote" required></textarea>

                        <label class="form-label mt-3">Gambar</label>
                        <input type="file" name="path" class="form-control" required>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button class="btn btn-primary">Simpan</button>
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
                ]
            });
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/backend/profil/sejarah-dan-latar-belakang/index.blade.php ENDPATH**/ ?>