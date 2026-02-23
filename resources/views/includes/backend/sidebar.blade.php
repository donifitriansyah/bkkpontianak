<div id="sidebar">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative text-center">
            <div class="align-items-center">
                <div class="logo">
                    <a href="index.html"><img src="{{ asset('frontend/img/logokemenkes.png') }}" alt="Logo"
                            srcset="" /></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item active">
                    <a href="index.html" class="sidebar-link">
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-three-dots"></i>
                        <span>Homepage</span>
                    </a>

                    <ul class="submenu">
                        <li class="submenu-item has-sub">
                            <a href="#" class="submenu-link">Beranda</a>

                            <ul class="submenu submenu-level-2">
                                <li class="submenu-item">
                                    <a href="{{ route('carousel.index') }}" class="submenu-link">Carousel</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="{{ route('tentang-kami.index') }}" class="submenu-link">Tentang Kami</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="{{ route('form-survey-kepuasan-masyarakat.index') }}" class="submenu-link">Form Survey Kepuasan Masyarakat</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="{{ route('sosmed.index') }}" class="submenu-link">Sosial Media</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="{{ route('footer.index') }}" class="submenu-link">Footer</a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu-item has-sub">
                            <a href="#" class="submenu-link">Profil</a>

                            <ul class="submenu submenu-level-2">
                                <li class="submenu-item">
                                    <a href="{{ route('sejarah-dan-latar-belakang.index') }}" class="submenu-link">Sejarah dan Latar
                                        Belakang</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="{{ route('visi-misi.index') }}" class="submenu-link">Visi dan Misi</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="{{ route('tugas-fungsi.index') }}" class="submenu-link">Tugas Pokok dan Fungsi</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="{{ route('admin-struktur-organisasi.index') }}" class="submenu-link">Struktur Organisasi</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="{{ route('admin-infografis.index') }}" class="submenu-link">Infografis SDM</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="{{ route('admin-wilker.index') }}" class="submenu-link">Wilayah Kerja</a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu-item has-sub">
                            <a href="#" class="submenu-link">SKI</a>

                            <ul class="submenu submenu-level-2">
                                <li class="submenu-item">
                                    <a href="{{ route('admin-profil-ski.index') }}" class="submenu-link">Profil SKI</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="{{ route('admin-panduan-ski.index') }}" class="submenu-link">Panduan SKI</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="{{ route('admin-laporan-ski.index') }}" class="submenu-link">Laporan SKI</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="{{ route('admin-sk-dan-sop.index') }}" class="submenu-link">SK & SOP</a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu-item has-sub">
                            <a href="#" class="submenu-link">Layanan</a>

                            <ul class="submenu submenu-level-2">
                                <li class="submenu-item {{ request()->routeIs('gambarmaklumatpelayanan.index') ? 'active' : '' }}">
                                    <a href="{{ route('gambarmaklumatpelayanan.index') }}" class="submenu-link">Maklumat Pelayanan</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="{{ route('admin-standar-pelayanan.index') }}" class="submenu-link">Standar Pelayanan</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="#" class="submenu-link">Sinkarkes</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="#" class="submenu-link">Formulir Permohonan Layanan</a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu-item has-sub">
                            <a href="#" class="submenu-link">Pengaduan</a>

                            <ul class="submenu submenu-level-2">
                                <li class="submenu-item">
                                    <a href="{{ route('admin-faq-wbk.index') }}" class="submenu-link">Tentang WBK & WBBM</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="#" class="submenu-link">Whistleblowing</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="{{ route('admin-benturan-kepentingan.index') }}" class="submenu-link">Benturan Kepentingan</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="#" class="submenu-link">Pengaduan Layanan Masyarakat</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="{{ route('lapor-span.index') }}" class="submenu-link">Lapor SP4N</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="{{ route('admin-gol-kpk.index') }}" class="submenu-link">Gol KPK</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="{{ route('upg.index') }}" class="submenu-link">Unit Pengendalian Gratifikasi</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>


                <li class="sidebar-item has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-stack"></i>
                        <span>Informasi Publik</span>
                    </a>

                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="{{ route('berita.index') }}" class="submenu-link">Berita</a>
                        </li>

                        <li class="submenu-item">
                            <a href="{{ route('admin-bedesut.index') }}" class="submenu-link">Bedesut</a>
                        </li>

                        <li class="submenu-item">
                            <a href="{{ route('admin-bedesut-infografis.index') }}" class="submenu-link">Bedesut Infografis</a>
                        </li>

                        <li class="submenu-item">
                            <a href="{{ route('admin-dashboard-interaktif.index') }}" class="submenu-link">Bedesut Dashboard</a>
                        </li>

                        <li class="submenu-item">
                            <a href="{{ route('sunmore.index') }}" class="submenu-link">Sunmore</a>
                        </li>

                    </ul>
                </li>

                <li class="sidebar-item has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-collection-fill"></i>
                        <span>PPID</span>
                    </a>

                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="{{ route('admin-ppid-form.index') }}" class="submenu-link">Formulir</a>
                        </li>

                        <li class="submenu-item">
                            <a href="{{ route('admin-ppid-faq.index') }}" class="submenu-link">Frequently Asked Question</a>
                        </li>

                        <li class="submenu-item">
                            <a href="{{ route('admin-ppid-profil.index') }}" class="submenu-link">Profil Singkat</a>
                        </li>

                        <li class="submenu-item">
                            <a href="{{ route('admin-ppid-tugas-fungsi.index') }}" class="submenu-link">Tugas Fungsi</a>
                        </li>

                        <li class="submenu-item">
                            <a href="{{ route('admin-ppid-struktur-organisasi.index') }}" class="submenu-link">Struktur Organisasi</a>
                        </li>

                        <li class="submenu-item">
                            <a href="extra-component-rating.html" class="submenu-link">Rating</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>Layouts</span>
                    </a>

                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="layout-default.html" class="submenu-link">Default Layout</a>
                        </li>

                        <li class="submenu-item">
                            <a href="layout-vertical-1-column.html" class="submenu-link">1 Column</a>
                        </li>

                        <li class="submenu-item">
                            <a href="layout-vertical-navbar.html" class="submenu-link">Vertical Navbar</a>
                        </li>

                        <li class="submenu-item">
                            <a href="layout-rtl.html" class="submenu-link">RTL Layout</a>
                        </li>

                        <li class="submenu-item">
                            <a href="layout-horizontal.html" class="submenu-link">Horizontal Menu</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-title">Forms &amp; Tables</li>

                <li class="sidebar-item has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-hexagon-fill"></i>
                        <span>Form Elements</span>
                    </a>

                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="form-element-input.html" class="submenu-link">Input</a>
                        </li>

                        <li class="submenu-item">
                            <a href="form-element-input-group.html" class="submenu-link">Input Group</a>
                        </li>

                        <li class="submenu-item">
                            <a href="form-element-select.html" class="submenu-link">Select</a>
                        </li>

                        <li class="submenu-item">
                            <a href="form-element-radio.html" class="submenu-link">Radio</a>
                        </li>

                        <li class="submenu-item">
                            <a href="form-element-checkbox.html" class="submenu-link">Checkbox</a>
                        </li>

                        <li class="submenu-item">
                            <a href="form-element-textarea.html" class="submenu-link">Textarea</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a href="form-layout.html" class="sidebar-link">
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>Form Layout</span>
                    </a>
                </li>

                <li class="sidebar-item has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-journal-check"></i>
                        <span>Form Validation</span>
                    </a>

                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="form-validation-parsley.html" class="submenu-link">Parsley</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-pen-fill"></i>
                        <span>Form Editor</span>
                    </a>

                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="form-editor-quill.html" class="submenu-link">Quill</a>
                        </li>

                        <li class="submenu-item">
                            <a href="form-editor-ckeditor.html" class="submenu-link">CKEditor</a>
                        </li>

                        <li class="submenu-item">
                            <a href="form-editor-summernote.html" class="submenu-link">Summernote</a>
                        </li>

                        <li class="submenu-item">
                            <a href="form-editor-tinymce.html" class="submenu-link">TinyMCE</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a href="table.html" class="sidebar-link">
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>Table</span>
                    </a>
                </li>

                <li class="sidebar-item has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                        <span>Datatables</span>
                    </a>

                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="table-datatable.html" class="submenu-link">Datatable</a>
                        </li>

                        <li class="submenu-item">
                            <a href="table-datatable-jquery.html" class="submenu-link">Datatable (jQuery)</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-title">Extra UI</li>

                <li class="sidebar-item has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-pentagon-fill"></i>
                        <span>Widgets</span>
                    </a>

                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="ui-widgets-chatbox.html" class="submenu-link">Chatbox</a>
                        </li>

                        <li class="submenu-item">
                            <a href="ui-widgets-pricing.html" class="submenu-link">Pricing</a>
                        </li>

                        <li class="submenu-item">
                            <a href="ui-widgets-todolist.html" class="submenu-link">To-do List</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-egg-fill"></i>
                        <span>Icons</span>
                    </a>

                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="ui-icons-bootstrap-icons.html" class="submenu-link">Bootstrap Icons
                            </a>
                        </li>

                        <li class="submenu-item">
                            <a href="ui-icons-fontawesome.html" class="submenu-link">Fontawesome</a>
                        </li>

                        <li class="submenu-item">
                            <a href="ui-icons-dripicons.html" class="submenu-link">Dripicons</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-bar-chart-fill"></i>
                        <span>Charts</span>
                    </a>

                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="ui-chart-chartjs.html" class="submenu-link">ChartJS</a>
                        </li>

                        <li class="submenu-item">
                            <a href="ui-chart-apexcharts.html" class="submenu-link">Apexcharts</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a href="ui-file-uploader.html" class="sidebar-link">
                        <i class="bi bi-cloud-arrow-up-fill"></i>
                        <span>File Uploader</span>
                    </a>
                </li>

                <li class="sidebar-item has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-map-fill"></i>
                        <span>Maps</span>
                    </a>

                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="ui-map-google-map.html" class="submenu-link">Google Map</a>
                        </li>

                        <li class="submenu-item">
                            <a href="ui-map-jsvectormap.html" class="submenu-link">JS Vector Map</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-three-dots"></i>
                        <span>Multi-level Menu</span>
                    </a>

                    <ul class="submenu">
                        <li class="submenu-item has-sub">
                            <a href="#" class="submenu-link">First Level</a>

                            <ul class="submenu submenu-level-2">
                                <li class="submenu-item">
                                    <a href="ui-multi-level-menu.html" class="submenu-link">Second Level</a>
                                </li>

                                <li class="submenu-item">
                                    <a href="#" class="submenu-link">Second Level Menu</a>
                                </li>
                            </ul>
                        </li>

                        <li class="submenu-item has-sub">
                            <a href="#" class="submenu-link">Another Menu</a>

                            <ul class="submenu submenu-level-2">
                                <li class="submenu-item">
                                    <a href="#" class="submenu-link">Second Level Menu</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-title">Pages</li>

                <li class="sidebar-item">
                    <a href="application-email.html" class="sidebar-link">
                        <i class="bi bi-envelope-fill"></i>
                        <span>Email Application</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="application-chat.html" class="sidebar-link">
                        <i class="bi bi-chat-dots-fill"></i>
                        <span>Chat Application</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="application-gallery.html" class="sidebar-link">
                        <i class="bi bi-image-fill"></i>
                        <span>Photo Gallery</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="application-checkout.html" class="sidebar-link">
                        <i class="bi bi-basket-fill"></i>
                        <span>Checkout Page</span>
                    </a>
                </li>

                <li class="sidebar-item has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-person-badge-fill"></i>
                        <span>Authentication</span>
                    </a>

                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="auth-login.html" class="submenu-link">Login</a>
                        </li>

                        <li class="submenu-item">
                            <a href="auth-register.html" class="submenu-link">Register</a>
                        </li>

                        <li class="submenu-item">
                            <a href="auth-forgot-password.html" class="submenu-link">Forgot Password</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-x-octagon-fill"></i>
                        <span>Errors</span>
                    </a>

                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="error-403.html" class="submenu-link">403</a>
                        </li>

                        <li class="submenu-item">
                            <a href="error-404.html" class="submenu-link">404</a>
                        </li>

                        <li class="submenu-item">
                            <a href="error-500.html" class="submenu-link">500</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-title">Raise Support</li>

                <li class="sidebar-item">
                    <a href="https://zuramai.github.io/mazer/docs" class="sidebar-link">
                        <i class="bi bi-life-preserver"></i>
                        <span>Documentation</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="https://github.com/zuramai/mazer/blob/main/CONTRIBUTING.md" class="sidebar-link">
                        <i class="bi bi-puzzle"></i>
                        <span>Contribute</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="https://github.com/zuramai/mazer#donation" class="sidebar-link">
                        <i class="bi bi-cash"></i>
                        <span>Donate</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
