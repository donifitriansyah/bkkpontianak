@extends('layouts.detail')
@section('title')
    Akuntabilitas
@endsection
@section('title-navbar')
    Akuntabilitas
@endsection
@section('content')
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            {{-- <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h1 class="mb-0">Artikel</h1>
            </div> --}}
            <div class="accordion shadow mt-3" id="kemenkesAccordion">

                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                            <i class="fa fa-scale me-2"></i> Tahun 2021
                        </button>
                    </h2>
                    <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1"
                        data-bs-parent="#kemenkesAccordion">
                        <div class="accordion-body">
                            <ol>
                                <a href="">
                                    <li>RENCANA AKSI KEGIATAN KKP KELAS II PONTIANAK (2020-2024)</li>
                                </a>
                                <a href="">
                                    <li>RENCANA KINERJA TAHUNAN KKP KELAS II PONTIANAK</li>
                                </a>
                                <a href="">
                                    <li>PERJANJIAN KINERJA KKP KELAS II PONTIANAK</li>
                                </a>

                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
