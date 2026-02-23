<?php $__env->startSection('title', 'Struktur Organisasi PPID'); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <h1 class="h3 mb-3">Struktur Organisasi PPID</h1>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <div class="card shadow">
        <div class="card-header d-flex justify-content-between">
            <h6 class="fw-bold">Data Struktur Organisasi</h6>
            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#createModal">
                Tambah Data
            </button>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <thead class="text-center">
                    <tr>
                        <th width="5%">No</th>
                        <th>Judul</th>
                        <th>Gambar</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td class="text-center"><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($item->judul); ?></td>
                            <td class="text-center">
                                <?php if($item->path): ?>
                                    <img src="<?php echo e(asset('storage/' . $item->path)); ?>"
                                         class="img-fluid"
                                         style="max-height:120px;">
                                <?php else: ?>
                                    -
                                <?php endif; ?>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-warning btn-sm"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editModal<?php echo e($item->id); ?>">
                                    Edit
                                </button>
                            </td>
                        </tr>

                        
                        <div class="modal fade"
                             id="editModal<?php echo e($item->id); ?>"
                             tabindex="-1">

                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="<?php echo e(route('admin-ppid-struktur-organisasi.update', $item->id)); ?>"
                                          method="POST"
                                          enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>

                                        <div class="modal-header">
                                            <h5>Edit Struktur Organisasi</h5>
                                            <button type="button"
                                                    class="btn-close"
                                                    data-bs-dismiss="modal"></button>
                                        </div>

                                        <div class="modal-body">

                                            <label>Judul</label>
                                            <input type="text"
                                                   name="judul"
                                                   class="form-control mb-3"
                                                   value="<?php echo e($item->judul); ?>"
                                                   required>

                                            <label>Gambar</label>
                                            <input type="file"
                                                   name="path"
                                                   class="form-control mb-3">

                                            <?php if($item->path): ?>
                                                <img src="<?php echo e(asset('storage/' . $item->path)); ?>"
                                                     class="img-fluid"
                                                     style="max-height:150px;">
                                            <?php endif; ?>
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
                            <td colspan="4" class="text-center">Belum ada data</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="modal fade" id="createModal">
    <div class="modal-dialog">
        <form method="POST"
              action="<?php echo e(route('admin-ppid-struktur-organisasi.store')); ?>"
              enctype="multipart/form-data"
              class="modal-content">
            <?php echo csrf_field(); ?>

            <div class="modal-header">
                <h5>Tambah Struktur Organisasi</h5>
            </div>

            <div class="modal-body">

                <label>Judul</label>
                <input type="text"
                       name="judul"
                       class="form-control mb-3"
                       required>

                <label>Gambar</label>
                <input type="file"
                       name="path"
                       class="form-control"
                       required>

            </div>

            <div class="modal-footer">
                <button class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Koding\bkkpontianak\resources\views/pages/backend/informasi-publik/ppid/struktur-organisasi/index.blade.php ENDPATH**/ ?>