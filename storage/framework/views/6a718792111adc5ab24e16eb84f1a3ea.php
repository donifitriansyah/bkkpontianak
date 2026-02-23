<?php $__env->startSection('title', 'Wilayah Kerja'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <h1 class="h3 mb-3">Wilayah Kerja</h1>

        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
        <?php if($wilkerText): ?>
            <div class="card mb-4">
                <div class="card-header">
                    <h6>Deskripsi Wilayah Kerja</h6>
                </div>
                <div class="card-body">
                    <?php echo $wilkerText->text; ?>

                </div>
            </div>
        <?php endif; ?>

        <div class="card mb-3">
    <div class="card-header">Teks Wilayah Kerja</div>
    <div class="card-body">
        <form method="POST" action="<?php echo e(route('wilker.text')); ?>">
            <?php echo csrf_field(); ?>
            <textarea name="text" class="form-control" rows="5">
<?php echo e($wilkerText->text ?? ''); ?>

            </textarea>
            <button class="btn btn-primary mt-2">Simpan</button>
        </form>
    </div>
</div>


        <div class="card shadow">
            <div class="card-header d-flex justify-content-between">
                <h6>Data Wilayah Kerja</h6>
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#createModal">
                    Tambah Data
                </button>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Tempat</th>
                            <th>Alamat</th>
                            <th>Kepala</th>
                            <th width="15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $wilker; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($item->tempat); ?></td>
                                <td><?php echo e($item->alamat); ?></td>
                                <td><?php echo e($item->nama_kepala); ?></td>
                                <td class="text-center">
                                    <button class="btn btn-warning btn-sm">Edit</button>
                                    <form action="<?php echo e(route('admin-wilker.destroy', $item->id)); ?>" method="POST" class="d-inline">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data?')">
                                        Hapus
                                    </button>
                                </form>
                                </td>
                            </tr>
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
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="<?php echo e(route('admin-wilker.store')); ?>">
                    <?php echo csrf_field(); ?>

                    <div class="modal-header">
                        <h5>Tambah Wilayah Kerja</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <div class="mb-3">
                            <label>Tempat</label>
                            <input type="text" class="form-control" name="tempat" required>
                        </div>

                        <div class="mb-3">
                            <label>Alamat</label>
                            <textarea class="form-control" name="alamat" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label>Nama Kepala</label>
                            <input type="text" class="form-control" name="nama_kepala" required>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/backend/profil/wilker/index.blade.php ENDPATH**/ ?>