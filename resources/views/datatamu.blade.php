<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

@section('title')
Data
@endsection

@section('subtitle')
Data Tamu
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
                                        <table class="table table-flush" id="datatable-basic">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Tanggal</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Jam</th>
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
                                                <tr>
                                                    <td class="text-sm font-weight-normal">{{$row->created_at->format('d M Y')}}</td>
                                                    <td class="text-sm font-weight-normal">{{$row->created_at->format('H:i')}}</td>
                                                    <td class="text-sm font-weight-normal">{{$row->nama}}</td>
                                                    <td class="text-sm font-weight-normal">{{$row->asal}}</td>
                                                    <td class="text-sm font-weight-normal">{{$row->keperluan}}</td>
                                                    <td class="text-sm font-weight-normal">{{$row->jumlah_tamu}} Orang</td>
                                                    <td class="text-sm font-weight-normal">{{$row->nomor_hp}}</td>
                                                    <td class="text-sm font-weight-normal">{{$row->jenis_kendaraan}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
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
    {{-- End Script --}}

</body>

</html>
