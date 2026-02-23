<?php $__env->startSection('title', 'Bedesut'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <h1 class="h3 mb-3">Data Bedesut</h1>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <div class="card shadow">
        <div class="card-header d-flex justify-content-between">
            <h6 class="font-weight-bold">Daftar Bedesut</h6>
            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#createModal">
                Tambah Data
            </button>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Thumbnail</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td class="text-center"><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($item->nama); ?></td>
                            <td class="text-center">
                                <?php if($item->thumbnail): ?>
                                    <img src="<?php echo e(asset('storage/'.$item->thumbnail)); ?>" width="80">
                                <?php else: ?>
                                    <span class="text-muted">-</span>
                                <?php endif; ?>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#editModal<?php echo e($item->id); ?>">
                                    Edit
                                </button>
                                <form action="<?php echo e(route('admin-bedesut.destroy', $item->id)); ?>"
                                    method="POST" class="d-inline"
                                    onsubmit="return confirm('Yakin hapus data?')">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>

                        
                        <div class="modal fade" id="editModal<?php echo e($item->id); ?>">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <form method="POST"
                                        action="<?php echo e(route('admin-bedesut.update', $item->id)); ?>"
                                        enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>

                                        <div class="modal-header">
                                            <h5>Edit Bedesut</h5>
                                            <button type="button" class="btn-close"
                                                data-bs-dismiss="modal"></button>
                                        </div>

                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label>Nama</label>
                                                <input type="text" name="nama"
                                                    value="<?php echo e($item->nama); ?>"
                                                    class="form-control" required>
                                            </div>

                                            <div class="mb-3">
                                                <label>Thumbnail</label>
                                                <input type="file" name="thumbnail"
                                                    class="form-control">
                                            </div>

                                            <div class="mb-3">
                                                <label>Deskripsi</label>
                                                <textarea name="text" rows="5"
                                                    class="form-control" required><?php echo e($item->text); ?></textarea>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button class="btn btn-secondary"
                                                data-bs-dismiss="modal">Batal</button>
                                            <button class="btn btn-primary">Update</button>
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


<div class="modal fade" id="createModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="POST"
                action="<?php echo e(route('admin-bedesut.store')); ?>"
                enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <div class="modal-header">
                    <h5>Tambah Bedesut</h5>
                    <button type="button" class="btn-close"
                        data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label>Nama</label>
                        <input type="text" name="nama"
                            class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Thumbnail</label>
                        <input type="file" name="thumbnail"
                            class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Deskripsi</label>
                        <textarea name="text" rows="5"
                            class="form-control" required></textarea>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary"
                        data-bs-dismiss="modal">Batal</button>
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/backend/informasi-publik/bedesut/index.blade.php ENDPATH**/ ?>