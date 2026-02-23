@extends('layouts.detail')

@section('title', $bedesut->nama)
@section('title-navbar', $bedesut->nama)

@section('content')
    <div class="container py-5">

        <div class="text-center mb-4">
            <h1>{{ $bedesut->nama }}</h1>
            <div class="mt-3">
                {!! $bedesut->text !!}
            </div>
        </div>

        <a href="{{ route('bedesut') }}" class="btn btn-secondary">
            ← Kembali
        </a>

        {{-- INFOGRAFIS --}}
        @if ($bedesut->infografis->count())
            <h3 class="mt-5">Infografis</h3>
            <div class="row">
                @foreach ($bedesut->infografis as $info)
                    <div class="col-md-4 mb-3">
                        <a href="{{ route('infografis.show', $info->id) }}" class="text-decoration-none text-dark">
                            <div class="card shadow h-100">
                                <img src="{{ asset('storage/' . $info->thumbnail) }}" class="card-img-top">

                                <div class="card-body text-center">
                                    <h6>{{ $info->nama }}</h6>
                                </div>
                            </div>

                        </a>
                    </div>
                @endforeach
            </div>
        @endif


        {{-- DASHBOARD --}}
        @if ($bedesut->dashboard->count())
            @foreach ($bedesut->dashboard as $dash)
                <div class="col-md-4 mb-3 mt-5">
                    <a href="{{ route('dashboard-interaktif.show', $dash->id) }}" class="text-decoration-none text-dark">

                        <div class="card shadow h-100">
                            <img src="{{ asset('storage/' . $dash->thumbnail) }}" class="card-img-top">

                            <div class="card-body text-center">
                                <h6>{{ $dash->nama }}</h6>
                            </div>
                        </div>

                    </a>
                </div>
            @endforeach
        @endif


        {{-- SUNMORE --}}
        @if ($bedesut->sunmore->count())
            <ul>
                <table class="table table-bordered bg-primary text-center mt-5">
                    <thead class="bg-primary" style="color:white;">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>PDF</th>
                        </tr>
                    </thead>
                    <tbody >
                        @forelse ($bedesut->sunmore as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>
                                    <a href="{{ route('sunmore.flipbook', $item->id) }}" class="btn btn-sm btn-success">
                                        Lihat
                                    </a>
                                </td>

                            @empty
                            <tr>
                                <td colspan="5">Belum ada data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
    </div>
    </ul>
    @endif

    </div>
@endsection
