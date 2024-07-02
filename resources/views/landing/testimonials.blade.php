<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Testimoni - CariKost</title>
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
    <section class="testimoni-section py-5">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col-lg-12">
                    <h3 class="big-header">Testimoni Pengguna</h3>
                    <p class="paragraph">Apa yang mereka katakan tentang kami</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="paragraph">"Sangat nyaman dan strategis. Fasilitas lengkap dan harga terjangkau. Sangat puas dengan pelayanannya!"</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="images/Rosita.jpg" alt="" class="rounded-circle me-3" width="50" height="50">
                                <div>
                                    <h5 class="small-header mb-0">Rosita Panjaitan</h5>
                                    <p class="extra-small-paragraph mb-0">Mahasiswa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="paragraph">"Tempatnya bersih dan aman. Saya sangat merekomendasikan CariKost untuk mencari kos-kosan terbaik."</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="images/Rani.jpg" alt="" class="rounded-circle me-3" width="50" height="50">
                                <div>
                                    <h5 class="small-header mb-0">Rani Rahmadani</h5>
                                    <p class="extra-small-paragraph mb-0">Mahasiswa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="paragraph">"Proses pencarian dan booking sangat mudah dan cepat. Adminnya juga sangat responsif."</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="images/user3.jpg" alt="" class="rounded-circle me-3" width="50" height="50">
                                <div>
                                    <h5 class="small-header mb-0">Siti Rohmah</h5>
                                    <p class="extra-small-paragraph mb-0">Mahasiswa</p>
                                </div>
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
