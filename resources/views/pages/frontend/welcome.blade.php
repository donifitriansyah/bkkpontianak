@extends('layouts.app')
@section('title')
    BKK Kelas I Pontianak
@endsection
@section('content')
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">

                {{-- Tentang Kami --}}
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-3">
                        <h5 class="fw-bold text-primary text-uppercase">Tentang Kami</h5>
                        <h1 class="mb-0">Balai Kekarantinaan Kesehatan Kelas I Pontianak</h1>
                    </div>

                    {!! $tentang_kami->text !!}
                </div>



                {{-- Berita --}}
                <div class="col-lg-5">
                    <div class="card shadow wow zoomIn" data-wow-delay="0.9s">

                        <div id="beritaCarousel" class="carousel slide berita-carousel" data-bs-ride="carousel"
                            data-bs-interval="5000">

                            <!-- Indicators -->


                            <!-- Isi -->
                            <div class="carousel-inner">
                                @foreach ($berita as $key => $item)
                                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                        <div class="card-body berita-body">

                                            <img src="{{ asset('storage/' . $item->thumbnail) }}" class="berita-img">

                                            <h6 class="fw-bold">{{ $item->judul }}</h6>

                                            <p class="small text-muted">
                                                {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}
                                            </p>

                                            <p class="berita-text">
                                                {{ Str::limit(strip_tags($item->konten), 120) }}
                                            </p>

                                            <a href="{{ route('user-berita.show', $item->slug) }}"
                                                class="btn btn-sm btn-primary">
                                                Baca Selengkapnya
                                            </a>

                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <!-- Tombol -->
                            <button class="berita-prev" type="button" data-bs-target="#beritaCarousel"
                                data-bs-slide="prev">
                                ‹
                            </button>

                            <button class="berita-next" type="button" data-bs-target="#beritaCarousel"
                                data-bs-slide="next">
                                ›
                            </button>

                        </div>

                    </div>
                </div>



            </div>

            {{-- <div class="col-lg-5" style="; border-radius: 8px;">
                <div class="card shadow wow zoomIn" data-wow-delay="0.9s">
                    <div class="card-body">
                        <!-- Carousel -->
                        <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel" style="">
                            <div class="carousel-inner">

                                @foreach ($berita as $index => $b)
                                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                        <div class="news-box">
                                            <div class="thumbnail-container text-center">
                                                <img class="thumbnail-img" src="{{ asset('storage/' . $b->thumbnail) }}"
                                                    alt="{{ $b->judul }}">
                                            </div>

                                            <div class="news-content">
                                                <h5 class="fw-bold">{{ Str::limit(strip_tags($b->judul), 100) }}</h5>

                                                <p class="text-muted">
                                                    {{ Str::limit(strip_tags($b->konten), 130) }}
                                                </p>

                                                <div class="row d-flex justify-content-between align-items-center">
                                                    <span class="text-muted" style="font-size: 12px">
                                                        <i class="fa fa-calendar"
                                                            style="margin-right: 8px; font-size: 12px"></i>
                                                        {{ $b->tanggal?->translatedFormat('d F Y') ?? '-' }}

                                                    </span>

                                                    <a href="{{ route('user-berita.show', $b->slug) }}"
                                                        class="btn btn-link">
                                                        Baca selengkapnya →
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>

                            <!-- Controls -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>



                    </div>

                </div>
            </div> --}}
        </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
    {{-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Layanan Kami</h5>
                <h1 class="mb-0">STANDAR PELAYANAN BALAI KEKARANTINAAN KESEHATAN KELAS I PONTIANAK</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-shield-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">STANDAR PELAYANAN VAKSINASI INTERNASIONAL DAN PENERBITAN INTERNATIONAL
                            CERTIFICATE VACCINATION (ICV)</h4>
                        <a class="btn btn-lg btn-primary rounded" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">STANDAR PELAYANAN VAKSINASI INTERNASIONAL
                                    DAN PENERBITAN INTERNATIONAL CERTIFICATE VACCINATION (ICV)</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="image-container">
                                    <h5>Dasar Hukum</h5>
                                    <ul>
                                        <li>Undang-Undang Nomor 25 Tahun 2009 tentang Pelayanan Publik</li>
                                        <li>Undang-Undang Nomor 17 Tahun 2023 tentang Kesehatan</li>
                                        <li>Peraturan Pemerintah RI Nomor 64 Tahun 2019 tentang Jenis dan Tarif atas Jenis
                                            Penerimaan Negara Bukan Pajak (PNBP) yang berlaku pada Kementerian Kesehatan
                                        </li>
                                        <li>Peraturan Menteri PAN & RB Nomor 15 Tahun 2014 tentang Standar Pelayanan Publik
                                        </li>
                                        <li>Peraturan Menteri Kesehatan RI Nomor 23 Tahun 2018 tentang Pelayanan dan
                                            Penerbitan Sertifikat Vaksinasi Internasional</li>
                                        <li>Peraturan Menteri Kesehatan RI Nomor 9 Tahun 2023 tentang Klasifikasi Unit
                                            Pelaksana Teknis Bidang Kekarantinaan Kesehatan</li>
                                        <li>Peraturan Menteri Kesehatan RI Nomor 10 Tahun 2023 tentang Organisasi dan Tata
                                            Kerja Unit Pelaksana Teknis Bidang Kekarantinaan Kesehatan</li>
                                        <li>Peraturan Menteri Keuangan RI Nomor 45 Tahun 2024 tentang Jenis dan Tarif Atas
                                            Jenis Penerimaan Negara Bukan Pajak Yang Bersifat Volatil dan Kebutuhan Mendesak
                                            Yang Berlaku Pada Kementerian Kesehatan</li>
                                        <li>Peraturan Direktorat Jenderal P2P Nomor SR.03.04/II/2745/2018 tentang Tata Cara
                                            Penerbitan Sertifikat Vaksinasi Internasional</li>
                                        <li>SE Kepala Pusat Kesehatan Haji Nomor HK.02.03/A.X.1/231/2025 tentang Pelaksanaan
                                            Vaksinasi Bagi Jamaah Haji dan Umrah</li>
                                        <li>SE Plt Direktur Jenderal Penanggulangan Penyakit Nomor SR.02.04/C/173/2025
                                            tentang Penerapan electronic Certificate of Vaccination or Prophylaxis (eICV)
                                            atau Sertifikat Vaksinasi Internasional atau Profilaksis secara Elektronik</li>
                                        <li>Standar Operasional Prosedur Nasional Kegiatan Kantor Kesehatan Pelabuhan di
                                            Pintu Masuk Negara Tahun 2009 Direktorat Jenderal PP & PL Departemen Kesehatan
                                            Republik Indonesia</li>
                                        <li>International Health Regulations (IHR) Tahun 2005</li>
                                    </ul>
                                    <h5>Persyaratan</h5>
                                    <ul>
                                        <li>Scan paspor dan melakukan registrasi online melalui alamat website:
                                            <a href="https://sinkarkes.kemkes.go.id"
                                                target="_blank">https://sinkarkes.kemkes.go.id</a> melalui komputer atau
                                            smartphone
                                        </li>
                                        <li>Apabila hasil scan paspor kurang jelas, membawa fotokopi paspor (Minimal
                                            nama 2 suku kata)</li>
                                        <li>Menunjukkan KTP asli</li>
                                        <li>Nomor handphone/WA dan alamat email yang aktif</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-chart-pie text-white"></i>
                        </div>
                        <h4 class="mb-3">STANDAR PELAYANAN IZIN LAIK TERBANG/LAYAR</h4>
                        <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed
                        </p>
                        <a class="btn btn-lg btn-primary rounded" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">STANDAR PELAYANAN IZIN LAIK TERBANG/LAYAR
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Gambar yang akan ditampilkan dengan zoom -->
                                <div class="image-container">
                                    <img src="{{ asset('frontend/img/spvaksininternasional.png') }}"
                                        alt="Image Description" class="img-fluid">
                                    <img class="zoom-image" src="{{ asset('frontend/img/.png') }}" alt="Image Description"
                                        class="img-fluid">
                                </div>
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-code text-white"></i>
                        </div>
                        <h4 class="mb-3">STANDAR PELAYANAN SURAT KETERANGAN PENGUJIAN SEHAT</h4>
                        <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed
                        </p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fab fa-android text-white"></i>
                        </div>
                        <h4 class="mb-3">STANDAR PELAYANAN PENERBITAN SHIP SANITATION CONTROL EXEMPTION CERTIFICATE/ SHIP
                            SANITATION CONTROL CERTIFICATE (SSCEC/SSCC)</h4>
                        <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed
                        </p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-search text-white"></i>
                        </div>
                        <h4 class="mb-3">STANDAR PELAYANAN PENERBITAN CERTIFICATE OF PRATIQUE (COP)</h4>
                        <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed
                        </p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-search text-white"></i>
                        </div>
                        <h4 class="mb-3">STANDAR PELAYANAN PENERBITAN BUKU KESEHATAN KAPAL (HEALTH BOOK)</h4>
                        <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed
                        </p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-search text-white"></i>
                        </div>
                        <h4 class="mb-3">STANDAR PELAYANAN PENGAWASAN OBAT DAN ALAT KESEHATAN DI KAPAL</h4>
                        <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed
                        </p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-search text-white"></i>
                        </div>
                        <h4 class="mb-3">STANDAR PELAYANAN EVAKUASI MEDIK DARI BANDARA/PELBUHAN KE RUMAH SAKIT RUJUKAN
                        </h4>
                        <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed
                        </p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-search text-white"></i>
                        </div>
                        <h4 class="mb-3">STANDAR PELAYANAN IZIN ANGKUT ORANG SAKIT</h4>
                        <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed
                        </p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-search text-white"></i>
                        </div>
                        <h4 class="mb-3">STANDAR PELAYANAN PENGAWASAN LALU LINTAS JENAZAH</h4>
                        <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed
                        </p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-search text-white"></i>
                        </div>
                        <h4 class="mb-3">STANDAR PELAYANAN PENGAWASAN TEMPAT PENGOLAHAN PANGAN DALAM RANGKA PENERBITAN
                            LABEL PENGAWASAN MELALUI ONLINE SINGLE SUBMISSION (OSS)</h4>
                        <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed
                        </p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-search text-white"></i>
                        </div>
                        <h4 class="mb-3">STANDAR PELAYANAN PENGAWASAN TEMPAT PENGOLAHAN PANGAN DALAM RANGKA PENERBITAN
                            SLHS MELALUI ONLINE SINGLE SUBMISSION (OSS)</h4>
                        <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed
                        </p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-search text-white"></i>
                        </div>
                        <h4 class="mb-3">STANDAR PELAYANAN PENGAWASAN LALU LINTAS OMKABA (OBAT, MAKANAN, KOSMETIK, ALAT
                            KESEHATAN, DAN BAHAN ADIKTIF) EKSPORT</h4>
                        <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed
                        </p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-search text-white"></i>
                        </div>
                        <h4 class="mb-3">STANDAR PELAYANAN PENGAWASAN PENYEDIAAN AIR BERSIH DALAM RANGKA PENERBITAN
                            SETIFIKAT AIR BERSIH
                        </h4>
                        <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed
                        </p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div
                        class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                        <h3 class="text-white mb-3">STANDAR PELAYANAN PENERBITAN PORT HEALTH QUARANTINE CLEARANCE (PHQC)</h3>
                        <p class="text-white mb-3">Clita ipsum magna kasd rebum at ipsum amet dolor justo dolor est magna
                            stet eirmod</p>
                        <h2 class="text-white mb-0">+012 345 6789</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Layanan Kami</h5>
                <h1 class="mb-0">STANDAR PELAYANAN BALAI KEKARANTINAAN KESEHATAN KELAS I PONTIANAK</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">

                    </div>
                </div>

            </div>
        </div>
    </div> --}}
    {{-- <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-title text-center position-relative pb-3 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Layanan Kami</h5>
                <h1 class="mb-0">STANDAR PELAYANAN BALAI KEKARANTINAAN KESEHATAN KELAS I PONTIANAK</h1>
            </div>
            <div class="service-item rounded align-items-center justify-content-center text-center p-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Standar Pelayanan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>STANDAR PELAYANAN VAKSINASI INTERNASIONAL DAN PENERBITAN INTERNATIONAL CERTIFICATE
                                VACCINATION (ICV)</td>
                            <td class="action-btns">
                                <a href="{{ route('detail') }}" class="btn btn-warning btn-sm">Detail</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>STANDAR PELAYANAN IZIN LAIK TERBANG/LAYAR</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>STANDAR PELAYANAN SURAT KETERANGAN PENGUJIAN SEHAT</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>STANDAR PELAYANAN PENERBITAN SHIP SANITATION CONTROL EXEMPTION CERTIFICATE (SSCEC)/ SHIP
                                SANITATION CONTROL CERTIFICATE (SSCC)</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>STANDAR PELAYANAN PENERBITAN CERTIFICATE OF PRATIQUE (COP)</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>STANDAR PELAYANAN PENERBITAN BUKU KESEHATAN KAPAL (HEALTH BOOK)</td>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>STANDAR PELAYANAN PENGAWASAN OBAT DAN ALAT KESEHATAN DI KAPAL</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>STANDAR PELAYANAN EVAKUASI MEDIK DARI BANDARA/PELBUHAN KE RUMAH SAKIT RUJUKAN</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>STANDAR PELAYANAN IZIN ANGKUT ORANG SAKIT</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>STANDAR PELAYANAN PENGAWASAN LALU LINTAS JENAZAH</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>STANDAR PELAYANAN PENGAWASAN TEMPAT PENGOLAHAN PANGAN DALAM RANGKA PENERBITAN LABEL
                                PENGAWASAN MELALUI ONLINE SINGLE SUBMISSION (OSS)</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>STANDAR PELAYANAN PENGAWASAN TEMPAT PENGOLAHAN PANGAN DALAM RANGKA PENERBITAN SLHS
                                MELALUI ONLINE SINGLE SUBMISSION (OSS)</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>STANDAR PELAYANAN PENGAWASAN LALU LINTAS OMKABA (OBAT, MAKANAN, KOSMETIK, ALAT
                                KESEHATAN, DAN BAHAN ADIKTIF) EKSPORT</td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>STANDAR PELAYANAN PENGAWASAN PENYEDIAAN AIR BERSIH DALAM RANGKA PENERBITAN SETIFIKAT AIR
                                BERSIH</td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>STANDAR PELAYANAN PENERBITAN PORT HEALTH QUARANTINE CLEARANCE (PHQC)</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div> --}}

    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-title text-center position-relative pb-3 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Layanan Kami</h5>
                <h1 class="mb-0">Pelayanan Balai Kekarantinaan Kesehatan Kelas I Pontianak</h1>
            </div>
            <div class="row g-4 mt-3">

                <!-- 1 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-card shadow">
                        <i class="fa fa-syringe service-icon"></i>
                        <h5>Vaksinasi Internasional & ICV</h5>
                        <a href="{{ route('detail') }}" class="btn btn-kemenkes btn-sm mt-3 text-white">Detail</a>
                    </div>
                </div>

                <!-- 2 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-card shadow">
                        <i class="fa fa-plane-departure service-icon"></i>
                        <h5>Izin Laik Terbang / Layar</h5>
                        <a href="#" class="btn btn-kemenkes btn-sm mt-3 text-white">Detail</a>
                    </div>
                </div>

                <!-- 3 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-card shadow">
                        <i class="fa fa-notes-medical service-icon"></i>
                        <h5>Surat Keterangan Pengujian Sehat</h5>
                        <a href="#" class="btn btn-kemenkes btn-sm mt-3 text-white">Detail</a>
                    </div>
                </div>

                <!-- 4 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-card shadow">
                        <i class="fa fa-ship service-icon"></i>
                        <h5>Ship Sanitation Certificate (SSCEC / SSCC)</h5>
                        <a href="#" class="btn btn-kemenkes btn-sm mt-3 text-white">Detail</a>
                    </div>
                </div>

                <!-- 5 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-card shadow">
                        <i class="fa fa-file-signature service-icon"></i>
                        <h5>Certificate of Pratique (COP)</h5>
                        <a href="#" class="btn btn-kemenkes btn-sm mt-3 text-white">Detail</a>
                    </div>
                </div>

                <!-- 6 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-card shadow">
                        <i class="fa fa-book-medical service-icon"></i>
                        <h5>Buku Kesehatan Kapal (Health Book)</h5>
                        <a href="#" class="btn btn-kemenkes btn-sm mt-3 text-white">Detail</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-card shadow">
                        <i class="fa fa-medkit service-icon"></i>
                        <h5>Pengawasan Obat & Alat Kesehatan di Kapal</h5>
                        <a href="#" class="btn btn-kemenkes btn-sm mt-3 text-white">Detail</a>

                    </div>
                </div>

                <!-- 8 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="service-card p-4 text-center shadow rounded h-100">
                        <i class="fa fa-ambulance service-icon "></i>
                        <h5>Evakuasi Medik dari Bandara/Pelabuhan ke Rumah Sakit</h5>
                        <a href="#" class="btn btn-kemenkes btn-sm mt-3 text-white">Detail</a>

                    </div>
                </div>

                <!-- 9 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                    <div class="service-card shadow">
                        <i class="fa fa-plus-square service-icon"></i>
                        <h5>Izin Angkut Orang Sakit</h5>
                        <a href="#" class="btn btn-kemenkes btn-sm mt-3 text-white">Detail</a>


                    </div>
                </div>

                <!-- 10 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.10s">
                    <div class="service-card shadow">
                        <i class="fa fa-road service-icon"></i>
                        <h5>Pengawasan Lalu Lintas Jenazah</h5>
                        <a href="#" class="btn btn-kemenkes btn-sm mt-3 text-white">Detail</a>


                    </div>
                </div>

                <!-- 11 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.11s">
                    <div class="service-card shadow">
                        <i class="fa fa-utensils service-icon"></i>
                        <h5>Pengawasan Tempat Pengolahan Pangan (Label OSS)</h5>
                        <a href="#" class="btn btn-kemenkes btn-sm mt-3 text-white">Detail</a>


                    </div>
                </div>

                <!-- 12 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.12s">
                    <div class="service-card shadow">
                        <i class="fa fa-industry service-icon"></i>
                        <h5>Pengawasan TPP Penerbitan SLHS (OSS)</h5>
                        <a href="#" class="btn btn-kemenkes btn-sm mt-3 text-white">Detail</a>


                    </div>
                </div>

                <!-- 13 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.13s">
                    <div class="service-card shadow">
                        <i class="fa fa-boxes service-icon"></i>
                        <h5>Pengawasan Lalu Lintas OMKABA Ekspor</h5>
                        <a href="#" class="btn btn-kemenkes btn-sm mt-3 text-white">Detail</a>


                    </div>
                </div>

                <!-- 14 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.14s">
                    <div class="service-card shadow">
                        <i class="fa fa-tint service-icon"></i>
                        <h5>Pengawasan Penyediaan Air Bersih (Sertifikat Air Bersih)</h5>
                        <a href="#" class="btn btn-kemenkes btn-sm mt-3 text-white">Detail</a>


                    </div>
                </div>

                <!-- 15 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.15s">
                    <div class="service-card shadow">
                        <i class="fa fa-id-card service-icon" aria-hidden="true"></i>
                        <h5>Penerbitan Port Health Quarantine Clearance (PHQC)</h5>
                        <a href="#" class="btn btn-kemenkes btn-sm mt-3 text-white">Detail</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Pricing Plan Start -->
    {{-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Pricing Plans</h5>
                <h1 class="mb-0">We are Offering Competitive Prices for Our Clients</h1>
            </div>
            <div class="row g-0">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">Basic Plan</h4>
                            <small class="text-uppercase">For Small Size Business</small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>49.00<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i
                                    class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i
                                    class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i
                                    class="fa fa-times text-danger pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Cross-browser Support</span><i
                                    class="fa fa-times text-danger pt-1"></i></div>
                            <a href="" class="btn btn-primary py-2 px-4 mt-4">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="bg-white rounded shadow position-relative" style="z-index: 1;">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">Standard Plan</h4>
                            <small class="text-uppercase">For Medium Size Business</small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>99.00<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i
                                    class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i
                                    class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i
                                    class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Cross-browser Support</span><i
                                    class="fa fa-times text-danger pt-1"></i></div>
                            <a href="" class="btn btn-primary py-2 px-4 mt-4">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">Advanced Plan</h4>
                            <small class="text-uppercase">For Large Size Business</small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>149.00<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i
                                    class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i
                                    class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i
                                    class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Cross-browser Support</span><i
                                    class="fa fa-check text-primary pt-1"></i></div>
                            <a href="" class="btn btn-primary py-2 px-4 mt-4">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Pricing Plan End -->


    <!-- Quote Start -->
    {{-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Request A Quote</h5>
                        <h1 class="mb-0">Need A Free Quote? Please Feel Free to Contact Us</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Reply within 24 hours</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>24 hrs telephone support
                            </h5>
                        </div>
                    </div>
                    <p class="mb-4">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et
                        dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et
                        dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus
                        sed et. Takimata takimata sanctus sed.</p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+012 345 6789</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        <form>
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Name"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Your Email"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <select class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 2</option>
                                        <option value="3">Service 3</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0" rows="3" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Request A Quote</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Quote End -->


    <!-- Testimonial Start -->
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                {{-- <h5 class="fw-bold text-primary text-uppercase">Testimonial</h5> --}}
                <h1 class="mb-0">Indeks Kepuasan Masyarakat</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">

                <div class="testimonial-item bg-light my-4 text-center p-4">

                    <!-- Gambar Besar -->
                    <div class="ikm-img mb-3">
                        <img src="{{ asset('frontend/img/ikmtriwulan1.png') }}" alt="" class="img-fluid rounded">
                    </div>

                    <!-- Judul -->
                    <h5 class="text-primary mb-2">
                        Indeks Kepuasan Masyarakat
                    </h5>

                    <!-- Sub Judul / Tahun -->
                    <small class="text-muted d-block mb-3">
                        Tahun 2025
                    </small>

                    <!-- Deskripsi -->
                    <p class="mb-0">
                        Nilai IKM menunjukkan tingkat kepuasan masyarakat terhadap pelayanan publik.
                    </p>

                </div>

            </div>
            <div class="container my-5">
                <div class="card rounded-5 shadow-lg overflow-hidden">

                    <div class="card-header bg-primary text-white border-0">
                        <h5 class="mb-0 fw-semibold text-white">
                            Form Survey Kepuasan Masyarakat
                        </h5>
                    </div>

                    <div class="card-body ikm-content">
                        {{-- <p>
                            Sebagai wujud komitmen tersebut, kami ingin mengetahui tingkat kepuasan Anda
                            terhadap pelayanan yang kami berikan. Oleh karena itu, kami mengundang Anda
                            untuk berpartisipasi dalam survei
                            <strong>Indeks Kepuasan Masyarakat (IKM) BKK Pontianak</strong>.
                        </p>

                        <h5 class="mt-4">Apa itu IKM?</h5>
                        <p>
                            IKM adalah tolak ukur untuk mengetahui tingkat kepuasan masyarakat terhadap
                            pelayanan publik. Hasil survei digunakan sebagai bahan evaluasi dan perbaikan
                            kualitas pelayanan BKK Pontianak.
                        </p>

                        <h5 class="mt-4">Cara mengikuti survei</h5>
                        <ol class="ps-3">
                            <li>
                                Kunjungi
                                <a href="https://www.kkppontianak.net/" target="_blank">www.kkppontianak.net</a>
                            </li>
                            <li>Klik banner <strong>“Survei IKM BKK Pontianak”</strong></li>
                            <li>Baca petunjuk pengisian</li>
                            <li>Jawab dengan jujur dan objektif</li>
                            <li>Klik <strong>Submit</strong></li>
                        </ol>

                        <h5 class="mt-4">Manfaat mengikuti survei</h5>
                        <ul class="ps-3">
                            <li>Meningkatkan kualitas pelayanan</li>
                            <li>Memberikan masukan yang berharga</li>
                            <li>Meningkatkan transparansi dan akuntabilitas</li>
                        </ul>

                        <p class="fw-semibold mt-3">
                            Terima kasih atas partisipasi Anda.
                        </p> --}}
                        {!! $fskm->text !!}
                    </div>

                    <div class="card-footer bg-white border-0 text-center">
                        <a href="{{ $fskm->link }}"
                            target="_blank" class="btn btn-primary btn-lg px-5 rounded-pill">
                            Isi Survey IKM
                        </a>
                    </div>

                </div>
            </div>


        </div>

    </div>
    <!-- Testimonial End -->


    <!-- Team Start -->
    {{-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Team Members</h5>
                <h1 class="mb-0">Professional Stuffs Ready to Help Your Business</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Full Name</h4>
                            <p class="text-uppercase m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Full Name</h4>
                            <p class="text-uppercase m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Full Name</h4>
                            <p class="text-uppercase m-0">Designation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Team End -->


    <!-- Blog Start -->
    {{-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Latest Blog</h5>
                <h1 class="mb-0">Read The Latest Articles from Our Blog Post</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/blog-1.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">Web Design</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>
                            <h4 class="mb-3">How to build a website</h4>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/blog-2.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">Web Design</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>
                            <h4 class="mb-3">How to build a website</h4>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/blog-3.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">Web Design</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>
                            <h4 class="mb-3">How to build a website</h4>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Blog Start -->

    <!-- Features Start -->
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Media Informasi</h5>
                <h1 class="mb-0">Terhubung dengan sosial media kami.</h1>
            </div>
            <div class="row g-5 justify-content-center">
                <!-- Instagram Card -->
                <div class="col-lg-2 col-md-4 col-6">
                    <a href="https://www.instagram.com/bkk.pontianak/" target="_blank"
                        class="card-sosmed shadow text-center instagram-card">
                        <i class="fab fa-instagram fa-3x"></i>
                        <p>Instagram</p>
                    </a>
                </div>

                <!-- Tiktok Card -->
                <div class="col-lg-2 col-md-4 col-6">
                    <a href="https://www.tiktok.com/@bkkpontianak?is_from_webapp=1&sender_device=pc" target="_blank"
                        class="card-sosmed shadow text-center tiktok-card">
                        <i class="fab fa-tiktok fa-3x"></i>
                        <p>Tiktok</p>
                    </a>
                </div>

                <!-- Whatsapp Card -->
                <div class="col-lg-2 col-md-4 col-6">
                    <a href="https://www.youtube.com/channel/UCXBSuR2BWc9FQ0xRa8G-1rQ/featured" target="_blank"
                        class="card-sosmed shadow text-center youtube-card">
                        <i class="fab fa-youtube fa-3x"></i>
                        <p>Youtube</p>
                    </a>
                </div>
                <!-- Facebook Card -->
                <div class="col-lg-2 col-md-4 col-6">
                    <a href="https://www.facebook.com/Admin.KKP.Pontianak" target="_blank"
                        class="card-sosmed shadow text-center facebook-card">
                        <i class="fab fa-facebook fa-3x"></i>
                        <p>Facebook</p>
                    </a>
                </div>

                <!-- Twitter Card -->
                <div class="col-lg-2 col-md-4 col-6">
                    <a href="https://x.com/kkp_pontianak target="_blank"
                        class="card-sosmed shadow text-center twitter-card">
                        <i class="fab fa-twitter fa-3x"></i>
                        <p>Twitter</p>
                    </a>
                </div>
            </div>
            <div class="mt-5">
                <div class="row">
                    <!-- Instagram Section -->
                    <div class="col-lg-6">
                        <h5 class="mb-3">Postingan Instagram Terbaru</h5>
                        <blockquote class="instagram-media"
                            data-instgrm-permalink="https://www.instagram.com/bkkpontianak/?utm_source=ig_embed&utm_campaign=loading"
                            data-instgrm-version="14"
                            style="background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                            <div style="padding:16px;">
                                <a href="https://www.instagram.com/bkkpontianak/?utm_source=ig_embed&utm_campaign=loading"
                                    style="background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                                    target="_blank">
                                    <div style="display: flex; flex-direction: row; align-items: center;">
                                        <div
                                            style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;">
                                        </div>
                                        <div
                                            style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                            <div
                                                style="background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;">
                                            </div>
                                            <div
                                                style="background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding: 19% 0;"></div>
                                    <div style="display:block; margin:0 auto 12px; width:50px;">
                                        <svg width="50px" height="50px" viewBox="0 0 60 60"
                                            xmlns="https://www.w3.org/2000/svg"
                                            xmlns:xlink="https://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                                    <g>
                                                        <path
                                                            d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                                                        </path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div style="padding-top: 8px;">
                                        <div
                                            style="color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                            View this profile on Instagram
                                        </div>
                                    </div>
                                    <div style="padding: 12.5% 0;"></div>
                                    <div
                                        style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                        <div>
                                            <div
                                                style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);">
                                            </div>
                                            <div
                                                style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;">
                                            </div>
                                            <div
                                                style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);">
                                            </div>
                                        </div>
                                        <div style="margin-left: 8px;">
                                            <div
                                                style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;">
                                            </div>
                                            <div
                                                style="width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)">
                                            </div>
                                        </div>
                                        <div style="margin-left: auto;">
                                            <div
                                                style="width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);">
                                            </div>
                                            <div
                                                style="background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);">
                                            </div>
                                            <div
                                                style="width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);">
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                        <div
                                            style="background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;">
                                        </div>
                                        <div
                                            style="background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </blockquote>
                        <script async src="//platform.instagram.com/en_US/embeds.js"></script>
                    </div>
                    <!-- TikTok Section -->
                    <div class="col-lg-6">
                        <h5>Postingan Tiktok Terbaru</h5>
                        <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@bkkpontianak"
                            data-unique-id="bkkpontianak" data-embed-type="creator"
                            style="max-width: 780px; min-width: 288px;">
                            <section>
                                <a target="_blank"
                                    href="https://www.tiktok.com/@bkkpontianak?refer=creator_embed">@bkkpontianak</a>
                            </section>
                        </blockquote>
                        <script async src="https://www.tiktok.com/embed.js"></script>
                    </div>


                </div>
            </div>
            <div class="mt-2">
                <div class="col-lg-5">
                    <h5 class="mb-3">Video Youtube Terbaru</h5>
                </div>

                <!-- Elfsight YouTube Gallery | Untitled YouTube Gallery -->
                {{-- <script src="https://elfsightcdn.com/platform.js" async></script>
                <div class="elfsight-app-a3e212bf-c9c3-4df6-aca2-75c5f0cee8ca" data-elfsight-app-lazy></div> --}}

                <!-- Place <div> tag where you want the feed to appear -->
                <!-- Place <div> tag where you want the feed to appear -->
                <div id="curator-feed-default-feed-layout"><a href="https://curator.io" target="_blank"
                        class="crt-logo crt-tag"></a></div>

                <!-- The Javascript can be moved to the end of the html page before the </body> tag -->



                {{-- <div class="row mt-3">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card-youtube-container">
                            <iframe class="card-youtube"
                                src="https://www.youtube.com/embed/rx_MKOQgl2E?si=VDu5UxthbtdsJp6t"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card-youtube-container">
                            <iframe class="card-youtube"
                                src="https://www.youtube.com/embed/rx_MKOQgl2E?si=VDu5UxthbtdsJp6t"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card-youtube-container">
                            <iframe class="card-youtube"
                                src="https://www.youtube.com/embed/rx_MKOQgl2E?si=VDu5UxthbtdsJp6t"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
    <!-- Features Start -->

    <!-- Vendor Start -->
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="{{ asset('frontend/img/vendor-1.jpg') }}" alt="">
                    <img src="frontend/img/vendor-2.jpg" alt="">
                    <img src="frontend/img/vendor-3.jpg" alt="">
                    <img src="frontend/img/vendor-4.jpg" alt="">
                    <img src="frontend/img/vendor-5.jpg" alt="">
                    <img src="frontend/img/vendor-6.jpg" alt="">
                    <img src="frontend/img/vendor-7.jpg" alt="">
                    <img src="frontend/img/vendor-8.jpg" alt="">
                    <img src="frontend/img/vendor-9.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->
@endsection
