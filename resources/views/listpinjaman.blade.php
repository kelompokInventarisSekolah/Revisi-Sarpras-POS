<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Inventaris Sarana Sekolah</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('template/assets/favicon.ico') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('template/css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body id="page-top">

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="{{route('nampil')}}"><img src="{{ asset('template/img/logo_sarpras.png') }}"
                    alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">

                    <li class="nav-item"><a class="nav-link" href="#listpinjaman">List Pinjaman</a>
                    <li>

                        <div class="dropdown nav-tem ">
                            <button class="btn btn-transparent dropdown-toggle text-white" type="button"
                                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>

                            </ul>
                        </div>
                        {{-- <div class="dropdown nav-tem ms-2">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Barang yang DI Pinjam
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            @foreach ($pembeli as $item)
                                
                            <li>
                                <a class="dropdown-item" href="">{{}}</a>
                    </li>

                    @endforeach
                </ul>
            </div> --}}




        </div>
        </div>
        </li>
        </ul>
        </div>
        </div>
    </nav>

    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Selamat Datang di Starbhak Sarpras!</div>
        </div>
    </header>

    <section class="page-section bg-light" id="listpinjaman">
        <div class="container">
            <div class="text-center" data-aos="zoom-in">
                <h2 class="section-heading text-uppercase">Perlengkapan</h2>
                <h3 class="section-subheading text-muted">Berikut Isi Barang-barang:</h3>
            </div>
            <div class="row">
                <table class="table table-info table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama_barang</th>
                            <th scope="col">Tanggal Pinjaman</th>
                            <th scope="col">QR</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($keranjang as $item)
                            
                        <tr>
                            <th scope="row">1</th>
                            <td>{{$item->nama->nama_barang}}</td>
                            <td>{{$item->created_at}}</td>
                            <td><a href="{{ route('generate1',$item->id) }}" class="btn btn-info">Generate QR</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Team-->
    <section class="page-section bg-light" id="team">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="text-center" data-aos="zoom-in">
                <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                <h3 class="section-subheading text-muted"> Kelompok 1 Inventaris Sekolah </h3>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row" data-aos="zoom-in">
                        <div class="col-lg-4">
                            <div class="team-member">
                                <img class="mx-auto rounded-circle" src="{{ asset('template/img/potoarya.jpg') }}"
                                    alt="..." />
                                <h4>Arya Yudha Zachri</h4>
                                <p class="text-muted">Leader & Front End</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="team-member">
                                <img class="mx-auto rounded-circle" src="{{ asset('template/img/potozharfan.jpg') }}"
                                    alt="..." />
                                <h4>Fikri Zharfan Daryanto</h4>
                                <p class="text-muted">Front End</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="team-member">
                                <img class="mx-auto rounded-circle" src="{{ asset('template/img/potoiqbal.jfif') }}"
                                    alt="..." />
                                <h4>Muhammad Iqbal</h4>
                                <p class="text-muted">Back End</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row" data-aos="zoom-in">
                        <div class="col-lg-4">
                            <div class="team-member">
                                <img class="mx-auto rounded-circle" src="{{ asset('template/img/potoerni.jpg') }}"
                                    alt="..." />
                                <h4>Erni Septafia Andriani</h4>
                                <p class="text-muted">Front End</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="team-member">
                                <img class="mx-auto rounded-circle" src="{{ asset('template/img/potolaila.jpg') }}"
                                    alt="..." />
                                <h4>Nurlaila Nabillah</h4>
                                <p class="text-muted">Front End</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="team-member">
                                <img class="mx-auto rounded-circle" src="{{ asset('template/img/potozia.jpg') }}"
                                    alt="..." />
                                <h4>Nur Fauziah Putri Jannatin</h4>
                                <p class="text-muted">Front End</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row" data-aos="zoom-in">
                        <div class="col-lg-4">
                            <div class="team-member">
                                <img class="mx-auto rounded-circle" src="{{ asset('template/img/poropadil.jpeg') }}"
                                    alt="..." />
                                <h4>Muhammad Rivaldi Rakasiwi</h4>
                                <p class="text-muted">Back End</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="team-member">
                                <img class="mx-auto rounded-circle" src="{{ asset('template/img/potoesa1.jpg') }}"
                                    alt="..." />
                                <h4>Reyhan Esa Adi Nugroho</h4>
                                <p class="text-muted">ERD</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="team-member">
                                <img class="mx-auto rounded-circle" src="{{ asset('template/img/potopipe.jpg') }}"
                                    alt="..." />
                                <h4>Five Adil Wicaksono</h4>
                                <p class="text-muted">ERD</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; Kelompok 1 <?php  
                    echo date("Y"); 
                    ?></div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('template/js/scripts.js') }}"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();

        // Swal.fire({
        // icon: 'info',
        // title: 'Sabar Kawan',
        // text: 'ScrenShoot QR Ini Berikan Petugas',
        // footer: '<a  class="btn btn-info" href="">Generate QR</a>'
        // })

    </script>

</body>

</html>
