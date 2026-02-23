<?php $__env->startSection('title'); ?>
    Gambar Maklumat Pelayanan
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">

        <h1 class="h3 mb-2 text-gray-800">Gambar Maklumat Pelayanan</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">

                <h6 class="m-0 font-weight-bold text-primary">Tabel Gambar Maklumat Pelayanan</h6>

                <?php if($gambar->count() < 1): ?>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                        Tambah Gambar
                    </button>
                <?php endif; ?>

            </div>


            <div class="card-body">
                <?php if(session('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>
                <div class="table-responsive datatable-minimal">
                    <table class="table table-bordered" id="table2">
                        <thead class="text-white">
                            <tr>
                                <th width="5%">No</th>
                                <th>Gambar</th>
                                <th width="15%">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $gambar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>

                                    <td>
                                        <img src="<?php echo e(asset('storage/' . $item->path)); ?>"
                                            style="max-width: 120px; border-radius: 5px;">
                                    </td>

                                    <td>
                                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#editModal<?php echo e($item->id); ?>">
                                            Edit
                                        </button>
                                    </td>
                                </tr>

                                
                                <div class="modal fade" id="editModal<?php echo e($item->id); ?>" tabindex="-1"
                                    aria-labelledby="editModalLabel<?php echo e($item->id); ?>" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="<?php echo e(route('gambarmaklumatpelayanan.update', $item->id)); ?>"
                                                method="POST" enctype="multipart/form-data">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('PUT'); ?>

                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editModalLabel<?php echo e($item->id); ?>">
                                                        Edit Gambar
                                                    </h5>
                                                    <button type="button" class="btn-close"
                                                        data-bs-dismiss="modal"></button>
                                                </div>

                                                <div class="modal-body">

                                                    <div class="mb-3">
                                                        <label>Gambar Sekarang</label><br>
                                                        <img src="<?php echo e(asset('storage/' . $item->path)); ?>"
                                                            style="max-width: 100%; border-radius: 5px;">
                                                    </div>

                                                    <div class="form-group mt-2">
                                                        <label>Ganti Gambar (opsional)</label>
                                                        <input type="file" name="path" class="form-control">
                                                        <small class="text-muted">
                                                            Kosongkan jika tidak ingin mengganti gambar.
                                                        </small>
                                                    </div>

                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="4" class="text-center text-muted">
                                        Tidak ada Maklumat.
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?php echo e(route('gambarmaklumatpelayanan.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="modal-header">
                        <h5 class="modal-title" id="createModalLabel">Tambah Gambar Maklumat Pelayanan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <label>Upload Gambar</label>
                            <input type="file" name="path" class="form-control" required>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/backend/maklumat-pelayanan/index.blade.php ENDPATH**/ ?>