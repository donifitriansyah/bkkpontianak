<div class="container-fluid bg-black text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-4 col-md-6 footer-about">
                <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-green p-4">
                    <a href="#navbar" class="navbar-brand align-items-center p-0 ">
                        <img src="<?php echo e(asset('frontend/img/logokarantina.png')); ?>" alt="Logo BKK" style="height: 150px;">
                        <h1 style="margin-top: 5px; font-size: 20px">BKK Kelas I Pontianak</h1>
                    </a>
                    <p class="mt-3 mb-4 text-white"><?php echo e($footer->text); ?></p>
                    
                </div>
            </div>
            <div class="col-lg-8 col-md-6">
                <div class="row gx-5">
                    <div class="col-lg-5 col-md-12 pt-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Kontak Kami</h3>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-geo-alt text-primary me-2"></i>
                            <p class="mb-0"><?php echo e($footer->alamat); ?>

                            </p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-envelope-open text-primary me-2"></i>
                            <p class="mb-0"><?php echo e($footer->email); ?></p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <p class="mb-0"><?php echo e($footer->no_telp); ?></p>
                        </div>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square me-2" href="<?php echo e($sosmed->ig); ?>"
                                target="blank"><i class="fab fa-instagram fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-2"
                                href="<?php echo e($sosmed->tiktok); ?>"
                                target="blank"><i class="fab fa-tiktok fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-2" href="<?php echo e($sosmed->twitter); ?>"
                                target="blank"><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-2"
                                href="<?php echo e($sosmed->fb); ?>" target="blank"><i
                                    class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-2"
                                href="<?php echo e($sosmed->yt); ?>" target="blank"><i
                                    class="fab fa-youtube fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-2"
                                href="<?php echo e($sosmed->wa); ?>" target="blank"><i
                                    class="fab fa-whatsapp fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 pt-0 pt-lg-5 mb-5">

                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Lokasi Kami</h3>
                        </div>
                        <div>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7979.615126851328!2d109.39814519357907!3d-0.1330469999999918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d50235e926d8f%3A0xb360d28cf24e43ac!2sBalai%20Kekarantinaan%20Kesehatan%20Kelas%20I%20Pontianak!5e0!3m2!1sid!2sid!4v1764179846444!5m2!1sid!2sid"
                                width="500" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid text-white" style="background: white;">
    <div class="container text-center">
        <div class="row justify-content-end">
            <div class="col-lg-8 col-md-6">
                <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                    <p class="mb-0" style="color: black">&copy; Balai Kekarantinaan Kesehatan Kelas I Pontianak
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\Koding\bkkpontianak\resources\views/includes/frontend/footer.blade.php ENDPATH**/ ?>