@extends('layouts.detail')
@section('title')
    Benturan Kepentingan
@endsection
@section('title-navbar')
    Benturan Kepentingan
@endsection
@section('content')
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h1 class="mb-0">Benturan Kepentingan</h1>
            </div>
            @forelse ($data as $item)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading{{ $item->id }}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse{{ $item->id }}" aria-expanded="false"
                            aria-controls="collapse{{ $item->id }}">
                            {{ $item->nama }}
                        </button>
                    </h2>

                    <div id="collapse{{ $item->id }}" class="accordion-collapse collapse"
                        aria-labelledby="heading{{ $item->id }}" data-bs-parent="#accordionGabungan">

                        <div class="accordion-body">
                            {!! $item->text !!}
                        </div>

                    </div>
                </div>
            @empty
                <div class="text-center text-muted">
                    Data Benturan Kepentingan belum tersedia
                </div>
            @endforelse

        </div>
    </div>
@endsection
