<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>navbar</title>
    <!--Bootstrap -->
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <!--owl carousel-->
    <link rel="stylesheet" href="{{ asset('asset/css/owl.carousel.min.css') }}">
    <!--font awesome-->
    <link rel="stylesheet" href="{{ asset('asset/fontawesome/css/all.min.css') }}">
    {{--  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <nav class="navbar fixed-top navbar-expand-lg bg-light">
        <div class="container-fluid">
            <div>
                <img src="{{ asset('asset/img/logonew.png') }}" alt="" width="50%">
            </div>
            <a class="navbar-brand" href="#">
                <h5 style="text-transform: uppercase ">SMK Negeri 1 Surabaya</h5>
                <h6 style="color: grey">Rekayasa Perangkat Lunak 2</h6>
            </a>
            <div>
                <form class="d-flex justify-content-end" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>

        </div>
    </nav>

    <nav class="navbar fixed-top navbar-expand-lg bg-light" style="margin-top: 95px ">
        <div class="container-fluid">
            <a class="navbar-brand" href="/dashboard_siswa">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Data Umum
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/jadwal_siswa">Jadwal Pelajaran</a></li>
                            <li><a class="dropdown-item" href="/surat_siswa">Surat Perizinan</a></li>
                            <li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Absensi
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/harian_siswa">Harian</a></li>
                            <li><a class="dropdown-item" href="/bulanan_siswa">Bulanan</a></li>
                            <li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Tentang Kami
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/detail_siswa">Detail Siswa</a></li>
                            <li><a class="dropdown-item" href="/detail_pengajar">Detail Pengajar</a></li>
                            <li>
                        </ul>
                    </li>

                </ul>
                    <a class="nav-link " href="/login_pilih" style="color:whiteb">Logout</span></a>
            </div>
        </div>
    </nav>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>
