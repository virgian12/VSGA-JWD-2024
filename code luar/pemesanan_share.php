<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Junior Web Developer</title>
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container mt-3">
    <div>
        <div class="px-5 py-4 bg-primary text-white rounded">
            <h1>Pariwisata Indonesia</h1>
            <p>Wonderful Indonesia</p>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-dark mt-3" data-bs-theme="dark">7
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">Beranda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="pendaftaran.php">Pendaftaran Paket Wisata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="rekap.php">Daftar Pesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="tentangkami.php">Tentang Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row mt-3">
        <div class="col-12 col-md-9">
            <h2>Form Pemesanan Paket Wisata</h2>
            <form action="simpan.php" method="post" autocomplete="off">
                <div class="row">
                    <div class="mb-3 col-12 col-md-6">
                        <label for="nama-pemesan" class="form-label">Nama Pemesan</label>
                        <input type="text" class="form-control form-control-sm" id="nama-pemesan" name="nama-pemesan" placeholder="" required>
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <label for="nama-paket" class="form-label">Nama Paket</label>
                        <select class="form-select" id="nama-paket" id="nama-paket" onchange="updateHargaPaket()" aria-label="Default select example">
                            <option selected>Pilih Paket</option>
                            <option value="1">Paket 1</option>
                            <option value="2">Paket 2</option>
                            <option value="3">Paket 3</option>
                            <option value="4">Paket 4</option>
                        </select>
                        <!-- <input type="text" class="form-control form-control-sm" id="no-hp" name="no-hp" placeholder=""> -->
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-12 col-md-6">
                        <label for="tgl-pesan" class="form-label">Tanggal Pemesanan</label>
                        <input type="date" class="form-control form-control-sm" id="tgl-pesan" name="tgl-pesan"  placeholder="">
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <label for="durasi" class="form-label">Durasi Perjalanan</label>
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control form-control-sm" id="durasi" name="durasi" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2">hari</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-12 col-lg-3">
                        <label for="jumlah-peserta" class="form-label">Jumlah Peserta</label>
                        <div class="input-group input-group-sm">
                            <input type="number" class="form-control form-control-sm" name="jumlah-peserta" aria-describedby="basic-addon2" id="jumlah-peserta">
                            <span class="input-group-text" id="basic-addon2">orang</span>
                        </div>
                    </div>
                    <div class="mb-3 col-12 col-lg-9">
                        <div class="">
                            <label class="form-label">Pelayanan Paket Perjalanan</label>
                            <div class="d-lg-flex justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Y" id="penginapan" name="penginapan" onclick="handlePenginapan(this)">
                                    <label class="form-check-label" for="penginapan">
                                        Penginapan (Rp. 1.000.000)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Y" id="transportasi" name="transportasi" onclick="handleTransportasi(this)">
                                    <label class="form-check-label" for="transportasi">
                                        Transportasi (Rp. 1.200.000)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Y" id="makanan" name="makanan" onclick="handleMakanan(this)">
                                    <label class="form-check-label" for="makanan">
                                        Makanan (Rp. 500.000)
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="mb-3 col-12 col-md-4">
                        <label for="harga-paket" class="form-label">Harga Paket</label>
                        <div class="input-group input-group-sm">
                            <span class="input-group-text" id="basic-harga">Rp</span>
                            <input type="text" class="form-control form-control-sm" id="harga-paket" name="harga-paket" aria-label="Username" aria-describedby="basic-harga" required onkeydown="return false;">
                        </div>
                    </div>
                    <div class="mb-3 col-12 col-md-4">
                        <label for="harga-layanan" class="form-label">Harga Layanan</label>
                        <div class="input-group input-group-sm">
                            <span class="input-group-text" id="basic-harga">Rp</span>
                            <input type="text" class="form-control form-control-sm" id="harga-layanan" name="harga-layanan" aria-label="Username" aria-describedby="basic-harga" required onkeydown="return false;">
                        </div>
                    </div>
                    <div class="mb-3 col-12 col-md-4">
                        <label for="jumlah-tagihan" class="form-label">Total Tagihan</label>
                        <div class="input-group input-group-sm">
                            <span class="input-group-text" id="basic-tagihan">Rp</span>
                            <input type="text" class="form-control form-control-sm" id="jumlah-tagihan" name="jumlah-tagihan" aria-label="Username" aria-describedby="basic-tagihan" required onkeydown="return false;">
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-sm btn-primary" value="simpan">
                <button type="button" class="btn btn-sm btn-success" onclick="hitung()">Hitung</button>
                <button type="reset" class="btn btn-sm btn-danger">Reset</button>
            </form>
        </div>

        <div class="col-12 col-md-3">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Paket Wisata 1</h5>
            <div class="text-center ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/y_ncS5IVWgA" title="Paket Tour Ke Bali 4 Hari 3 Malam BTH 507 Cuma 1,9 Jutaan!!! Wow Murah Banget" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">Paket Wisata 2</h5>
            <div class="text-center ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/X4u1OWeGKtI" title="WISATA BALI TERBARU || TEMPAT-TEMPAT WISATA BALI YANG WAJIB DI KUNJUNGI || WF OFFICIAL"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

    </div>

<!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted">
    <!-- Section: Social media -->
    <span></span>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5 pt-4">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3"></i>Kementerian Pariwisata
                    </h6>
                    <p>
                        Kementerian Pariwisata dan Ekonomi Kreatif memiliki visi menjadikan Indonesia sebagai negara tujuan pariwisata kelas dunia. Untuk itu, Kemenparekraf memiliki misi mengembangkan destinasi pariwisata kelas dunia dan melakukan pemasaran dengan berorientasi kepada wisawatan
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Menu
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Tentang kami</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Hubungi kami</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Berita</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Fitur</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Wisata
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Alam</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Budaya</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Olahraga</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Kuliner</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Hubungi</h6>
                    <p><i class="fa fa-home me-3"></i> Jl. Medan Merdeka Barat No. 17, RT/RW 02/03, Gambir, Daerah Khusus Ibukota Jakarta 10110, Indonesia.</p>
                    <p>
                        <i class="fa fa-envelope me-3"></i>
                        info@example.com
                    </p>
                    <p><i class="fa fa-phone me-3"></i> + 61 234 567 88</p>
                    <p><i class="fa fa-print me-3"></i> + 61 234 567 89</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2024 Copyright:
        <a class="text-reset fw-bold" href="https://kemenparekraf.go.id">Kementerian Pariwisata</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->



</div>
<!-- <script src="assets/js/bootstrap.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>