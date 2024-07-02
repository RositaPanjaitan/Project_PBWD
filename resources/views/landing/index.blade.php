<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CariKost</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
   @include('componen.navbar')
    <section class="header mb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="jumbo-header mb-30">
                        Cari Kost<br>
                        Nyaman Terjangkau
                    </h1>
                    <p class="paragraph mb-30">
                        Kost nyaman dan startegis dengan fasilitas lengkap<br>
                        cocok untuk mahasiswa dan pekerja
                    </p>
                    <div class="row stats text-center">
                        <div class="col-lg-4 item">
                            <h3 class="big-header">
                                200
                            </h3>
                            <p class="paragraph">
                                Koskosan
                            </p>
                        </div>
                        <div class="col-lg-4 item">
                            <h3 class="big-header">
                                95
                            </h3>
                            <p class="paragraph">
                                Testimoni
                            </p>
                        </div>
                        <div class="col-lg-4 item">
                            <h3 class="big-header">
                                1jt
                            </h3>
                            <p class="paragraph">
                                Menyukai
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="images/banner.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="best-items">
        <div class="container">
            <div class="row text-center mb-50">
                <div class="col-lg-12">
                    <img src="images/ic_best.svg" height="42" alt="" class="mb-16">
                    <h3 class="big-header">
                        Pilihan Terbaik
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="item">
                        <a href="{{ route('landing.details')}}">
                            <img src="images/kos 1.jpeg" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="{{ route('landing.details')}}">
                                <h3 class="small-header mb-2">
                                    Silver
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="images/ic_loc.svg" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                        Jl.DurinJangak
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        Rp700.000<span class="extra-small-paragraph">/bulan</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="{{ route('landing.details')}}">
                            <img src="images/kos 2.jpg" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="{{ route('landing.details')}}">
                                <h3 class="small-header mb-2">
                                    Jingga
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="images/ic_loc.svg" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                        Jl.TunasMekar
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        Rp500.000<span class="extra-small-paragraph">/bulan</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="{{ route('landing.details')}}">
                            <img src="images/kos 3.jpg" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="{{ route('landing.details')}}">
                                <h3 class="small-header mb-2">
                                    Army
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="images/ic_loc.svg" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                        Jl.Tuntungan1
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        Rp600.000<span class="extra-small-paragraph">/bulan</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="{{ route('landing.details')}}">
                            <img src="images/kos 4.jpg" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="{{ route('landing.details')}}">
                                <h3 class="small-header mb-2">
                                    Black Pink
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="images/ic_loc.svg" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                        Jl.Tuntungan2
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        Rp500.000<span class="extra-small-paragraph">/bulan</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="{{ route('landing.details')}}">
                            <img src="images/kos 5.jpg" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="{{ route('landing.details')}}">
                                <h3 class="small-header mb-2">
                                    White
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="images/ic_loc.svg" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                        Jl.TanjungAnom
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        Rp600.000<span class="extra-small-paragraph">/bulan</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="{{ route('landing.details')}}">
                            <img src="images/kos 6.jpg" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="{{ route('landing.details')}}">
                                <h3 class="small-header mb-2">
                                    Coral
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="images/ic_loc.svg" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                        Jl.PancurBatu
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        Rp500.000<span class="extra-small-paragraph">/bulan</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="{{ route('landing.details')}}">
                            <img src="images/kos 7.jpg" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="{{ route('landing.details')}}">
                                <h3 class="small-header mb-2">
                                    Yoko
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="images/ic_loc.svg" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                        Jl.Simalingkar
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        Rp800.000<span class="extra-small-paragraph">/bulan</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="{{ route('landing.details')}}">
                            <img src="images/kos 8.jpg" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="{{ route('landing.details')}}">
                                <h3 class="small-header mb-2">
                                    Arashi
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="images/ic_loc.svg" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                        Jl.Pembangunan
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        Rp700.000<span class="extra-small-paragraph">/bulan</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>