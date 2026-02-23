<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <?php echo $__env->make('includes.frontend.style', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</head>

<body>

    <!-- Topbar Start -->
    <?php echo $__env->make('includes.frontend.topbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <!-- Topbar End -->

    <!-- Navbar & Carousel Start -->
    <?php echo $__env->make('includes.frontend.navbar', ['carousel' => $carousel], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <!-- Navbar & Carousel End -->

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ikon Media Sosial yang akan terbang dari sebelah kanan -->
    <div class="social-media-icons">
        <a href="<?php echo e($sosmed->ig); ?>" target="_blank"
            class="social-icon facebook btn-lg-square">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://x.com/kkp_pontianak" target="_blank" class="social-icon twitter btn-lg-square">
            <i class="fab fa-twitter"></i>
        </a>
        <a href="https://www.instagram.com/bkk.pontianak/" target="_blank" class="social-icon instagram btn-lg-square">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="https://www.tiktok.com/@bkkpontianak?is_from_webapp=1&sender_device=pc" target="_blank"
            class="social-icon tiktok btn-lg-square">
            <i class="fab fa-tiktok"></i>
        </a>
        <a href="https://www.youtube.com/channel/UCXBSuR2BWc9FQ0xRa8G-1rQ/featured" target="_blank"
            class="social-icon youtube btn-lg-square">
            <i class="fab fa-youtube"></i>
        </a>
        <a href="https://api.whatsapp.com/message/4ZTOZITFRHX5G1?autoload=1&app_absent=0" target="_blank"
            class="social-icon whatsapp btn-lg-square">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <!-- Full Screen Search End -->
    <?php echo $__env->yieldContent('content'); ?>

    <div class="modal fade" id="announcementModal" tabindex="-1" aria-labelledby="announcementModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body">
                    <?php if($gambar): ?>
                        <img src="<?php echo e(asset('storage/' . $gambar->path)); ?>" alt="Maklumat Pelayanan"
                            style="max-width: 100%; border-radius: 5px;">
                    <?php else: ?>
                        <p class="text-muted text-center">Belum ada gambar maklumat pelayanan.</p>
                    <?php endif; ?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <?php echo $__env->make('includes.frontend.footer', ['footer' => $footer, 'sosmed' => $sosmed ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i
            class="bi bi-arrow-up"></i></a>

    <?php echo $__env->make('includes.frontend.script', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
    <script>
        $(document).ready(function() {
            var modalImageSrc = "frontend/img/maklumatpelayanan.png";
            $('#announcementModal img').attr('src', modalImageSrc);
            $('#announcementModal').modal('show');
        });
    </script>

</body>

</html>
<?php /**PATH D:\Koding\bkkpontianak\resources\views/layouts/app.blade.php ENDPATH**/ ?>