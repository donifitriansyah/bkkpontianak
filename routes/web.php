<?php

use App\Http\Controllers\Admin\BedesutController;
use App\Http\Controllers\Admin\BedesutDashboardController;
use App\Http\Controllers\Admin\BedesutInfografisController;
use App\Http\Controllers\Admin\BenturanKepentinganController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\CarouselController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\FormSurveyKepuasanMasyarakatController;
use App\Http\Controllers\Admin\GambarMaklumatPelayananController;
use App\Http\Controllers\Admin\GolKPKController;
use App\Http\Controllers\Admin\InfografisController;
use App\Http\Controllers\Admin\KategoriBeritaController;
use App\Http\Controllers\Admin\LaporanSKIController;
use App\Http\Controllers\Admin\LaporSpanController;
use App\Http\Controllers\Admin\LayananPengaduanController;
use App\Http\Controllers\Admin\PanduanSKIController;
use App\Http\Controllers\Admin\PPIDFaqController;
use App\Http\Controllers\Admin\PPIDFormController;
use App\Http\Controllers\Admin\PPIDProfilController;
use App\Http\Controllers\Admin\PPIDStrukturOrganisasiController;
use App\Http\Controllers\Admin\PPIDTugasFungsiController;
use App\Http\Controllers\Admin\PPIDVisiMisiController;
use App\Http\Controllers\Admin\ProfilSKIController;
use App\Http\Controllers\Admin\SejarahDanLatarBelakangController;
use App\Http\Controllers\Admin\SKDanSOPController;
use App\Http\Controllers\Admin\SosmedController;
use App\Http\Controllers\Admin\StandarPelayananController;
use App\Http\Controllers\Admin\StrukturOrganisasiController;
use App\Http\Controllers\Admin\SummernoteController;
use App\Http\Controllers\Admin\SunmoreController;
use App\Http\Controllers\Admin\TentangKamiController;
use App\Http\Controllers\Admin\TentangWBKController;
use App\Http\Controllers\Admin\TugasPokokDanFungsiController;
use App\Http\Controllers\Admin\UPGController;
use App\Http\Controllers\Admin\VisiMisiController;
use App\Http\Controllers\Admin\WilkerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserBeritaController;
use App\Models\Bedesut;
use App\Models\BenturanKepentingan;
use App\Models\Berita;
use App\Models\Carousel;
use App\Models\FaqWbk;
use App\Models\Footer;
use App\Models\FormSurveyKepuasanMasyarakat;
use App\Models\GambarMaklumatPelayanan;
use App\Models\KategoriBerita;
use App\Models\LaporanSKI;
use App\Models\PPIDFaq;
use App\Models\PPIDForm;
use App\Models\PPIDProfil;
use App\Models\PPIDStrukturOrganisasi;
use App\Models\PPIDTugasFungsi;
use App\Models\PPIDVisiMisi;
use App\Models\SejarahDanLatarBelakang;
use App\Models\SKDanSOP;
use App\Models\Sosmed;
use App\Models\StandarPelayanan;
use App\Models\StrukturOrganisasi;
use App\Models\TentangKami;
use App\Models\TugasDanFungsi;
use App\Models\VisiMisi;
use App\Models\Wilker;
use App\Models\WilkerText;
use Illuminate\Support\Facades\Route;









Route::get('/', function () {
    $berita = Berita::where('status', 'published')
        ->latest()
        ->take(5)
        ->get();
    $carousel = Carousel::all();
    $gambar = GambarMaklumatPelayanan::first();
    $sosmed = Sosmed::first();
    $tentang_kami = TentangKami::first();
    $fskm = FormSurveyKepuasanMasyarakat::first();
    $footer = Footer::first();

    return view('pages.frontend.welcome', compact('berita', 'gambar', 'carousel', 'tentang_kami', 'fskm', 'footer', 'sosmed'));
})->name('beranda');

Route::get('/detail', function () {
    return view('pages.frontend.detail');
})->name('detail');

// START PROFIL

Route::get('/sejarah', function () {
    $sejarah = SejarahDanLatarBelakang::first();

    return view('pages.frontend.profil.sejarah', compact('sejarah'));
})->name('sejarah');

Route::get('/visi-dan-misi', function () {
    $visi = VisiMisi::first();

    return view('pages.frontend.profil.visi-dan-misi', compact('visi'));
})->name('visi-dan-misi');

