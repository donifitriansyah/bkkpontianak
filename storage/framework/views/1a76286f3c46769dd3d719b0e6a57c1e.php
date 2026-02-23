<?php $__env->startSection('content'); ?>

    <div class="container mt-4">

        <div class="card">
            <div class="card-header">
                <h4>Tambah Berita</h4>
            </div>

            <div class="card-body">
                <form action="<?php echo e(route('berita.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <!-- Judul -->
                    <div class="mb-3">
                        <label class="form-label">Judul Berita</label>
                        <input type="text" name="judul" class="form-control" required>
                    </div>

                    <!-- Kategori -->
                    <div class="form-group">
                        <label for="kategori_id" class="form-label">Kategori</label>
                        <select name="kategori_id" id="kategori_id" class="form-control">
                            <option value="">-- Pilih Kategori --</option>
                            <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($k->id); ?>"><?php echo e($k->nama_kategori); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="mb-3 form-group">
                        <label class="form-label">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control">
                    </div>


                    <!-- Thumbnail -->
                    <div class="mb-3 form-group">
                        <label class="form-label">Thumbnail</label>
                        <input type="file" name="thumbnail" class="form-control">
                    </div>

                    <!-- Konten -->
                    <div class="form-group">
                        <label for="konten">Konten</label>
                        <textarea name="konten" id="summernote" class="form-control" rows="8">
                    </textarea>
                    </div>

                    <!-- Status -->
                    <div class="form-group">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-control" required>
                            <option value="draft">Draft</option>
                            <option value="published">Publish</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="<?php echo e(route('berita.index')); ?>" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/backend/berita/create.blade.php ENDPATH**/ ?>