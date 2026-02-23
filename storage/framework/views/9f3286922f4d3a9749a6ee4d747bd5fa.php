<?php $__env->startSection('title', 'Infografis'); ?>

<?php $__env->startSection('content'); ?>
<link href="<?php echo e(asset('backend/assets/extensions/summernote/summernote-lite.min.css')); ?>" rel="stylesheet">

<div class="container-fluid">
    <h1 class="h3 mb-3">Infografis</h1>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <div class="card shadow">
        <div class="card-header d-flex justify-content-between">
            <h6 class="fw-bold">Data Infografis</h6>
            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#createModal">
                Tambah
            </button>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Bedesut</th>
                        <th>Thumbnail</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td class="text-center"><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($item->nama); ?></td>
                            <td><?php echo e($item->bedesut->nama ?? '-'); ?></td>
                            <td class="text-center">
                                <?php if($item->thumbnail): ?>
                                    <img src="<?php echo e(asset('storage/'.$item->thumbnail)); ?>" width="80">
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

                        
                        <div class="modal fade" id="editModal<?php echo e($item->id); ?>">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <form method="POST"
                                        action="<?php echo e(route('admin-bedesut-infografis.update', $item->id)); ?>"
                                        enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>

                                        <div class="modal-header">
                                            <h5>Edit Infografis</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <div class="modal-body">
                                            <input type="text" name="nama" class="form-control mb-3"
                                                value="<?php echo e($item->nama); ?>" required>

                                            <select name="bedesut_id" class="form-control mb-3">
                                                <option value="">-- Pilih Bedesut --</option>
                                                <?php $__currentLoopData = $bedesut; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($b->id); ?>"
                                                        <?php echo e($item->bedesut_id == $b->id ? 'selected' : ''); ?>>
                                                        <?php echo e($b->nama); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>

                                            <textarea class="form-control summernote-edit"
                                                name="text"><?php echo $item->text; ?></textarea>

                                            <input type="url" name="link_looker" class="form-control mt-3"
                                                value="<?php echo e($item->link_looker); ?>" placeholder="Link Looker">

                                            <input type="file" name="thumbnail" class="form-control mt-3">
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
                            <td colspan="5" class="text-center text-muted">Belum ada data</td>
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
            <form method="POST" action="<?php echo e(route('admin-bedesut-infografis.store')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="modal-header">
                    <h5>Tambah Infografis</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <input type="text" name="nama" class="form-control mb-3" placeholder="Nama" required>

                    <select name="bedesut_id" class="form-control mb-3">
                        <option value="">-- Pilih Bedesut --</option>
                        <?php $__currentLoopData = $bedesut; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($b->id); ?>"><?php echo e($b->nama); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>

                    <textarea class="form-control summernote" name="text"></textarea>

                    <input type="url" name="link_looker" class="form-control mt-3" placeholder="Link Looker">
                    <input type="file" name="thumbnail" class="form-control mt-3">
                </div>

                <div class="modal-footer">
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="<?php echo e(asset('backend/assets/extensions/summernote/summernote-lite.min.js')); ?>"></script>
<script>
    $('.summernote, .summernote-edit').summernote({
        height: 250
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/backend/informasi-publik/bedesut-infografis/index.blade.php ENDPATH**/ ?>