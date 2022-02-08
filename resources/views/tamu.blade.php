<!--
=========================================================
* Material Dashboard 2 PRO - v3.0.2
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-dashboard-pro
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
    <title>
        Tamu
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="../../assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />

    <style>
        html {
            scroll-behavior: smooth;
        }

    </style>
</head>

<body class="g-sidenav-show  bg-gray-200">
    <!-- Navbar -->
    <nav
        class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
        <div class="container">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white"
                href="../../pages/dashboards/analytics.html">
                SMP & SMK IDN
            </a>
        </div>
    </nav>
    <!-- End Navbar -->

    {{-- Main Image --}}
    <div class="page-header bg-gradient-dark position-relative m-3 border-radius-xl min-vh-50"
        style="background-image: url(https://images.unsplash.com/photo-1641919702567-e2efb46c8fb4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2874&q=80);">
        <span class="mask bg-gradient-dark opacity-2"></span>

        <div class="container py-50 postion-relative z-index-2">
            <div class="row">
                <div class="col-md-6 mx-auto text-center">
                    <h1 class="text-white">Buku Tamu</h1>
                    <p class="text-white">Selamat Datang di SMP & SMK IDN</p>
                </div>
            </div>
        </div>

    </div>

    {{-- End Main Image --}}

    <div class="container-fluid px-5 my-6">
        <div class="card mt-n8">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-4 col-md-6 col-7 mx-auto text-center">
                    </div>
                </div>
                <div class="tab-content tab-space">
                    <div class="tab-pane active">
                        <div class="row">
                            <div class="col-lg-12 mb-lg-0 mb-4">
                                <div class="card shadow-lg">
                                    <span class="badge rounded-pill bg-light text-dark w-30 mt-n2 mx-auto">Tamu</span>
                                    <div class="card-header text-center pt-4 pb-3">
                                        <h2 class="font-weight-bold mt-2">
                                            Daftar Tamu
                                        </h2>
                                    </div>

                                    <div class="card-body pt-0">
                                        {{-- Form --}}
                                        <form action="{{route('tamu.store')}}" method="post">
                                            @csrf
                                            <div style="padding: 50px">

                                                <div class="input-group input-group-outline">
                                                    <label class="form-label">Nama</label>
                                                    <input name="nama" type="text" class="form-control">
                                                </div>

                                                <div class="mt-4">
                                                    <div class="input-group input-group-outline">
                                                        <label class="form-label">Asal</label>
                                                        <input name="asal" type="text" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="mt-4">
                                                    <div class="input-group input-group-outline">
                                                        <label class="form-label">Keperluan</label>
                                                        <input name="keperluan" type="text" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="mt-4">
                                                    <div class="input-group input-group-outline">
                                                        <label class="form-label">Jumlah Tamu</label>
                                                        <input name="jumlah_tamu" type="number" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="mt-4">
                                                    <div class="input-group input-group-outline">
                                                        <label class="form-label">Nomor Hp</label>
                                                        <input name="nomor_hp" type="number" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="input-group input-group-static mb-4 mt-4">
                                                    <label for="exampleFormControlSelect1" class="ms-0">Jenis
                                                        Kendaraan</label>
                                                    <select name="jenis_kendaraan" class="form-control" id="exampleFormControlSelect1">
                                                        <option value="">--- Pilih Jenis Kendaraan ---</option>
                                                        <option value="Kendaraan Roda 2">Kendaraan Roda 2</option>
                                                        <option value="Kendaraan Roda 4 atau Lebih">Kendaraan Roda 4 atau Lebih</option>
                                                    </select>
                                                </div>

                                                <div class="mt-4 text-center">
                                                    <a type="button" class="btn btn-primary"
                                                        onClick="document.getElementById('adab').scrollIntoView();">Next</a>
                                                </div>

                                            </div>

                                            {{-- Adab --}}
                                            <div class="row mt-5" style="padding: 0 50px 0 50px" id="adab">
                                                <div class="col-md-6 mx-auto text-center">
                                                    <h2>Peraturan & Adab Berkunjung</h2>
                                                    <p>Sebelum memasuki area pesantren harap membaca dan memahami adab dan
                                                        peraturan berikut</p>
                                                </div>

                                                <div class="row mb-5" style="padding: 50px 0 50px 0">
                                                    <div class="col-md-8 mx-auto">
                                                        <div class="accordion" id="accordionRental">

                                                            <div class="accordion-item my-2">
                                                                <h5 class="accordion-header" id="headingOne">
                                                                    I. Melapor Kepada Security
                                                                </h5>
                                                                <div id="collapseOne"
                                                                    class="accordion-collapse collapse show"
                                                                    aria-labelledby="headingOne"
                                                                    data-bs-parent="#accordionRental">
                                                                    <div class="accordion-body text-sm opacity-8">
                                                                        Sebelum memasuki kawasan Pesantren, terlebih dahulu
                                                                        diharuskan untuk
                                                                        melapor kepada Security dan meninggalkan kartu
                                                                        identitas.
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="accordion-item my-2">
                                                                <h5 class="accordion-header" id="headingOne">
                                                                    II. Mengikuti Budaya Islam
                                                                </h5>
                                                                <div id="collapseOne"
                                                                    class="accordion-collapse collapse show"
                                                                    aria-labelledby="headingOne"
                                                                    data-bs-parent="#accordionRental">
                                                                    <div class="accordion-body text-sm opacity-8">
                                                                        a. Tidak membuang sampah sembarangan, <br>
                                                                        b. Berbusana muslim atau sopan dan rapi, <br>
                                                                        c. Menyesuaian dengan lingkungan pesantren.
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="accordion-item my-2">
                                                                <h5 class="accordion-header" id="headingOne">
                                                                    III. Ketika Keluar Masuk Pesantren
                                                                </h5>
                                                                <div id="collapseOne"
                                                                    class="accordion-collapse collapse show"
                                                                    aria-labelledby="headingOne"
                                                                    data-bs-parent="#accordionRental">
                                                                    <div class="accordion-body text-sm opacity-8">
                                                                        Membuka jendela mobil atau membuka helm ketika
                                                                        keluar masuk Pesantren
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="accordion-item my-2">
                                                                <h5 class="accordion-header" id="headingOne">
                                                                    IV. Memakirkan Kendaraan
                                                                </h5>
                                                                <div id="collapseOne"
                                                                    class="accordion-collapse collapse show"
                                                                    aria-labelledby="headingOne"
                                                                    data-bs-parent="#accordionRental">
                                                                    <div class="accordion-body text-sm opacity-8">
                                                                        Memarkir kendaraan dengan rapi dan pada tempat yang
                                                                        telah disediakan.
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="mt-4 text-center">
                                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- End Adab --}}

                                        </form>
                                        {{-- End Form --}}



                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>

        {{-- Footer --}}
        <footer class="footer py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-4 mx-auto text-center">
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                            Company
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                            About Us
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                            Team
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                            Products
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                            Blog
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                            Pricing
                        </a>
                    </div>
                    <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                            <span class="text-lg fab fa-dribbble"></span>
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                            <span class="text-lg fab fa-twitter"></span>
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                            <span class="text-lg fab fa-instagram"></span>
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                            <span class="text-lg fab fa-pinterest"></span>
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                            <span class="text-lg fab fa-github"></span>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 mx-auto text-center mt-1">
                        <p class="mb-0 text-secondary">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> Material by Creative Tim.
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        {{-- End Footer --}}
    </div>

    <!--   Core JS Files   -->
    <script src="../../assets/js/core/popper.min.js"></script>
    <script src="../../assets/js/core/bootstrap.min.js"></script>
    <script src="../../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="../../assets/js/plugins/parallax.min.js"></script>
    <script>
        if (document.getElementsByClassName('page-header')) {
            window.onscroll = debounce(function() {
                var scrollPosition = window.pageYOffset;
                var bgParallax = document.querySelector('.page-header');
                var oVal = (window.scrollY / 3);
                bgParallax.style.transform = 'translate3d(0,' + oVal + 'px,0)';
            }, 6);
        }
    </script>
    <!-- Kanban scripts -->
    <script src="../../assets/js/plugins/dragula/dragula.min.js"></script>
    <script src="../../assets/js/plugins/jkanban/jkanban.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../../assets/js/material-dashboard.min.js?v=3.0.2"></script>

</body>

</html>