Route::get('/tugas-pokok-dan-fungsi', function () {
    $tugas = TugasDanFungsi::first();

    return view('pages.frontend.profil.tugas-pokok-dan-fungsi', compact('tugas'));
})->name('tugas-pokok-dan-fungsi');

Route::get('/struktur-organisasi', function () {
    $item = StrukturOrganisasi::first();

    return view('pages.frontend.profil.struktur-organisasi', compact('item'));
})->name('struktur-organisasi');

Route::get('/wilayah-kerja', function () {
    $wilkers = Wilker::orderBy('id')->get();
    $wilkerText = WilkerText::first();

    return view('pages.frontend.profil.wilayah-kerja', compact('wilkers', 'wilkerText'));
})->name('wilayah-kerja');

Route::get('/infografis', function () {
    return view('pages.frontend.profil.infografis');
})->name('infografis');

// END PROFIL

// START SKI

Route::get('/profil-ski', function () {
    return view('pages.frontend.SKI.profil-ski');
})->name('profil-ski');

Route::get('/panduan-ski', function () {
    return view('pages.frontend.SKI.panduan-ski');
})->name('panduan-ski');

Route::get('/laporan-ski', function () {
    $data = LaporanSKI::all();

    return view('pages.frontend.SKI.laporan-ski', compact('data'));
})->name('laporan-ski');

Route::get('/laporan-ski/{id}', [LaporanSKIController::class, 'show'])
    ->name('laporan-ski.show');

Route::get('/sk-dan-sop', function () {
    $dataSK = SKDanSOP::where('kategori', 'SK')->get();
    $dataSOP = SKDanSOP::where('kategori', 'SOP')->get();

    return view('pages.frontend.SKI.sk-dan-sop', compact('dataSK', 'dataSOP'));
})->name('sk-dan-sop');

Route::get('/sk-dan-sop/{id}', [SKDanSOPController::class, 'show'])
    ->name('sk-dan-sop.show');

// END SKI

// START LAYANAN

Route::get('/pengaduan-layanan-masyarakat', function () {
    return view('pages.frontend.layanan.pengaduan-layanan-masyarakat');
})->name('pengaduan-layanan-masyarakat');

Route::get('/maklumat-pelayanan', function () {
    $gambar = GambarMaklumatPelayanan::first();

    return view('pages.frontend.layanan.maklumat-pelayanan', compact('gambar'));
})->name('maklumat-pelayanan');

Route::get('/standar-pelayanan', function () {
    $data = StandarPelayanan::all();
    return view('pages.frontend.layanan.standar-pelayanan', compact('data'));
})->name('standar-pelayanan');

Route::get('/standar-pelayanan/{id}', [StandarPelayananController::class, 'show'])
    ->name('standar-pelayanan.show');

Route::get('/sinkarkes', function () {
    return view('pages.frontend.layanan.sinkarkes');
})->name('sinkarkes');

Route::get('/formulir-permohonan-layanan', function () {
    return view('pages.frontend.layanan.formulir-permohonan-layanan');
})->name('formulir-permohonan-layanan');

Route::get('/posein-aza', function () {
    return view('pages.frontend.layanan.poseinaza');
})->name('posein-aza');

// END LAYANAN

// START PENGADUAN

Route::get('/tentang-wbk-wbbm', function () {
    $data = FaqWbk::all();
    return view('pages.frontend.pengaduan.tentang-wbk-wbbm', compact('data'));
})->name('tentang-wbk-wbbm');

Route::get('/wbs', function () {
    return view('pages.frontend.pengaduan.wbs');
})->name('wbs');

Route::get('/benturan-kepentingan', function () {
    $data = BenturanKepentingan::all();
    return view('pages.frontend.pengaduan.benturan-kepentingan', compact('data'));
})->name('benturan-kepentingan');

Route::get('/span-lapor', function () {
    return view('pages.frontend.pengaduan.spanlapor');
})->name('span-lapor');

Route::get('/gol-kpk', function () {
    return view('pages.frontend.pengaduan.golkpk');
})->name('gol-kpk');

Route::get('/unit-pengendalian-gratifikasi', function () {
    return view('pages.frontend.pengaduan.unit-pengendalian-gratifikasi');
})->name('unit-pengendalian-gratifikasi');

