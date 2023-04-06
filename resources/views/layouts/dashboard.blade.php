<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Petugas </title>
    <link href="/petugass/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="/petugass/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <div class="modal fade" id="generateLaporanModal" tabindex="-1" aria-labelledby="generateLaporanModalLabel"
    {{-- <div class="modal fade" id="generateLaporanModal" tabindex="-1" aria-labelledby="generateLaporanModalLabel" --}}
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-dark" id="generateLaporanModalLabel">Generate Laporan
                    </h1>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">X</button>
                </div>
                <form action="{{ route('lelang.export') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-4">
                            <label class="form-label" for="date_start">Tanggal Mulai</label>
                            <input type="date" class="form-control" name="date_start" id="date_start" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="date_finish">Tanggal Berakhir</label>
                            <input type="date" class="form-control" name="date_finish" id="date_finish" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="status">Status</label>
                            <select name="status" class="form-control" id="status" required>
                                <option value="semua">Semua Status</option>
                                <option value="dibuka">Dibuka</option>
                                <option value="ditutup">Ditutup</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn text-white"
                            style="background-color: #F58452; text-decoration:none; margin-left:15px;">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="wrapper">
        @include('components.dashboard.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('components.dashboard.topbar')
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            @include('components.dashboard.footer')
        </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    {{-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div> --}}

    <script src="/petugass/vendor/jquery/jquery.min.js"></script>
    <script src="/petugass/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/petugass/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="/petugass/js/sb-admin-2.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="/petugass/demo/chart-area-demo.js"></script>
    <script src="/petugass/demo/chart-pie-demo.js"></script>

</body>

</html>
