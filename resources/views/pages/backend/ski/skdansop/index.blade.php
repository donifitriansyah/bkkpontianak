@extends('layouts.back')

@section('title', 'SK dan SOP')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-3">SK dan SOP</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card shadow">
            <div class="card-header d-flex justify-content-between">
                <h6 class="font-weight-bold">Data SK dan SOP</h6>
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#createModal">
                    Tambah Data
                </button>
            </div>

            <div class="card-body">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>File PDF</th>
                            <th width="20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td class="text-center">
                                    <span class="badge {{ $item->kategori == 'SK' ? 'bg-primary' : 'bg-success' }}">
                                        {{ $item->kategori }}
                                    </span>
                                </td>

                                <td>
                                    <a href="{{ asset('storage/' . $item->file_pdf) }}" target="_blank"
                                        class="btn btn-success btn-sm">
                                        Lihat PDF
                                    </a>
                                </td>
                                <td>
                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#editModal{{ $item->id }}">
                                        Edit
                                    </button>

                                    <form action="{{ route('admin-sk-dan-sop.destroy', $item->id) }}" method="POST"
                                        class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>

                            {{-- MODAL EDIT --}}
                            <div class="modal fade" id="editModal{{ $item->id }}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form method="POST" action="{{ route('admin-sk-dan-sop.update', $item->id) }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <div class="modal-header">
                                                <h5>Edit SK / SOP</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label>Nama</label>
                                                    <input type="text" name="nama" value="{{ $item->nama }}"
                                                        class="form-control" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label>Kategori</label>
                                                    <select name="kategori" class="form-control" required>
                                                        <option value="SK"
                                                            {{ $item->kategori == 'SK' ? 'selected' : '' }}>SK</option>
                                                        <option value="SOP"
                                                            {{ $item->kategori == 'SOP' ? 'selected' : '' }}>SOP</option>
                                                    </select>
                                                </div>


                                                <div class="mb-3">
                                                    <label>File PDF (Opsional)</label>
                                                    <input type="file" name="file_pdf" class="form-control"
                                                        accept="application/pdf">
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Batal</button>
                                                <button class="btn btn-primary">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <tr>
                                <td colspan="5">Data belum tersedia</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- MODAL CREATE --}}
    <div class="modal fade" id="createModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="{{ route('admin-sk-dan-sop.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-header">
                        <h5>Tambah SK / SOP</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <div class="mb-3">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>

                        <select name="kategori" class="form-control" required>
                            <option value="">-- Pilih Kategori --</option>
                            <option value="SK" {{ old('kategori') == 'SK' ? 'selected' : '' }}>SK</option>
                            <option value="SOP" {{ old('kategori') == 'SOP' ? 'selected' : '' }}>SOP</option>
                        </select>



                        <div class="mb-3">
                            <label>File PDF</label>
                            <input type="file" name="file_pdf" class="form-control" accept="application/pdf" required>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
