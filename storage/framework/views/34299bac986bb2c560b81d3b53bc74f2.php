<?php $__env->startSection('title'); ?>
    Berita
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Page Heading -->
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Data Berita</h1>

        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">List Berita</h6>
                <a href="<?php echo e(route('berita.create')); ?>" class="btn btn-primary btn-sm">
                    <i class="fas fa-plus"></i> Tambah Berita
                </a>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-white">
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Thumbnail</th>
                                <th width="10%">Tanggal</th>
                                <th>Status</th>
                                <th width="10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $beritas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td width= "30%" style="font-size: 12px;" ><?php echo e($item->judul); ?></td>
                                    <td><?php echo e($item->kategori->nama_kategori ?? '-'); ?></td>
                                    <td>
                                        <?php if($item->thumbnail): ?>
                                            <img src="<?php echo e(asset('storage/' . $item->thumbnail)); ?>" width="80"
                                                class="img-thumbnail">
                                        <?php else: ?>
                                            <span class="text-muted">-</span>
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo e($item->tanggal->format('d M Y')); ?></td>
                                    <td width= "10%"><?php echo e($item->status); ?></td>

                                    <td width= "18%" class="text-center p-4">
                                        <a href="<?php echo e(route('berita.edit', $item->id)); ?>" class="btn btn-warning btn-sm">
                                            Edit
                                        </a>
                                        <form action="<?php echo e(route('berita.destroy', $item->id)); ?>" method="POST"
                                            class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button class="btn btn-danger btn-sm">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="6" class="text-center">Belum ada data berita.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/backend/berita/index.blade.php ENDPATH**/ ?>