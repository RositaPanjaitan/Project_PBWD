<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
@include('componen.navbar')
    <section class="house-details pb-5">
        <div class="container">
            <div class="row align-items-center mb-30">
                <div class="col-lg-6">
                    <h1 class="jumbo-header">
                        Silver
                    </h1>
                    <p class="paragraph">
                        Dimana mimpi dimulai tanpa gangguan apapun
                    </p>
                </div>
                <div class="col-lg-6 header">
                    <h3 class="small-header">
                        (300)
                    </h3>
                    <div class="rating">
                        <img src="images/ic_star.svg" height="28" alt="">
                        <img src="images/ic_star.svg" height="28" alt="">
                        <img src="images/ic_star.svg" height="28" alt="">
                        <img src="images/ic_star.svg" height="28" alt="">
                        <img src="images/ic_star_inactive.svg" height="28" alt="">
                    </div>
                </div>
            </div>
            <div class="row gallery">
                <div class="col-lg-6 mb-30">
                    <img src="images/Depan.jpeg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 mb-30">
                    <img src="images/Kamar.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 mb-30">
                    <img src="images/Dapur.jpeg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 mb-30">
                    <img src="images/Kamar Mandi.jpeg" class="img-fluid" alt="">
                </div>
            </div>
            <div class="row house-informations">
                <div class="col-lg-7">
                    <h3 class="small-header mb-10">
                       Tentang Kost Ini
                    </h3>
                    <p class="paragraph mb-30">
                    Kost ini terletak strategis di pusat kota dengan fasilitas lengkap seperti lemari, gratis laundri , akses WiFi, dan area dapur bersama. Cocok untuk mahasiswa dan pekerja dengan suasana yang ramah dan keamanan terjamin.
                    </p>
                    <h3 class="small-header mb-10">
                        Fasilitas
                    </h3>
                    <div class="row features">
                        <div class="col-lg-10">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img src="images/ic_wifi.svg" class="icon" alt="">
                                    <div class="info">
                                        <h3 class="small-header mb-0">
                                            Free WiFi
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <img src="images/ic_card.svg" class="icon" alt="">
                                    <div class="info">
                                        <h3 class="small-header mb-0">
                                            Keamanan
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <img src="images/ic_bell.svg" class="icon" alt="">
                                    <div class="info">
                                        <h3 class="small-header mb-0">
                                           Dapur
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <img src="images/ic_park.svg" class="icon" alt="">
                                    <div class="info">
                                        <h3 class="small-header mb-0">
                                            Taman
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-4">
                    <div class="booking">
                        <h3 class="small-header mb-16">
                            Mulai Reservasi
                        </h3>
                                <form action="{{ route('reservasi.submit') }}" method="POST">
            @csrf
            <div class="mb-3">
                <input placeholder="Nama" type="text" class="form-control" name="nama" required>
            </div>
            <div class="mb-3">
                <input placeholder="No HP" type="tel" class="form-control" name="no_hp" required>
            </div>
            <div class="mb-3">
                <input placeholder="Choose Date" type="date" class="form-control" name="tanggal" required>
            </div>
            <div class="mb-4">
                <input id="bulan" placeholder="Berapa Bulan?" type="number" class="form-control" name="bulan" required>
            </div>
            <h3 class="small-header mb-16">
                Pembayaran
            </h3>
            <div class="item d-flex justify-content-between">
                <p class="title paragraph2">Harga</p>
                <p class="value medium-header" id="harga-total">Rp 700.000 per bulan</p>
            </div>
            <button type="submit" class="btn btn-primary w-100 mt-3">Booking</button>
        </form>

        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <script>
            document.getElementById('bulan').addEventListener('input', function() {
                const bulan = this.value;
                const hargaPerBulan = 700000;
                const totalHarga = bulan * hargaPerBulan;
                document.getElementById('harga-total').innerText = `Rp ${totalHarga.toLocaleString()}`;
            });

            document.addEventListener('DOMContentLoaded', function() {
                if ({{ session('success') ? 'true' : 'false' }}) {
                    alert('Reservasi berhasil dibuat! Tunggu pemberitahuan Selanjutnya');
                }
            });
        </script>

                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
