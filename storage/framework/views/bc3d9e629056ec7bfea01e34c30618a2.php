<?php $__env->startSection('title', 'FAQ PPID'); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <h1 class="h3 mb-3">FAQ PPID</h1>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <div class="card shadow">
        <div class="card-header d-flex justify-content-between">
            <h6 class="fw-bold">Data FAQ</h6>
            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#createModal">
                Tambah Data
            </button>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <thead class="text-center">
                    <tr>
                        <th width="5%">No</th>
                        <th width="30%">Judul</th>
                        <th>Deskripsi</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="text-center"><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($item->judul); ?></td>
                            <td><?php echo $item->deskripsi; ?></td>
                            <td class="text-center">
                                <button class="btn btn-warning btn-sm"
                                    data-bs-toggle="modal"
                                    data-bs-target="#edit<?php echo e($item->id); ?>">
                                    Edit
                                </button>
                            </td>
                        </tr>

                        
                        

                        <div class="modal fade" id="edit<?php echo e($item->id); ?>" tabindex="-1"
                                aria-labelledby="editModalLabel<?php echo e($item->id); ?>" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="<?php echo e(route('admin-ppid-faq.update', $item->id)); ?>"
                                            method="POST" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>

                                    <div class="modal-header">
                                        <h5>Edit FAQ</h5>
                                    </div>

                                    <div class="modal-body">
                                        <label>Judul</label>
                                        <input type="text"
                                            name="judul"
                                            class="form-control mb-3"
                                            value="<?php echo e($item->judul); ?>"
                                            required>

                                        <label>Deskripsi</label>
                                        <textarea name="deskripsi"
                                            class="form-control"
                                            rows="5"
                                            required><?php echo e($item->deskripsi); ?></textarea>
                                    </div>

                                            <div class="modal-footer">
                                                <button class="btn btn-primary">Update</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="modal fade" id="createModal">
    <div class="modal-dialog">
        <form method="POST"
            action="<?php echo e(route('admin-ppid-faq.store')); ?>"
            class="modal-content">
            <?php echo csrf_field(); ?>

            <div class="modal-header">
                <h5>Tambah FAQ PPID</h5>
            </div>

            <div class="modal-body">
                <label>Judul</label>
                <input type="text"
                    name="judul"
                    class="form-control mb-3"
                    required>

                <label>Deskripsi</label>
                <textarea name="deskripsi"
                    class="form-control"
                    rows="5"
                    required></textarea>
            </div>

            <div class="modal-footer">
                <button class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/backend/informasi-publik/ppid/faq/index.blade.php ENDPATH**/ ?>