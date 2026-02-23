<?php $__env->startSection('title','Sunmore'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <h1 class="h3 mb-3">Sunmore</h1>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <div class="card shadow">
        <div class="card-header d-flex justify-content-between">
            <h6 class="fw-bold">Data Sunmore</h6>
            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#createModal">
                Tambah Data
            </button>
        </div>

        <div class="card-body">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>BEDESUT</th>
                        <th>PDF</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($item->nama); ?></td>
                        <td><?php echo e($item->bedesut->nama ?? '-'); ?></td>
                        <td>
                            <a href="<?php echo e(asset('storage/'.$item->path_pdf)); ?>" target="_blank"
                                class="btn btn-success btn-sm">Lihat</a>
                        </td>
                        <td>
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                data-bs-target="#edit<?php echo e($item->id); ?>">Edit</button>
                        </td>
                    </tr>

                    
                    <div class="modal fade" id="edit<?php echo e($item->id); ?>">
                        <div class="modal-dialog">
                            <form method="POST"
                                action="<?php echo e(route('sunmore.update', $item->id)); ?>"
                                enctype="multipart/form-data"
                                class="modal-content">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>

                                <div class="modal-header">
                                    <h5>Edit Sunmore</h5>
                                </div>

                                <div class="modal-body">
                                    <input name="nama" class="form-control mb-3"
                                        value="<?php echo e($item->nama); ?>">

                                    <select name="bedesut_id" class="form-control mb-3">
                                        <option value="">-- Pilih BEDESUT --</option>
                                        <?php $__currentLoopData = $bedesut; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($b->id); ?>"
                                                <?php echo e($item->bedesut_id == $b->id ? 'selected' : ''); ?>>
                                                <?php echo e($b->nama); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>

                                    <label>PDF (opsional)</label>
                                    <input type="file" name="path_pdf" class="form-control mb-3">

                                    <label>Thumbnail (opsional)</label>
                                    <input type="file" name="thumbnail" class="form-control">
                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="5">Belum ada data</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="modal fade" id="createModal">
    <div class="modal-dialog">
        <form method="POST" action="<?php echo e(route('sunmore.store')); ?>"
            enctype="multipart/form-data" class="modal-content">
            <?php echo csrf_field(); ?>
            <div class="modal-header">
                <h5>Tambah Sunmore</h5>
            </div>

            <div class="modal-body">
                <input name="nama" class="form-control mb-3" placeholder="Nama">

                <select name="bedesut_id" class="form-control mb-3">
                    <option value="">-- Pilih BEDESUT --</option>
                    <?php $__currentLoopData = $bedesut; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($b->id); ?>"><?php echo e($b->nama); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>

                <label>File PDF</label>
                <input type="file" name="path_pdf" class="form-control mb-3" required>

                <label>Thumbnail</label>
                <input type="file" name="thumbnail" class="form-control">
            </div>

            <div class="modal-footer">
                <button class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/backend/informasi-publik/sunmore/index.blade.php ENDPATH**/ ?>