// END PENGADUAN

// START INFORMASI PUBLIK

Route::get('/informasi-publik/bedesut', function () {
            $bedesut = Bedesut::latest()->get();
        return view('pages.frontend.informasi-publik.bedesut', compact('bedesut'));
})->name('bedesut');

Route::get('/informasi-publik/berita', function () {
    $beritas = Berita::with('kategori', 'penulis')
        ->orderBy('tanggal', 'DESC')
        ->paginate(6);

    // gunakan nama yang sama: kategoriList
    $kategoriList = KategoriBerita::orderBy('nama_kategori', 'ASC')->get();

    $recentPost = Berita::orderBy('tanggal', 'DESC')->take(5)->get();

    return view('pages.frontend.informasi-publik.berita', compact('beritas', 'kategoriList', 'recentPost'));
})->name('berita');

Route::get('/informasi-publik/berita/kategori/{id}',
    [UserBeritaController::class, 'filterByCategory']
)->name('berita.kategori');

Route::get('/informasi-publik/artikel', function () {
    return view('pages.frontend.informasi-publik.artikel');
})->name('artikel');

Route::get('/informasi-publik/pengumuman', function () {
    return view('pages.frontend.informasi-publik.pengumuman');
})->name('pengumuman');

Route::get('/informasi-publik/sop', function () {
    return view('pages.frontend.informasi-publik.sop');
})->name('sop');

Route::get('/informasi-publik/e-library', function () {
    return view('pages.frontend.informasi-publik.elibrary');
})->name('elibrary');

Route::get('/informasi-publik/akuntabilitas', function () {
    return view('pages.frontend.informasi-publik.akuntabilitas');
})->name('akuntabilitas');

Route::get('/informasi-publik/survey-kepuasan-masyarakat', function () {
    return view('pages.frontend.informasi-publik.survey-kepuasan-masyarakat');
})->name('survey-kepuasan-masyarakat');

Route::get('/informasi-publik/ppid', function () {
    $faq = PPIDFaq::latest()->get();
     $form = PPIDForm::latest()->first(); // ambil 1 data saja

    return view('pages.frontend.informasi-publik.ppid', compact('faq', 'form'));
})->name('ppid');

// END INFORMASI PUBLIK

// START PPID
Route::get('/informasi-publik/ppid/profil', function () {
    return view('pages.frontend.ppid.profil');
})->name('ppid.profil');

Route::get('/informasi-publik/ppid/profil-singkat', function () {

    $profil = PPIDProfil::latest()->first();
    // ambil 1 data terbaru

    return view('components.ppid.profil-singkat', compact('profil'));

})->name('ppid.profil-singkat');

Route::get('/informasi-publik/ppid/tugas-fungsi', function () {
    $profil = PPIDTugasFungsi::latest()->first();

    return view('components.ppid.tugas-fungsi', compact('profil'));
})->name('ppid.tugas-fungsi');

Route::get('/informasi-publik/ppid/struktur-organisasi', function () {
    $struktur = PPIDStrukturOrganisasi::latest()->get();

    return view('components.ppid.struktur-organisasi', compact('struktur'));
})->name('ppid.struktur-organisasi');

Route::get('/informasi-publik/ppid/visi-misi', function () {

    $data = PPIDVisiMisi::latest()->first();
    return view('components.ppid.visi-misi', compact('data'));

})->name('ppid.visi-misi');

Route::get('/informasi-publik/ppid/regulasi', function () {
    return view('pages.frontend.ppid.regulasi');
})->name('ppid.regulasi');

Route::get('/informasi-publik/ppid/regulasi/kip', function () {
    return view('components.ppid.regulasi.kip');
})->name('ppid.regulasi.kip');

Route::get('/informasi-publik/ppid/regulasi/kemenkes', function () {
    return view('components.ppid.regulasi.kemenkes');
})->name('ppid.regulasi.kemenkes');

Route::get('/informasi-publik/ppid/regulasi/ski', function () {
    return view('components.ppid.regulasi.sop');
})->name('ppid.regulasi.sop');

Route::get('/informasi-publik/ppid/standar-layanan', function () {
    return view('pages.frontend.ppid.standar-layanan');
})->name('ppid.standar-layanan');

