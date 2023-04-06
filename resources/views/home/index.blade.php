<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>Lelang Masyarakat</title>
    <!--

Lava Landing Page

https://templatemo.com/tm-540-lava-landing-page

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="landingpage/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="landingpage/css/font-awesome.css">
    <link rel="stylesheet" href="landingpage/css/templatemo-lava.css">
    <link rel="stylesheet" href="landingpage/css/owl-carousel.css">

</head>

<body>
    @include('components.home.navbar')
    @include('components.home.welcome')
    @include('components.home.modal')

    <div class="text-center mb-8">
        <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Cari dan Tawar Barang di
            <em style="color:rgb(245, 209, 89);">LELANGKU</em>
        </h1>
    </div>


    <section class="section" id="about">
        <div>
        <div class=""
            data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
            <div class="features-item ">
                <div class="row ">
                    @foreach ($lelang as $item) 
                        <div class="features-icon col-md-4">
                           
                            @if ($item->barang->gambar_15480)
                                <img src='{{ url('storage/' . $item->barang->gambar_15480) }}' alt="Image"
                                style="margin-top: -30px; height:65%; width:65%;">
                            @endif
                            <h4>{{ $item->barang->nama_barang_15480 }}</h4>
                            <p>{{ $item->barang->deskripsi_15480 }}</p>
                            <a class="main-button text-white" data-toggle="modal"
                            data-target="#tawarModal{{ $item->id_15480 }}">Tawar</a>
                            <a class="main-button text-white" data-toggle="modal"
                            data-target="#historyModal{{ $item->id_15480 }}">History</a> 
                        </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
   
    </section>
    <!-- ***** Features Big Item End ***** -->

    <div class="left-image-decor"> </div>

    <div class="right-image-decor"></div>



    <!-- ***** Footer  ***** -->
    <footer id="contact-us">
        <div class="container">
            <div class="footer-content ">
                <div class="row d-flex justify-content-center">
                    <div class="right-content col-lg-6 col-md-12 col-sm-12">
                        <h2>More About <em>LelangKu</em></h2>
                        <p>Lelang adalah proses membeli dan menjual barang atau jasa dengan cara menawarkan kepada
                            penawar,
                            peserta lelang memberikan penawaran harga lebih tinggi, dan kemudian barang terjual kepada
                            penawar harga tertinggi.
                            Lelang online dilakukan di website ini dan peserta lelang bisa mengikutinya secara daring.
                            Jenis lelang ini lebih digemari, mengingat tidak memerlukan waktu dan tenaga yang besar
                            karena bisa dilakukan di mana saja
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="landingpage/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="landingpage/js/popper.js"></script>
    <script src="landingpage/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="landingpage/js/owl-carousel.js"></script>
    <script src="landingpage/js/scrollreveal.min.js"></script>
    <script src="landingpage/js/waypoints.min.js"></script>
    <script src="landingpage/js/jquery.counterup.min.js"></script>
    <script src="landingpage/js/imgfix.min.js"></script>

    <!-- Global Init -->
    <script src="landingpage/js/custom.js"></script>

</body>

</html>
