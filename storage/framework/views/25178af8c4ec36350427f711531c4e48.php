<?php $__env->startSection('title'); ?>
    Carousel
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Carousel</h1>
        <p class="mb-4"></p>
        <?php if(session('success')): ?>
            <div class="toast-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">

                <!-- Alert Sukses -->


                <h6 class="m-0 font-weight-bold text-primary">Tabel Carousel</h6>

                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                    Tambah Carousel
                </button>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="table2" width="100%" cellspacing="0">
                        <thead class="text-white">
                            <tr>
                                <th width="5%">No</th>
                                <th width="20%">Foto</th>
                                <th>Teks</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $carousel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="text-center"><?php echo e($loop->iteration); ?></td>

                                    <td class="text-center">
                                        <img src="<?php echo e(asset('storage/' . $item->path)); ?>" class="img-thumbnail"
                                            style="max-width: 120px;">
                                    </td>

                                    <td>
                                        <?php echo e($item->text); ?>

                                    </td>

                                    <td class="text-center">
                                        <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#editModal<?php echo e($item->id); ?>">
                                            Edit
                                        </button>

                                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal<?php echo e($item->id); ?>">
                                            Hapus
                                        </button>
                                    </td>

                                </tr>
                                <div class="modal fade" id="editModal<?php echo e($item->id); ?>" tabindex="-1">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <form action="<?php echo e(route('carousel.update', $item->id)); ?>" method="POST"
                                                enctype="multipart/form-data">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('PUT'); ?>

                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Carousel</h5>
                                                    <button type="button" class="btn-close"
                                                        data-bs-dismiss="modal"></button>
                                                </div>

                                                <div class="modal-body">

                                                    <div class="mb-3">
                                                        <label class="form-label">Gambar Saat Ini</label><br>
                                                        <img src="<?php echo e(asset('storage/' . $item->path)); ?>"
                                                            class="img-thumbnail mb-2" style="max-width: 200px;">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">Ganti Gambar (Opsional)</label>
                                                        <input type="file" name="path" class="form-control">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">Teks</label>
                                                        <textarea name="text" class="form-control" rows="4" required><?php echo e($item->text); ?></textarea>
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
                                <div class="modal fade" id="deleteModal<?php echo e($item->id); ?>" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="<?php echo e(route('carousel.destroy', $item->id)); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>

                                                <div class="modal-header">
                                                    <h5 class="modal-title text-danger">Hapus Carousel</h5>
                                                    <button type="button" class="btn-close"
                                                        data-bs-dismiss="modal"></button>
                                                </div>

                                                <div class="modal-body text-center">
                                                    <p>Apakah Anda yakin ingin menghapus carousel ini?</p>
                                                    <img src="<?php echo e(asset('storage/' . $item->path)); ?>" class="img-thumbnail"
                                                        style="max-width: 200px;">
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="4" class="text-center text-muted">
                                        Tidak ada data carousel
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

    </div>
    <div class="modal fade" id="createModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="<?php echo e(route('carousel.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Carousel</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Gambar</label>
                            <input type="file" name="path" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Teks</label>
                            <textarea name="text" class="form-control" rows="4" required></textarea>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/backend/carousel/index.blade.php ENDPATH**/ ?>