Route::get('/informasi-publik/ppid/informasi-publik', function () {
    return view('pages.frontend.ppid.informasi-publik');
})->name('ppid.informasi-publik');

Route::get('/informasi-publik/ppid/laporan', function () {
    return view('pages.frontend.ppid.laporan');
})->name('ppid.laporan');

Route::get('/informasi-publik/ppid/standar-layanan/prosedur-permintaan-informasi', function () {
    return view('components.ppid.standar-layanan.prosedur-permintaan-informasi');
})->name('ppid.standar-layanan.prosedur-permintaan-informasi');

Route::get('/informasi-publik/ppid/standar-layanan/maklumat-layan', function () {
    return view('components.ppid.standar-layanan.maklumat-layanan');
})->name('ppid.standar-layanan.maklumat-layanan');

Route::get('/informasi-publik/ppid/standar-layanan/prosedur-pengajuan-keberatan', function () {
    return view('components.ppid.standar-layanan.prosedur-pengajuan-keberatan');
})->name('ppid.standar-layanan.prosedur-pengajuan-keberatan');

Route::get('/informasi-publik/ppid/standar-layanan/prosedur-pemohonan-penyelesaian-sengketa-informasi-publik', function () {
    return view('components.ppid.standar-layanan.prosedur-pemohonan-penyelesaian-sengketa-informasi-publik');
})->name('ppid.standar-layanan.prosedur-pemohonan-penyelesaian-sengketa-informasi-publik');

Route::get('/informasi-publik/ppid/standar-layanan/prosedur-waktu-layanan-informasi', function () {
    return view('components.ppid.standar-layanan.waktu-layanan-informasi');
})->name('ppid.standar-layanan.prosedur-waktu-layanan-informasi');

Route::get('/informasi-publik/ppid/standar-layanan/standar-biaya-perolehan-informasi', function () {
    return view('components.ppid.standar-layanan.standar-biaya-perolehan-informasi');
})->name('ppid.standar-layanan.standar-biaya-perolehan-informasi');

Route::get('/informasi-publik/ppid/informasi-publik/informasi-publik-berkala', function () {
    return view('components.ppid.informasi-publik.ipb');
})->name('ppid.informasi-publik.ipb');

Route::get('/informasi-publik/ppid/informasi-publik/informasi-publik-tersedia-setiap-saat', function () {
    return view('components.ppid.informasi-publik.iptss');
})->name('ppid.informasi-publik.iptss');

Route::get('/informasi-publik/ppid/informasi-publik/informasi-publik-serta-merta', function () {
    return view('components.ppid.informasi-publik.ipsm');
})->name('ppid.informasi-publik.ipsm');

Route::get('/informasi-publik/ppid/laporan/laporan-tahunan-layanan-ppid', function () {
    return view('components.ppid.laporan.ltlp');
})->name('ppid.laporan.ltlp');

Route::get('/informasi-publik/ppid/laporan/ringkasan-akses-informasi-publik', function () {
    return view('components.ppid.laporan.raip');
})->name('ppid.laporan.raip');

// END PPID

Route::get('/kontak-kami', function () {
    return view('pages.frontend.kontak-kami');
})->name('kontak-kami');

