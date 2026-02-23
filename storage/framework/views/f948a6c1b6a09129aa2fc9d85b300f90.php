<?php $__env->startSection('title', 'FAQ WBK'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <h1 class="h3 mb-3">Tentang = WBK</h1>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <div class="card shadow">
        <div class="card-header d-flex justify-content-between">
            <h6 class="font-weight-bold">Data FAQ WBK</h6>
            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#createModal">
                Tambah Data
            </button>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <thead class="text-center">
                    <tr>
                        <th width="5%">No</th>
                        <th>Pertanyaan</th>
                        <th>Jawaban</th>
                        <th width="20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td class="text-center"><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($item->nama); ?></td>
                            <td><?php echo $item->deskripsi; ?></td>
                            <td class="text-center">
                                <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#editModal<?php echo e($item->id); ?>">
                                    Edit
                                </button>

                                <form action="<?php echo e(route('admin-faq-wbk.destroy', $item->id)); ?>"
                                    method="POST" class="d-inline">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Hapus data ini?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>

                        
                        <div class="modal fade" id="editModal<?php echo e($item->id); ?>">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <form method="POST"
                                        action="<?php echo e(route('admin-faq-wbk.update', $item->id)); ?>">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>

                                        <div class="modal-header">
                                            <h5>Edit FAQ</h5>
                                            <button type="button" class="btn-close"
                                                data-bs-dismiss="modal"></button>
                                        </div>

                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label>Pertanyaan</label>
                                                <input type="text" name="nama"
                                                    value="<?php echo e($item->nama); ?>"
                                                    class="form-control" required>
                                            </div>

                                            <div class="mb-3">
                                                <label>Jawaban</label>
                                                <textarea name="deskripsi"
                                                    class="form-control" rows="5"
                                                    required><?php echo e($item->deskripsi); ?></textarea>
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
            <form method="POST" action="<?php echo e(route('admin-faq-wbk.store')); ?>">
                <?php echo csrf_field(); ?>

                <div class="modal-header">
                    <h5>Tambah FAQ WBK</h5>
                    <button type="button" class="btn-close"
                        data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label>Pertanyaan</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Jawaban</label>
                        <textarea name="deskripsi" class="form-control"
                            rows="5" required></textarea>
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

<?php echo $__env->make('layouts.back', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/backend/pengaduan/tentang-wbk/index.blade.php ENDPATH**/ ?>