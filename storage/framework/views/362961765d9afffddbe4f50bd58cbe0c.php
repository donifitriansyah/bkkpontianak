<?php $__env->startSection('title', 'Gol KPK'); ?>

<?php $__env->startSection('content'); ?>
    <link href="<?php echo e(asset('backend/assets/extensions/summernote/summernote-lite.min.css')); ?>" rel="stylesheet">


    <div class="container-fluid">
        <h1 class="h3 mb-3">Gol KPK</h1>

        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <div class="card shadow">
            <div class="card-header d-flex justify-content-between">
                <h6 class="font-weight-bold">Data Gol KPK</h6>
                <?php if($data->count() < 1): ?>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#createModal">
                        Tambah Data
                    </button>
                <?php endif; ?>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Isi</th>
                            <th width="15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <?php if($data->count() < 1): ?>
                                <td>Data Belum Ada</td>
                                <?php endif; ?>
                                <td>Data Gol KPK</td>

                                <td class="text-center">
                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#editModal<?php echo e($item->id); ?>">
                                        Edit
                                    </button>
                                </td>
                            </tr>

                            
                            <div class="modal fade" id="editModal<?php echo e($item->id); ?>">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <form method="POST" action="<?php echo e(route('admin-gol-kpk.update', $item->id)); ?>">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('PUT'); ?>

                                            <div class="modal-header">
                                                <h5>Edit Gol KPK</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>

                                            <div class="modal-body">
                                                <textarea class="form-control summernote-edit" name="text"><?php echo $item->text; ?></textarea>
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
                                <td colspan="2" class="text-center text-muted">Belum ada data</td>
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
                <form method="POST" action="<?php echo e(route('admin-gol-kpk.store')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="modal-header">
                        <h5>Tambah Gol KPK</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <textarea class="form-control summernote" name="text"></textarea>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="<?php echo e(asset('backend/assets/extensions/summernote/summernote-lite.min.js')); ?>"></script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $('.summernote, .summernote-edit').summernote({
                height: 250,
                callbacks: {
                    onImageUpload: function(files) {
                        uploadImage(files[0], this);
                    }
                }
            });
        });

        function uploadImage(file, editor) {
            let data = new FormData();
            data.append("file", file);
            data.append("_token", "<?php echo e(csrf_token()); ?>");

            $.ajax({
                url: "<?php echo e(route('admin-gol-kpk.upload-image')); ?>",
                type: "POST",
                data: data,
                contentType: false,
                processData: false,
                success: function(res) {
                    $(editor).summernote('insertImage', res.url);
                }
            });
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/backend/pengaduan/gol-kpk/index.blade.php ENDPATH**/ ?>