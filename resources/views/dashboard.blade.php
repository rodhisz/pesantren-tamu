<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

@section('title')
Dashboard
@endsection

@section('subtitle')
Dashboard
@endsection

<body class="g-sidenav-show  bg-gray-200">

    @include('includes.sidebar')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('includes.navbar')
        <!-- End Navbar -->

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-lg-12 position-relative z-index-2">
                    <script>
                        console.log(@json($tamus))
                    </script>

                    {{-- Chart Card --}}
                    <div class="row mb-4">
                        <div class="col-lg-12 col-md-12 mt-4 mb-4">
                            <div class="card z-index-2 ">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                                    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                        <div class="chart">
                                            <canvas id="chartBar-tamu" height="170"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h6 class="mb-0 ">Jumlah Kunjungan Tamu Tahun {{ now()->year }}</h6>
                                    <p class="text-sm ">Jumlah Kunjungan IDN Boarding School Setiap Bulan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End Chart Card --}}

                    {{-- Table Card --}}
                    <div class="card mb-4 ">
                        <div class="d-flex">
                            <div
                                class="icon icon-shape icon-lg bg-gradient-success shadow text-center border-radius-xl mt-n3 ms-4">
                                <i class="fas fa-users opacity-10"></i>
                            </div>
                            <h6 class="mt-3 mb-2 ms-3 ">Data Tamu</h6>
                        </div>
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-lg-12 col-md-7">
                                    <div class="table-responsive">
                                        <table class="table table-flush">
                                            <thead class="thead-light">

                                                <tr class="text-center">
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Nama</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Asal</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Keperluan</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Jumlah Tamu</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Nomor HP</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Jenis Kendaraan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($tamu as $row)
                                                <tr class="text-center">
                                                    <td class="text-sm font-weight-normal">{{$row->nama}}</td>
                                                    <td class="text-sm font-weight-normal">{{$row->asal}}</td>
                                                    <td class="text-sm font-weight-normal">{{$row->keperluan}}</td>
                                                    <td class="text-sm font-weight-normal">{{$row->jumlah_tamu}}</td>
                                                    <td class="text-sm font-weight-normal">{{$row->nomor_hp}}</td>
                                                    <td class="text-sm font-weight-normal">{{$row->jenis_kendaraan}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="d-flex justify-content-end me-5">
                                        <a href="/data-tamu" class="btn btn-primary">View More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End Table Card --}}

                </div>
            </div>
        </div>
    </main>

    {{-- Script --}}
    @include('includes.script')

    <script>
        var ctx = document.getElementById("chartBar-tamu").getContext("2d");

        new Chart(ctx, {
            type: "bar",
            data: {
                labels: [
                "Januari",
                "Februari",
                "Maret",
                "April",
                "Mei",
                "Juni",
                "Juli",
                "Agustus",
                "September",
                "October",
                "November",
                "Desember",
                ],
                datasets: [{
                    label: "Tamu",
                    tension: 0.4,
                    borderWidth: 0,
                    borderRadius: 4,
                    borderSkipped: false,
                    backgroundColor: "rgba(255, 255, 255, .8)",
                    data: <?php echo json_encode($datas)?>,
                    maxBarThickness: 6
                }, ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            suggestedMin: 0,
                            suggestedMax: 500,
                            beginAtZero: true,
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                            color: "#fff"
                        },
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });

    </script>
    {{-- End Script --}}

</body>

</html>
