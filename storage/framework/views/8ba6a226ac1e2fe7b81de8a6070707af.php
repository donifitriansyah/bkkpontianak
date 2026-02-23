<?php $__env->startSection('title', 'Panduan SKI'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <h1 class="h3 mb-3">Panduan SKI</h1>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <div class="card shadow">
        <div class="card-header d-flex justify-content-between">
            <h6 class="font-weight-bold">Data Panduan SKI</h6>
            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#createModal">
                Tambah Data
            </button>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Panduan</th>
                        <th>Link Drive</th>
                        <th width="20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($item->nama); ?></td>
                            <td>
                                <a href="<?php echo e($item->link_drive); ?>" target="_blank">
                                    <?php echo e($item->link_drive); ?>

                                </a>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#editModal<?php echo e($item->id); ?>">
                                    Edit
                                </button>

                                <form action="<?php echo e(route('admin-panduan-ski.destroy', $item->id)); ?>"
                                    method="POST" class="d-inline">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin hapus data?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>

                        
                        <div class="modal fade" id="editModal<?php echo e($item->id); ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form method="POST"
                                        action="<?php echo e(route('admin-panduan-ski.update', $item->id)); ?>">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>

                                        <div class="modal-header">
                                            <h5>Edit Panduan SKI</h5>
                                            <button type="button" class="btn-close"
                                                data-bs-dismiss="modal"></button>
                                        </div>

                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label>Nama Panduan</label>
                                                <input type="text" name="nama" class="form-control"
                                                    value="<?php echo e($item->nama); ?>">
                                            </div>

                                            <div class="mb-3">
                                                <label>Link Drive</label>
                                                <input type="text" name="link_drive" class="form-control"
                                                    value="<?php echo e($item->link_drive); ?>">
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Batal</button>
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
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="<?php echo e(route('admin-panduan-ski.store')); ?>">
                <?php echo csrf_field(); ?>

                <div class="modal-header">
                    <h5>Tambah Panduan SKI</h5>
                    <button type="button" class="btn-close"
                        data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label>Nama Panduan</label>
                        <input type="text" name="nama" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Link Drive</label>
                        <input type="text" name="link_drive" class="form-control">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Batal</button>
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/backend/ski/panduan-ski/index.blade.php ENDPATH**/ ?>