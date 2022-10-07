<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Absensi Kelas</title>
    <!--Bootstrap -->
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <!--owl carousel-->
    <link rel="stylesheet" href="{{ asset('asset/css/owl.carousel.min.css') }}">
    <!--font awesome-->
    <link rel="stylesheet" href="{{ asset('asset/fontawesome/css/all.min.css') }}">
    <!--style css customan kita-->
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
</head>

<body>

    {{-- navbar info smkn 1 --}}
    <div id="navbar">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <ul class="top-contact">
                        <li><a href="#"><i class="fa fa-phone"></i> 0882-3038-9974</a></li>
                        <li><a href="#"><i class="fas fa-envelope"></i> rekapanlunas.semas</a></li>
                        <li><a href="#"><i class="fas fa-bullhorn"></i> TAHUN AJARAN 2022/2023</a></li>
                    </ul>
                </div>
                <div class="class col-md-3">
                    <ul class="sosmed">
                        <li><a href="https://www.instagram.com/rraflidf_/"><i class="fab fa-instagram"></i></a></li>
                        <li><a href=""><i class="fab fa-facebook"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://wa.me/62881036786057"><i class="fab fa-whatsapp"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <header>
            <div class="container" style="margin-top:-20px">
                <div class="row">
                    <div class="col md-8">
                        <div class="brand">
                            <img src="{{ asset('asset/img/logonew.png') }}" alt="">
                            <div class="brand-name">
                                <h1>SMK NEGERI 1 SURABAYA</h1>
                                <h3>Rekayasa Perangkat Lunak 2</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pembungkus-searchbox">
                        <div class="searchbox">
                            <form method="get">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Masukkan Nama Siswa..."
                                        aria-label="Tombol Cari" aria-describedby="Tombol Cari">
                                    <div class="input-group-append">
                                        <button class="btn btn-utama" id="Tombol Cari">CARI</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!--section menu-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-biru">
            <div class="container" id="menu">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                {{-- Home --}}
                <div class="collapse navbar-collapse" id="my-nav">
                    <ul class="navbar-nav mr-auto">


                        <li class="nav-item active">
                            <a class="nav-link" href="/dashboard_siswa">dashboard<span
                                    class="sr-only">(current)</span></a>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Data Umum</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item text-dark" href="/jadwal_siswa">Jadwal Pelajaran</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-dark" href="/surat_siswa">Surat Perizinan</a>
                            </div>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Absensi</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item text-dark" href="/harian_siswa">Harian</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-dark" href="/bulanan_siswa">Bulanan</a>
                            </div>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Tentang Kami</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item text-dark" href="/detail_siswa">Detail Siswa</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-dark" href="/detail_pengajar">Detail Pengajar</a>
                            </div>
                        </li>

                    </ul>
                    <li class="nav-item">
                        <a class="nav-link " href="/login_pilih">Logout</span></a>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>

        <script src="{{ asset('asset/js/jquery-3.3.1.slim.min.js') }}"></script>
        <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('asset/owl.carousel.min.js') }}"></script>
</body>

</html>
