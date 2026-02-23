<div class="container py-4">
    <div class="grid-6">
        <a href="<?php echo e(route('ppid')); ?>">
            <div class="nav-card <?php echo e(request()->routeIs('ppid') ? 'active' : ''); ?>">
                <img src="<?php echo e(asset('frontend/img/house.svg')); ?>" alt="">
                <p>Beranda</p>
            </div>
        </a>
        <a href="<?php echo e(route('ppid.profil')); ?>">
            <div class="nav-card <?php echo e(request()->routeIs('ppid.profil') ? 'active' : ''); ?>">
                <img src="<?php echo e(asset('frontend/img/resume.svg')); ?>" alt="">
                <p>Profil PPID</p>
            </div>
        </a>
        <a href="<?php echo e(route('ppid.regulasi')); ?>">
            <div class="nav-card <?php echo e(request()->routeIs('ppid.regulasi') ? 'active' : ''); ?>">
                <img src="<?php echo e(asset('frontend/img/regulation (1).svg')); ?>" alt="">
                <p>Regulasi</p>
            </div>
        </a>
        <a href="<?php echo e(route('ppid.standar-layanan')); ?>">
            <div class="nav-card <?php echo e(request()->routeIs('ppid.standar-layanan') ? 'active' : ''); ?>">
                <img src="<?php echo e(asset('frontend/img/customer-service.svg')); ?>" alt="">
                <p>Standar Layanan</p>
            </div>
        </a>

        <a href="<?php echo e(route('ppid.informasi-publik')); ?>">
            <div class="nav-card <?php echo e(request()->routeIs('ppid.informasi-publik') ? 'active' : ''); ?> ">
                <img src="<?php echo e(asset('frontend/img/info.svg')); ?>" alt="">
                <p>Informasi Publik</p>
            </div>
        </a>

        <a href="<?php echo e(route('ppid.laporan')); ?>">
            <div class="nav-card <?php echo e(request()->routeIs('ppid.laporan') ? 'active' : ''); ?>">
                <img src="<?php echo e(asset('frontend/img/report.svg')); ?>" alt="">
                <p>Laporan</p>
            </div>
        </a>

    </div>
</div>
<?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/includes/frontend/ppid.blade.php ENDPATH**/ ?>