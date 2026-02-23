<?php $__env->startSection('title', 'Footer'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">

        <h1 class="h3 mb-4 text-gray-800">Footer Website</h1>

        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <div class="card shadow mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h6 class="font-weight-bold text-primary mb-0">Data Footer</h6>

                <?php if($footer->count() < 1): ?>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#createModal">
                        Tambah Footer
                    </button>
                <?php endif; ?>


            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Teks</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>No Telp</th>
                            <th>Lokasi</th>
                            <th width="15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $footer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo Str::limit(strip_tags($item->text), 100); ?></td>
                                <td><?php echo e($item->alamat); ?></td>
                                <td><?php echo e($item->email); ?></td>
                                <td><?php echo e($item->no_telp); ?></td>
                                <td>
                                    <a href="<?php echo e($item->lokasi); ?>" target="_blank">Maps</a>
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#editModal<?php echo e($item->id); ?>">
                                        Edit
                                    </button>
                                </td>
                            </tr>

                            
                            <div class="modal fade" id="editModal<?php echo e($item->id); ?>" tabindex="-1">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <form method="POST" action="<?php echo e(route('footer.update', $item->id)); ?>">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('PUT'); ?>

                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Footer</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="mb-3">
                        <label class="form-label">
                            Teks <small class="text-muted">(maks. 260 karakter)</small>
                        </label>

                        <textarea
                            name="text"
                            id="text-edit-<?php echo e($item->id); ?>"
                            class="form-control"
                            rows="4"
                            maxlength="260"
                            required
                            onkeyup="countCharEdit<?php echo e($item->id); ?>()"
                        ><?php echo e($item->text); ?></textarea>

                        <small class="text-muted">
                            <span id="char-edit-<?php echo e($item->id); ?>">
                                <?php echo e(strlen($item->text)); ?>

                            </span>/260 karakter
                        </small>
                    </div>

                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Alamat</label>
                                                        <input type="text" name="alamat" class="form-control"
                                                            value="<?php echo e($item->alamat); ?>" required>
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Email</label>
                                                        <input type="email" name="email" class="form-control"
                                                            value="<?php echo e($item->email); ?>" required>
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">No Telp</label>
                                                        <input type="text" name="no_telp" class="form-control"
                                                            value="<?php echo e($item->no_telp); ?>" required>
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Link Lokasi (Maps)</label>
                                                        <input type="url" name="lokasi" class="form-control"
                                                            value="<?php echo e($item->lokasi); ?>" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Batal
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    Update
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="6" class="text-center text-muted">
                                    Data footer belum tersedia
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
    <div class="modal fade" id="createModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form method="POST" action="<?php echo e(route('footer.store')); ?>">
                    <?php echo csrf_field(); ?>

                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Footer</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <div class="mb-3">
    <label class="form-label">
        Teks <small class="text-muted">(maks. 260 karakter)</small>
    </label>

    <textarea
        name="text"
        class="form-control"
        rows="4"
        maxlength="260"
        required
        oninput="updateCounter(this)"
    ><?php echo e(old('text', $item->text ?? '')); ?></textarea>

    <small class="text-muted">
        <span id="charCount">0</span>/260 karakter
    </small>
</div>

<script>
    function updateCounter(el) {
        document.getElementById('charCount').innerText = el.value.length;
    }

    // auto hitung saat edit
    document.addEventListener('DOMContentLoaded', () => {
        const textarea = document.querySelector('textarea[name="text"]');
        if (textarea) updateCounter(textarea);
    });
</script>


                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">No Telp</label>
                                <input type="text" name="no_telp" class="form-control" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Link Lokasi (Maps)</label>
                                <input type="url" name="lokasi" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Batal
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/backend/footer/index.blade.php ENDPATH**/ ?>