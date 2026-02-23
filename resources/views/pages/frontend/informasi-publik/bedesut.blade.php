@extends('layouts.detail')
@section('title')
    BEDESUT
@endsection
@section('title-navbar')
    BEDESUT
@endsection
@section('content')
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h1 class="mb-0">BEDESUT</h1>
                <h5 class="fw-bold text-primary text-uppercase">Berita dan Diseminasi Surveilans di Pintu Masuk</h5>
            </div>
            <div class="row">


                @forelse ($bedesut as $item)
                    <div class="col-lg-3 mb-4">
                        <a href="{{ route('bedesut.show', $item->id) }}" class="text-decoration-none">
                            <div class="service-card haji-card shadow h-100">
                                <div class="haji-card-img">
                                    <img src="{{ $item->thumbnail ? asset('storage/' . $item->thumbnail) : asset('frontend/img/tes1.png') }}"
                                        class="img-fluid">
                                </div>

                                <div class="haji-card-body">
                                    <h6 class="text-center text-dark">
                                        {{ $item->nama }}
                                    </h6>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-12 text-center text-muted">
                        Data BEDESUT belum tersedia
                    </div>
                @endforelse



            </div>

        </div>
    </div>
@endsection
