<?php $__env->startSection('title', 'Form PPID'); ?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <h1 class="h3 mb-3">Form PPID</h1>

        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <div class="card shadow">
            <div class="card-header d-flex justify-content-between">
                <h6 class="fw-bold">Data Form</h6>
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#createModal">
                    Tambah Data
                </button>
            </div>

            <div class="card-body">
                <table class="table table-bordered" id="ppidTable">
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>Permohonan Informasi</th>
                            <th>Keberatan</th>
                            <th>Daftar Informasi Publik</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                <td><a href="<?php echo e($item->form_permohonan_informasi); ?>" target="_blank">Link</a></td>
                                <td><a href="<?php echo e($item->form_keberatan); ?>" target="_blank">Link</a></td>
                                <td class="text-center">
                                    <?php if($item->file_daftar_informasi_publik): ?>
                                        <a href="<?php echo e(asset('storage/' . $item->file_daftar_informasi_publik)); ?>"
                                            target="_blank">
                                            Download
                                        </a>
                                    <?php else: ?>
                                        -
                                    <?php endif; ?>
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#edit<?php echo e($item->id); ?>">Edit</button>
                                </td>
                            </tr>


                            <div class="modal fade" id="edit<?php echo e($item->id); ?>" tabindex="-1"
                                aria-labelledby="editModalLabel<?php echo e($item->id); ?>" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="<?php echo e(route('admin-ppid-form.update', $item->id)); ?>"
                                            method="POST" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('PUT'); ?>

                                            <div class="modal-header">
                                                <h5>Edit Form Link</h5>
                                            </div>

                                            <div class="modal-body">
                                                <label>Link Form Permohonan Informasi</label>
                                                <input name="form_permohonan_informasi" class="form-control mb-3"
                                                    value="<?php echo e($item->form_permohonan_informasi); ?>">

                                                <label>Link Form Keberatan</label>
                                                <input name="form_keberatan" class="form-control mb-3"
                                                    value="<?php echo e($item->form_keberatan); ?>">

                                                <label>File Daftar Informasi Publik</label>
                                                <input type="file" name="file_daftar_informasi_publik"
                                                    class="form-control">
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
            <form method="POST" action="<?php echo e(route('admin-ppid-form.store')); ?>" enctype="multipart/form-data"
                class="modal-content">
                <?php echo csrf_field(); ?>
                <div class="modal-header">
                    <h5>Tambah Form PPID</h5>
                </div>
                <div class="modal-body">
                    <input name="form_permohonan_informasi" class="form-control mb-3"
                        placeholder="Link Form Permohonan Informasi">

                    <input name="form_keberatan" class="form-control mb-3" placeholder="Link Form Keberatan">

                    <input type="file" name="file_daftar_informasi_publik" class="form-control">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/backend/informasi-publik/ppid/form/index.blade.php ENDPATH**/ ?>