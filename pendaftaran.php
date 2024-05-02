<?php include  "layouts/header.php" ?>

  <div class="container mt-3">
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
                        <select class="form-select" id="nama-paket" name="nama-paket" onchange="updateHargaPaket()" aria-label="Default select example">
                            <option selected>Pilih Paket</option>
                            <option value="1">Paket 1</option>
                            <option value="2">Paket 2</option>
                            <option value="3">Paket 3</option>
                            <option value="4">Paket 4</option>
                        </select>
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
                            <input type="number" class="form-control form-control-sm" id="durasi" name="durasi" aria-describedby="basic-addon2" id="durasi" onclick="handleHari(this)">
                            <span class="input-group-text" id="basic-addon2">hari</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-12 col-lg-3">
                        <label for="jumlah-peserta" class="form-label">Jumlah Peserta</label>
                        <div class="input-group input-group-sm">
                            <input type="number" class="form-control form-control-sm" name="jumlah-peserta" aria-describedby="basic-addon2" id="jumlah-peserta" onclick="handlePeserta(this)">
                            <span class="input-group-text" id="basic-addon2">orang</span>
                        </div>
                    </div>

                    <div class="mb-3 col-12 col-lg-9">
                        <div class="">
                            <label class="form-label">Layanan Tambahan</label>
                            <div class="d-lg-flex justify-content-between">

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Y" id="penginapan" name="penginapan" onclick="handlePenginapan(this)"> 
                                    <label class="form-check-label" for="penginapan">
                                        Penginapan (Rp. 300.000)
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Y" id="transportasi" name="transportasi" onclick="handleTransportasi(this)">
                                    <label class="form-check-label" for="transportasi">
                                        Transportasi (Rp. 200.000)
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Y" id="makanan" name="makanan" onclick="handleMakanan(this)">
                                    <label class="form-check-label" for="makanan">
                                        Makanan (Rp. 150.000)
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
                            <span class="input-group-text" id="basic-paket">Rp</span>
                            <input type="text" class="form-control form-control-sm" id="harga-paket" name="harga-paket" aria-label="Username" aria-describedby="basic-harga" required onkeydown="return false;">
                        </div>
                    </div>

                    <div class="mb-3 col-12 col-md-4">
                        <label for="harga-layanan" class="form-label">Harga Layanan</label>
                        <div class="input-group input-group-sm">
                            <span class="input-group-text" id="basic-layanan">Rp</span>
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
    </div>

    <script src="assets/js/app.js"></script>

<?php include "layouts/footer.php" ?>

    
               

    

  