@extends('layouts.detail')
@section('title')
    PPID
@endsection
@section('title-navbar')
    PPID BALAI KEKARANTINAAN KESEHATAN KELAS I PONTIANAK
@endsection
@section('content')
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto">
                <h1 class="mb-0">SELAMAT DATANG DI LAYANAN E-PPID BALAI KEKARANTINAAN KESEHATAN KELAS I PONTIANAK</h1>
                <p>Layanan ini merupakan sarana layanan online bagi pemohon informasi publik sebagai salah satu wujud
                    pelaksanaan keterbukaan informasi publik pada Balai Kekarantinaan Kesehatan Kelas I Pontianak </p>
            </div>
            @include('includes.frontend.ppid')
            <hr>
            <div class="row justify-content-center text-center">

                <div class="col-lg-4 col-md-7 mb-3">
                    <a id="btn-ppi" href="javascript:void(0)"
                        class="btn btn-white btn-lg text-white w-100 shadow menu-btn">
                        <img src="{{ asset('frontend/img/prosedur-permintaan-informasi.png') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-4 col-md-7 mb-3">
                    <a id="btn-ml" href="javascript:void(0)"
                        class="btn btn-white btn-lg text-white w-100 shadow menu-btn">
                        <img src="{{ asset('frontend/img/maklumat-layanan.png') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-4 col-md-7 mb-3">
                    <a id="btn-ppk" href="javascript:void(0)"
                        class="btn btn-white btn-lg text-white w-100 shadow menu-btn">
                        <img src="{{ asset('frontend/img/prosedur-pengajuan-keberatan.png') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-4 col-md-7 mb-3">
                    <a id="btn-ps" href="javascript:void(0)"
                        class="btn btn-white btn-lg text-white w-100 shadow menu-btn">
                        <img src="{{ asset('frontend/img/penyelesaian-sengketa.png') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-4 col-md-7 mb-3">
                    <a id="btn-wli" href="javascript:void(0)"
                        class="btn btn-white btn-lg text-white w-100 shadow menu-btn">
                        <img src="{{ asset('frontend/img/waktu-layanan-informasi.png') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-4 col-md-7 mb-3">
                    <a id="btn-sbpi" href="javascript:void(0)"
                        class="btn btn-white btn-lg text-white w-100 shadow menu-btn">
                        <img src="{{ asset('frontend/img/standar-biaya-perolehan-informasi.png') }}" alt="">
                    </a>
                </div>



            </div>

            <hr>
            <div id="konten-dinamis" class="mt-3"></div>
        </div>
    </div>
    <script>
        function setActive(id) {
            document.querySelectorAll('.menu-btn').forEach(btn => {
                btn.classList.remove('active');
            });

            document.getElementById(id).classList.add('active');
        }
        document.getElementById("btn-ppi").addEventListener("click", function() {
            setActive('btn-ppi');
            fetch("{{ route('ppid.standar-layanan.prosedur-permintaan-informasi') }}")
                .then(response => response.text())
                .then(html => {
                    document.getElementById("konten-dinamis").innerHTML = html;
                });
        });

        document.getElementById("btn-ml").addEventListener("click", function() {
            setActive('btn-ml');
            fetch("{{ route('ppid.standar-layanan.maklumat-layanan') }}")
                .then(response => response.text())
                .then(html => {
                    document.getElementById("konten-dinamis").innerHTML = html;
                });
        });

        document.getElementById("btn-ps").addEventListener("click", function() {
            setActive('btn-ps');
            fetch("{{ route('ppid.standar-layanan.prosedur-pemohonan-penyelesaian-sengketa-informasi-publik') }}")
                .then(response => response.text())
                .then(html => {
                    document.getElementById("konten-dinamis").innerHTML = html;
                });
        });
        document.getElementById("btn-wli").addEventListener("click", function() {
            setActive('btn-wli');
            fetch("{{ route('ppid.standar-layanan.prosedur-waktu-layanan-informasi') }}")
                .then(response => response.text())
                .then(html => {
                    document.getElementById("konten-dinamis").innerHTML = html;
                });
        });
        document.getElementById("btn-ppk").addEventListener("click", function() {
            setActive('btn-ppk');
            fetch("{{ route('ppid.standar-layanan.prosedur-pengajuan-keberatan') }}")
                .then(response => response.text())
                .then(html => {
                    document.getElementById("konten-dinamis").innerHTML = html;
                });
        });
        document.getElementById("btn-sbpi").addEventListener("click", function() {
            setActive('btn-sbpi');
            fetch("{{ route('ppid.standar-layanan.standar-biaya-perolehan-informasi') }}")
                .then(response => response.text())
                .then(html => {
                    document.getElementById("konten-dinamis").innerHTML = html;
                });
        });

    </script>
@endsection
