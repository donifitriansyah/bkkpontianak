@extends('layouts.detail')
@section('title')
    {{ $berita->judul }}
@endsection
@section('title-navbar')
    {{ $berita->judul }}
@endsection
@section('content')
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class=" text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h6 class="fw-bold text-primary text-uppercase">
                    {{ $berita->tanggal ? \Carbon\Carbon::parse($berita->published_at)->translatedFormat('d F Y') : '-' }}
                </h6>
                {{-- <h1 class="mb-0">{{ $berita->judul }}</h1> --}}
            </div>
            <div class="mb-4">
                <div class="card shadow">
                    <div class="card-body" style="overflow:hidden;">

                        {{-- <img class="d-block mx-auto mb-3" style="max-width:30%; height:auto; object-fit:contain;"
                            src="{{ asset('storage/' . $berita->thumbnail) }}"> --}}

                        <div style="max-width:100%; overflow:hidden;">
                            <style>
                                img {
                                    max-width: 100%;
                                    height: auto;
                                    display: block;
                                }
                            </style>

                            {!! $berita->konten !!}
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
