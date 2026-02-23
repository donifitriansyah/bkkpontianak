<?php $__env->startSection('title', 'SK dan SOP'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <h1 class="h3 mb-3">SK dan SOP</h1>

        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <div class="card shadow">
            <div class="card-header d-flex justify-content-between">
                <h6 class="font-weight-bold">Data SK dan SOP</h6>
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
                            <th>Kategori</th>
                            <th>File PDF</th>
                            <th width="20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($item->nama); ?></td>
                                <td class="text-center">
                                    <span class="badge <?php echo e($item->kategori == 'SK' ? 'bg-primary' : 'bg-success'); ?>">
                                        <?php echo e($item->kategori); ?>

                                    </span>
                                </td>

                                <td>
                                    <a href="<?php echo e(asset('storage/' . $item->file_pdf)); ?>" target="_blank"
                                        class="btn btn-success btn-sm">
                                        Lihat PDF
                                    </a>
                                </td>
                                <td>
                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#editModal<?php echo e($item->id); ?>">
                                        Edit
                                    </button>

                                    <form action="<?php echo e(route('admin-sk-dan-sop.destroy', $item->id)); ?>" method="POST"
                                        class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>

                            
                            <div class="modal fade" id="editModal<?php echo e($item->id); ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form method="POST" action="<?php echo e(route('admin-sk-dan-sop.update', $item->id)); ?>"
                                            enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('PUT'); ?>

                                            <div class="modal-header">
                                                <h5>Edit SK / SOP</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label>Nama</label>
                                                    <input type="text" name="nama" value="<?php echo e($item->nama); ?>"
                                                        class="form-control" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label>Kategori</label>
                                                    <select name="kategori" class="form-control" required>
                                                        <option value="SK"
                                                            <?php echo e($item->kategori == 'SK' ? 'selected' : ''); ?>>SK</option>
                                                        <option value="SOP"
                                                            <?php echo e($item->kategori == 'SOP' ? 'selected' : ''); ?>>SOP</option>
                                                    </select>
                                                </div>


                                                <div class="mb-3">
                                                    <label>File PDF (Opsional)</label>
                                                    <input type="file" name="file_pdf" class="form-control"
                                                        accept="application/pdf">
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
                                <td colspan="5">Data belum tersedia</td>
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
                <form method="POST" action="<?php echo e(route('admin-sk-dan-sop.store')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <div class="modal-header">
                        <h5>Tambah SK / SOP</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <div class="mb-3">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>

                        <select name="kategori" class="form-control" required>
                            <option value="">-- Pilih Kategori --</option>
                            <option value="SK" <?php echo e(old('kategori') == 'SK' ? 'selected' : ''); ?>>SK</option>
                            <option value="SOP" <?php echo e(old('kategori') == 'SOP' ? 'selected' : ''); ?>>SOP</option>
                        </select>



                        <div class="mb-3">
                            <label>File PDF</label>
                            <input type="file" name="file_pdf" class="form-control" accept="application/pdf" required>
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

<?php echo $__env->make('layouts.back', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/backend/ski/skdansop/index.blade.php ENDPATH**/ ?>