Route::get('/dashboard', function () {
    return view('pages.backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Berita
    Route::resource('admin/berita', BeritaController::class);
    Route::resource('kategori-berita', KategoriBeritaController::class);
    Route::resource('gambarmaklumatpelayanan', GambarMaklumatPelayananController::class);
    Route::resource('carousel', CarouselController::class);
    Route::resource('tentang-kami', TentangKamiController::class);
    Route::resource('sosmed', SosmedController::class);
    Route::resource('footer', FooterController::class);
    Route::resource('form-survey-kepuasan-masyarakat', FormSurveyKepuasanMasyarakatController::class);
    Route::resource('sejarah-dan-latar-belakang', SejarahDanLatarBelakangController::class);
    Route::resource('visi-misi', VisiMisiController::class);
    Route::resource('admin-infografis', InfografisController::class);
    Route::resource('admin-standar-pelayanan', StandarPelayananController::class);
    Route::post('admin-standar-pelayanan/upload-image',[StandarPelayananController::class, 'uploadImage'])->name('standar-pelayanan.upload-image');
    Route::resource('admin-benturan-kepentingan', BenturanKepentinganController::class);
    Route::post('admin-benturan-kepentingan/upload-image',[BenturanKepentinganController::class, 'uploadImage'])->name('benturan-kepentingan.upload-image');

    Route::resource('admin-profil-ski', ProfilSKIController::class)->only([
        'index', 'store', 'update',
    ]);

    Route::post('admin-profil-ski/upload-image', [ProfilSKIController::class, 'uploadImage'])
        ->name('profil-ski.upload-image');

    Route::resource('admin-panduan-ski', PanduanSKIController::class);
    Route::resource('admin-laporan-ski', LaporanSKIController::class);

    Route::resource('tugas-fungsi', TugasPokokDanFungsiController::class);
    Route::post('tugas-fungsi/upload-image', [TugasPokokDanFungsiController::class, 'uploadImage'])
        ->name('tugas-fungsi.upload-image');

    Route::resource('lapor-span', LaporSpanController::class);
    Route::post('lapor-span/upload-image', [LaporSpanController::class, 'uploadImage'])
        ->name('lapor-span.upload-image');

    Route::resource('admin-gol-kpk', GolKPKController::class);
    Route::post('admin-gol-kpk/upload-image', [GolKPKController::class, 'uploadImage'])
        ->name('admin-gol-kpk.upload-image');

    Route::resource('upg', UPGController::class);
    Route::post('upg/upload-image', [UPGController::class, 'uploadImage'])
        ->name('upg.upload-image');

    Route::resource('admin-faq-wbk', TentangWBKController::class);

    Route::resource('admin-bedesut', BedesutController::class);
    Route::resource('admin-bedesut-infografis', BedesutInfografisController::class);

    Route::resource('admin-dashboard-interaktif', BedesutDashboardController::class);

    Route::resource('admin-ppid-form', PPIDFormController::class);

    Route::resource('admin-ppid-faq', PPIDFaqController::class);

    Route::resource('admin-ppid-profil', PPIDProfilController::class);

    Route::resource('admin-ppid-tugas-fungsi', PPIDTugasFungsiController::class);

    Route::resource('admin-ppid-struktur-organisasi', PPIDStrukturOrganisasiController::class);

    Route::resource('admin-ppid-visi-misi', PPIDVisiMisiController::class);

    Route::post('admin-dashboard-interaktif/upload-image',[BedesutDashboardController::class, 'uploadImage'])->name('dashboard-interaktif.upload-image');



    Route::resource('admin-struktur-organisasi', StrukturOrganisasiController::class);
    Route::post('admin-struktur-organisasi/upload-image', [StrukturOrganisasiController::class, 'uploadImage'])
        ->name('struktur-organisasi.upload-image');

    // Layanan Pengaduan Masyarakat
    Route::get('/layanan-pengaduan-masyarakat', [LayananPengaduanController::class, 'index'])
        ->name('layanan-pengaduan-masyarakat.index');

    Route::post('/summernote/upload', [SummernoteController::class, 'upload'])
        ->name('summernote.upload');

    Route::resource('admin-wilker', WilkerController::class);
    Route::post('admin-wilker/text', [WilkerController::class, 'saveText'])
        ->name('wilker.text');

    Route::get('admin-laporan-ski/{id}/flipbook',
        [LaporanSKIController::class, 'flipbook']
    )->name('admin-laporan-ski.flipbook');

    Route::resource('admin-sk-dan-sop', SKDanSOPController::class);

    Route::resource('sunmore', SunmoreController::class)->except(['create', 'edit', 'show']);



});
    Route::get('sunmore/{id}/flipbook',
        [SunmoreController::class, 'flipbook']
    )->name('sunmore.flipbook');

Route::get('/bedesut/{bedesut}', [BedesutController::class, 'show'])->name('bedesut.show');
Route::get('/dashboard-interaktif/{id}',[BedesutDashboardController::class, 'show'])->name('dashboard-interaktif.show');
Route::get('/infografis/{infografis}', [BedesutInfografisController::class, 'show'])->name('infografis.show');


// Layanan Pengaduan Masyarakat
Route::get('/berita/{slug}', [UserBeritaController::class, 'show'])->name('user-berita.show');

Route::post('/layanan-pengaduan-masyarakat', [LayananPengaduanController::class, 'store'])
    ->name('layanan-pengaduan-masyarakat.store');

require __DIR__.'/auth.php';
