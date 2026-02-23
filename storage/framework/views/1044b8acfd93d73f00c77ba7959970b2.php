<?php $__env->startSection('title'); ?>
    Berita
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title-navbar'); ?>
    Berita
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            
            <div class="row">
                <!-- Blog Start -->
                <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="container py-5">
                        <div class="row g-5">
                            <!-- Blog list Start -->
                            <div class="col-lg-8">
                                <div class="row g-5">
                                    <?php $__currentLoopData = $beritas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                                            <div class="blog-item shadow rounded overflow-hidden">

                                                <!-- Thumbnail -->
                                                <div class="blog-img position-relative overflow-hidden">
                                                    <img class="img-fluid"
                                                        src="<?php echo e(asset('storage/' . $berita->thumbnail)); ?>" alt="">
                                                    <a
                                                        class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4">
                                                        <?php echo e($berita->kategori->nama_kategori ?? 'Umum'); ?>

                                                    </a>
                                                </div>

                                                <!-- Konten -->
                                                <div class="p-4">
                                                    <div class="d-flex mb-3">
                                                        <small class="me-3">
                                                            <i class="far fa-user text-primary me-2"></i>
                                                            <?php echo e($berita->penulis->name ?? 'Admin'); ?>

                                                        </small>
                                                        <small>
                                                            <i class="far fa-calendar-alt text-primary me-2"></i>
                                                            <?php echo e($berita->tanggal->format('d M Y')); ?>

                                                        </small>
                                                    </div>

                                                    <h6 class="mb-3">
                                                        <?php echo e(Str::limit(strip_tags($berita->judul), 120)); ?>

                                                    </h6>
                                                    <p><?php echo e(Str::limit(strip_tags($berita->konten), 120)); ?></p>

                                                    <a class="text-uppercase"
                                                        href="<?php echo e(route('user-berita.show', $berita->slug)); ?>">
                                                        Read More <i class="bi bi-arrow-right"></i>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    <!-- Pagination -->
                                    <div class="col-12">
                                        <?php echo e($beritas->links('pagination::bootstrap-5')); ?>

                                    </div>
                                </div>

                            </div>
                            <!-- Blog list End -->

                            <!-- Sidebar Start -->
                            <div class="col-lg-4">

                                <!-- Category Start -->
                                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                                    <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                        <h3 class="mb-0">Kategori</h3>
                                    </div>
                                    <div class="link-animated d-flex flex-column justify-content-start">
                                        <?php $__currentLoopData = $kategoriList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2"
                                                href="<?php echo e(route('berita.kategori', $kat->id)); ?>">
                                                <i class="bi bi-arrow-right me-2"></i><?php echo e($kat->nama_kategori); ?>

                                            </a>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                    </div>
                                </div>

                                <!-- Category End -->

                                <!-- Recent Post Start -->
                                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                                    <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                        <h3 class="mb-0">Berita Terkini</h3>
                                    </div>

                                    <?php $__currentLoopData = $recentPost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="d-flex rounded overflow-hidden mb-3">
                                            <img class="img-fluid" src="<?php echo e(asset('storage/' . $recent->thumbnail)); ?>"
                                                style="width: 100px; height: 100px; object-fit: cover;">

                                            <a href="<?php echo e(route('user-berita.show', $recent->slug)); ?>"
                                                class="h6 d-flex align-items-center bg-light px-3 mb-0">
                                                <?php echo e(Str::limit(strip_tags($recent->judul), 50)); ?>

                                            </a>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>

                                <!-- Recent Post End -->

                                <!-- Image Start -->
                                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                                    <img src="img/blog-1.jpg" alt="" class="img-fluid rounded">
                                </div>
                                <!-- Image End -->

                            </div>
                            <!-- Sidebar End -->
                        </div>
                    </div>
                </div>
                <!-- Blog End -->




            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.detail', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/pages/frontend/informasi-publik/berita.blade.php ENDPATH**/ ?>