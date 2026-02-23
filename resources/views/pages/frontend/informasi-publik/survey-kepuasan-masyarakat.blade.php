@extends('layouts.detail')
@section('title')
    Survey Kepuasan Masyarakat
@endsection
@section('title-navbar')
    Survey Kepuasan Masyarakat
@endsection
@section('content')
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            {{-- <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h1 class="mb-0">Artikel</h1>
            </div> --}}
            <div class="row">
                <!-- SKM -->
                <div class="col-lg-6 mb-4">
                    <h2>Survey Kepuasan Masyarakat</h2>
                    <div class="accordion shadow mt-3" id="accordionSKM">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-skm1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-skm1" aria-expanded="false" aria-controls="collapse-skm1">
                                    <i class="fa fa-scale me-2"></i> 2025
                                </button>
                            </h2>
                            <div id="collapse-skm1" class="accordion-collapse collapse" aria-labelledby="heading-skm1"
                                data-bs-parent="#accordionSKM">

                                <div class="accordion-body">
                                    <ol>
                                        <li><a href="#">Triwulan I</a></li>
                                        <li><a href="#">Triwulan II</a></li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- SPAK -->
                <div class="col-lg-6 mb-4">
                    <h2>Survey Persepsi Anti Korupsi</h2>
                    <div class="accordion shadow mt-3" id="accordionSPAK">

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-spak1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-spak1" aria-expanded="false" aria-controls="collapse-spak1">
                                    <i class="fa fa-scale me-2"></i> Data Pelayanan Vaksinasi
                                </button>
                            </h2>
                            <div id="collapse-spak1" class="accordion-collapse collapse" aria-labelledby="heading-spak1"
                                data-bs-parent="#accordionSPAK">
                                <div class="accordion-body">
                                    <ol>
                                        <li><a href="#">Triwulan I</a></li>
                                        <li><a href="#">Triwulan II</a></li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
