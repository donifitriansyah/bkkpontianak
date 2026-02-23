@extends('layouts.detail')
@section('title')
    SOP
@endsection
@section('title-navbar')
    STANDAR OPERASIONAL PROSEDUR
@endsection
@section('content')
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            {{-- <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h1 class="mb-0">Artikel</h1>
            </div> --}}
            <div class="row">
                <!-- Misi Card Gambar Dikiri-->
                {{-- <div class="col-lg-3 mb-4">
                    <div class="service-card-custom shadow">
                        <div class="service-card-inner">
                            <div class="service-card-img">
                                <img src="{{ asset('frontend/img/goal.png') }}" alt="icon">
                            </div>
                            <div class="service-card-text">
                                <h6 class="text-center">
                                    DASHBOARD INTERAKTIF - SITUASI KHUSUS KEDATANGAN DAN KEBERANGKATAN HAJI
                                </h6>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="col-lg-3 mb-4">
                    <div class="service-card haji-card shadow">
                        <div class="haji-card-img">
                            <img src="{{ asset('frontend/img/tes1.png') }}" alt="Haji">
                        </div>
                        <div class="haji-card-body">
                            <h6 class="text-center">
                                Pengumuman Kelulusan Seleksi Penerimaan Tenaga Perbantuan Covid-19 di Kantor Kesehatan
                                Provinsi Kalimantan Barat Tahun 2022
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="service-card haji-card shadow">
                        <div class="haji-card-img">
                            <img src="{{ asset('frontend/img/goal.png') }}" alt="Haji">
                        </div>
                        <div class="haji-card-body">
                            <h6 class="text-center">
                                Pengumuman Kelulusan Seleksi Administrasi Tenaga Perbantuan Penanganan Covid-19 di KKP Kelas
                                II Pontianak Tahun 2022
                            </h6>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
@endsection
