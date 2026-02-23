<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center p-0 ">
            <img src="<?php echo e(asset('frontend/img/logokarantina.png')); ?>" alt="Logo BKK"
                style="height: 50px; margin-right: 10px">
            <h3 class="m-0">BKK Kelas I Pontianak</h3>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="<?php echo e(route('beranda')); ?>"
                    class="nav-item nav-link <?php echo e(request()->routeIs('beranda') ? 'active' : ''); ?>">Beranda</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil</a>
                    <div class="dropdown-menu m-0">
                        <a href="<?php echo e(route('sejarah')); ?>"
                            class="dropdown-item <?php echo e(request()->routeIs('sejarah') ? 'active' : ''); ?>">Sejarah dan Latar
                            Belakang</a>
                        <a href="<?php echo e(route('visi-dan-misi')); ?>"
                            class="dropdown-item <?php echo e(request()->routeIs('visi-dan-misi') ? 'active' : ''); ?>">Visi dan
                            Misi</a>
                        <a href="<?php echo e(route('tugas-pokok-dan-fungsi')); ?>"
                            class="dropdown-item <?php echo e(request()->routeIs('tugas-pokok-dan-fungsi') ? 'active' : ''); ?>">Tugas
                            Pokok dan Fungsi</a>
                        <a href="<?php echo e(route('struktur-organisasi')); ?>"
                            class="dropdown-item <?php echo e(request()->routeIs('struktur-organisasi') ? 'active' : ''); ?> ">Struktur
                            Organisasi</a>
                        <a href="<?php echo e(route('infografis')); ?>"
                            class="dropdown-item <?php echo e(request()->routeIs('infografis') ? 'active' : ''); ?>">Infografis
                            SDM</a>
                        <a href="<?php echo e(route('wilayah-kerja')); ?>"
                            class="dropdown-item <?php echo e(request()->routeIs('wilayah-kerja') ? 'active' : ''); ?>">Wilayah
                            Kerja</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">SKI</a>
                    <div class="dropdown-menu m-0">
                        <a href="<?php echo e(route('profil-ski')); ?>"
                            class="dropdown-item <?php echo e(request()->routeIs('profil-ski') ? 'active' : ''); ?>">Profil
                            SKI</a>
                        <a href="<?php echo e(route('panduan-ski')); ?>"
                            class="dropdown-item <?php echo e(request()->routeIs('panduan-ski') ? 'active' : ''); ?>">Panduan
                            SKI</a>
                        <a href="<?php echo e(route('laporan-ski')); ?>"
                            class="dropdown-item <?php echo e(request()->routeIs('laporan-ski') ? 'active' : ''); ?>">Laporan
                            SKI</a>
                        <a href="<?php echo e(route('sk-dan-sop')); ?>"
                            class="dropdown-item <?php echo e(request()->routeIs('sk-dan-sop') ? 'active' : ''); ?>">SK & SOP</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Layanan</a>
                    <div class="dropdown-menu m-0">
                        <a href="<?php echo e(route('maklumat-pelayanan')); ?>"
                            class="dropdown-item <?php echo e(request()->routeIs('maklumat-pelayanan') ? 'active' : ''); ?>">Maklumat
                            Pelayanan</a>
                        <a href="<?php echo e(route('standar-pelayanan')); ?>"
                            class="dropdown-item <?php echo e(request()->routeIs('standar-pelayanan') ? 'active' : ''); ?>">Standar
                            Pelayanan</a>
                        <a href="<?php echo e(route('sinkarkes')); ?>"
                            class="dropdown-item <?php echo e(request()->routeIs('sinkarkes') ? 'active' : ''); ?>">Sinkarkes</a>
                        <a href="<?php echo e(route('formulir-permohonan-layanan')); ?>"
                            class="dropdown-item <?php echo e(request()->routeIs('formulir-permohonan-layanan') ? 'active' : ''); ?>"
                            class="dropdown-item">Formulir Permohonan Layanan</a>
                        <a href="<?php echo e(route('posein-aza')); ?>"
                            class="dropdown-item <?php echo e(request()->routeIs('posein-aza') ? 'active' : ''); ?>"
                            class="dropdown-item">POSEin Aza</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pengaduan</a>
                    <div class="dropdown-menu m-0">
                        <a href="<?php echo e(route('tentang-wbk-wbbm')); ?>"
                            class="dropdown-item <?php echo e(request()->routeIs('tentang-wbk-wbbm') ? 'active' : ''); ?>"
                            class="dropdown-item">Tentang WBK & WBBM</a>
                        <a href="<?php echo e(route('wbs')); ?>"
                            class="dropdown-item <?php echo e(request()->routeIs('wbs') ? 'active' : ''); ?>"
                            class="dropdown-item">Whistleblowing</a>
                        <a href="<?php echo e(route('benturan-kepentingan')); ?>"
                            class="dropdown-item <?php echo e(request()->routeIs('benturan-kepentingan') ? 'active' : ''); ?>"
                            class="dropdown-item">Benturan Kepentingan</a>
                        <a href="<?php echo e(route('pengaduan-layanan-masyarakat')); ?>"
                            class="dropdown-item <?php echo e(request()->routeIs('pengaduan-layanan-masyarakat') ? 'active' : ''); ?>">Pengaduan
                            Layanan Masyarakat</a>
                        <a href="<?php echo e(route('span-lapor')); ?>"
                            class="dropdown-item <?php echo e(request()->routeIs('span-lapor') ? 'active' : ''); ?>">LAPOR SP4N</a>
                        <a href="<?php echo e(route('gol-kpk')); ?>"
                            class="dropdown-item <?php echo e(request()->routeIs('gol-kpk') ? 'active' : ''); ?>">Gol KPK</a>
                        <a href="<?php echo e(route('unit-pengendalian-gratifikasi')); ?>"
                            class="dropdown-item <?php echo e(request()->routeIs('unit-pengendalian-gratifikasi') ? 'active' : ''); ?>">Unit
                            Pengendalian Gratifikasi UPG</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Informasi Publik</a>
                    <div class="dropdown-menu m-0">
                        <a href="<?php echo e(route('bedesut')); ?>"
                            class="dropdown-item <?php echo e(request()->routeIs('bedesut') ? 'active' : ''); ?>">BEDESUT</a>
                        <a href="<?php echo e(route('berita')); ?>"
                            class="dropdown-item <?php echo e(request()->routeIs('berita') ? 'active' : ''); ?>">Berita</a>
                        <a href="<?php echo e(route('ppid')); ?>"
                            class="dropdown-item <?php echo e(request()->routeIs('ppid') ? 'active' : ''); ?>">PPID</a>
                        <a href="<?php echo e(route('artikel')); ?>"
                            class="dropdown-item <?php echo e(request()->routeIs('artikel') ? 'active' : ''); ?>">Artikel</a>
                        <a href="<?php echo e(route('pengumuman')); ?>"
                            class="dropdown-item <?php echo e(request()->routeIs('pengumuman') ? 'active' : ''); ?>">Pengumuman</a>
                        <a href="<?php echo e(route('survey-kepuasan-masyarakat')); ?>"
                            class="dropdown-item <?php echo e(request()->routeIs('survey-kepuasan-masyarakat') ? 'active' : ''); ?>">Survey
                            Kepuasan Masyarakat</a>
                        <a href="<?php echo e(route('sop')); ?>"
                            class="dropdown-item <?php echo e(request()->routeIs('sop') ? 'active' : ''); ?>">SOP</a>
                        <a href="<?php echo e(route('elibrary')); ?>"
                            class="dropdown-item <?php echo e(request()->routeIs('elibrary') ? 'active' : ''); ?>">E LIBRARY</a>
                        <a href="<?php echo e(route('akuntabilitas')); ?>"
                            class="dropdown-item <?php echo e(request()->routeIs('akuntabilitas') ? 'active' : ''); ?>">Akuntabilitas</a>
                    </div>
                </div>

                <a href="<?php echo e(route('kontak-kami')); ?>"
                    class="nav-item nav-link <?php echo e(request()->routeIs('kontak-kami') ? 'active' : ''); ?>">Kontak Kami</a>
            </div>
            <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal"
                data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
        </div>
    </nav>

    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">

            <?php $__currentLoopData = $carousel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="carousel-item <?php echo e($key == 0 ? 'active' : ''); ?>">
                    <img class="w-100" src="<?php echo e(asset('storage/' . $item->path)); ?>" alt="Image">

                    <?php if($item->text): ?>
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <h1 class="display-1 text-white mb-md-4 animated zoomIn">
                                    <?php echo e($item->text); ?>

                                </h1>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

</div>
<?php /**PATH D:\Koding\bkkpontianak\resources\views/includes/frontend/navbar.blade.php ENDPATH**/ ?>