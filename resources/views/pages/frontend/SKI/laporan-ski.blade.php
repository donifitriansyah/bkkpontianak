@extends('layouts.detail')

@section('title', 'Laporan SKI')

@section('title-navbar')
    Laporan Satuan Kepatuhan Internal
@endsection

@section('content')
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">

            <div class="text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">
                    Laporan Satuan Kepatuhan Internal
                </h5>
                <h1 class="mb-0">
                    Balai Kekarantinaan Kesehatan Kelas I Pontianak
                </h1>
            </div>

            <div class="card">
                <table class="table-bordered text-center">
                    <thead class="bg-primary" style="color:white;">
                        <tr>
                            <th>Tahun</th>
                            <th>Semester</th>
                            <th>Lihat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $item)
                            <tr>
                                <td>{{ $item->tahun }}</td>
                                <td>{{ $item->semester }}</td>
                                <td>
                                    @if ($item->file_pdf)
                                        <a href="{{ route('laporan-ski.show', $item->id) }}" class="btn btn-success btn-sm">
                                            ✔
                                        </a>
                                    @else
                                        <span class="text-muted">-</span>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2">Data belum tersedia</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
