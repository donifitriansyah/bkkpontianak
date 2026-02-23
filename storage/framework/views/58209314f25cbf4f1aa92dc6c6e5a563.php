<?php $__env->startSection('title', 'Dashboard Interaktif'); ?>

<?php $__env->startSection('content'); ?>
    <link href="<?php echo e(asset('backend/assets/extensions/summernote/summernote-lite.min.css')); ?>" rel="stylesheet">

    <div class="container-fluid">
        <h1 class="h3 mb-3">Dashboard Interaktif</h1>

        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <div class="card shadow">
            <div class="card-header d-flex justify-content-between">
                <h6 class="fw-bold">Dashboard Interaktif</h6>
                <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createModal">
                    Tambah Data
                </button>

            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>BEDESUT</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($item->nama); ?></td>
                                <td><?php echo e($item->bedesut->nama ?? '-'); ?></td>
                                <td class="text-center">
                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#editModal<?php echo e($item->id); ?>">Edit</button>
                                </td>


                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="4" class="text-center">Belum ada data</td>
                            </tr>
                        <?php endif; ?>

                        
                        <div class="modal fade" id="editModal<?php echo e($item->id); ?>">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <form method="POST" action="<?php echo e(route('admin-dashboard-interaktif.update', $item->id)); ?>"
                                        enctype="multipart/form-data" class="modal-content">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>

                                        <div class="modal-header">
                                            <h5>Edit Dashboard Interaktif</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <div class="modal-body">
                                            
                                            <input name="nama" class="form-control mb-3" value="<?php echo e($item->nama); ?>"
                                                placeholder="Nama">

                                            
                                            <select name="bedesut_id" class="form-control mb-3">
                                                <option value="">-- Pilih BEDESUT --</option>
                                                <?php $__currentLoopData = $bedesut; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($b->id); ?>"
                                                        <?php echo e($item->bedesut_id == $b->id ? 'selected' : ''); ?>>
                                                        <?php echo e($b->nama); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>

                                            
                                            <input name="link_looker" class="form-control mb-3"
                                                value="<?php echo e($item->link_looker); ?>" placeholder="Link Looker (opsional)">

                                            
                                            <input type="file" name="thumbnail" class="form-control mb-3">

                                            <?php if($item->thumbnail): ?>
                                                <img src="<?php echo e(asset('storage/' . $item->thumbnail)); ?>"
                                                    class="img-fluid mb-3" style="max-height:150px">
                                            <?php endif; ?>

                                            
                                            <textarea name="text" class="form-control summernote">
                                                <?php echo $item->text; ?>

                                                </textarea>
                                        </div>

                                        <div class="modal-footer">
                                            <button class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
    <div class="modal fade" id="createModal">
        <div class="modal-dialog modal-lg">
            <form method="POST" action="" enctype="multipart/form-data" class="modal-content">
                <?php echo csrf_field(); ?>
                <div class="modal-header">
                    <h5>Tambah Dashboard</h5>
                </div>
                <div class="modal-body">
                    <input name="nama" class="form-control mb-3" placeholder="Nama">

                    <select name="bedesut_id" class="form-control mb-3">
                        <option value="">-- Pilih BEDESUT --</option>
                        <?php $__currentLoopData = $bedesut; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($b->id); ?>"><?php echo e($b->nama); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>

                    <input name="link_looker" class="form-control mb-3" placeholder="Link Looker (opsional)">
                    <input type="file" name="thumbnail" class="form-control mb-3">

                    <textarea name="text" class="form-control summernote"></textarea>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <script src="<?php echo e(asset('backend/assets/extensions/summernote/summernote-lite.min.js')); ?>"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $('.summernote').summernote({
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
                url: "<?php echo e(route('dashboard-interaktif.upload-image')); ?>",
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

<?php echo $__env->make('layouts.back', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/backend/informasi-publik/bedesut-dashboard/index.blade.php ENDPATH**/ ?>