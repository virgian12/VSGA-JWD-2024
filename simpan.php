<?php 
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "jwd_wisata";
    $dbConn = mysqli_connect($hostname, $username, $password, $database);

    if(mysqli_connect_errno()) {
        echo "koneksi gagal".mysqli_connect_error();
    }else {
        echo "";
    }


    $nama=$_POST['nama-pemesan'];
    $paket=$_POST['nama-paket'];
    $tglPesan=$_POST['tgl-pesan'];
    $durasi=$_POST['durasi'];
    $jmlPeserta=$_POST['jumlah-peserta'];
    $penginapan=isset($_POST['penginapan'])?"Y":"N";
    $transportasi=isset($_POST['transportasi'])?"Y":"N";
    $makanan=isset($_POST['makanan'])?"Y":"N";
    $totalTagihan=$_POST['jumlah-tagihan'];
    $hargaPaket=$_POST['harga-paket'];
    $hargaLayanan=$_POST['harga-layanan'];

    $query="INSERT INTO 
            pesan (nama, paket, tgl_pesan, durasi, jml_orang, penginapan, transportasi, konsumsi, total)
            VALUES ('$nama', '$paket', '$tglPesan', '$durasi', '$jmlPeserta', '$penginapan', '$transportasi', '$makanan', '$totalTagihan')";

   
    $sukses=mysqli_query($dbConn, $query);
    
?>
 
 <?php include  "layouts/header.php" ?>

  <div class="container mt-3">
  <div class="row mt-3">
        <div class="col-12 col-md-9">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Selamat</strong> Pesanan anda berhasil disimpan.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <div class="card" >
                <div class="card-header" style="text-align: center" >
                    RANGKUMAN RESERVASI PAKET WISATA
                </div>
                <div class="card-body">
                    <table style="width: 50%">
                        <tr>
                            <td>nama</td>
                            <td><?php echo $nama; ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Peserta</td>
                            <td><?php echo $jmlPeserta; ?></td>
                        </tr>
                        <tr>
                            <td>Waktu Perjalanan                     :  </td>
                            <td><?php echo $durasi; ?></td>
                        </tr>
                        <tr>
                            <td>Layanan Paket</td>
                            <?php
                                $layananPaket="";

                                if($penginapan=="Y"){
                                    $layananPaket=$layananPaket."Penginapan, ";
                                }
                                if($transportasi=="Y"){
                                    $layananPaket=$layananPaket."Transportasi, ";
                                }
                                if($makanan=="Y"){
                                    $layananPaket=$layananPaket."Makanan, ";
                                }

                            ?>
                            <td><?php echo $layananPaket; ?></td>
                        </tr>
                        <tr>
                            <td>Harga Paket</td>
                            <td><?php echo $hargaPaket; ?></td>
                        </tr>
                        <tr>
                            <td>Harga Layanan</td>
                            <td><?php echo $hargaLayanan; ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Tagihan</td>
                            <td><?php echo $totalTagihan; ?></td>
                        </tr>
                    </table>



                </div>


            </div>

            <br>
            <div class="card" style="text-align: center">
                <span>Pesan Lagi ?</span>
                <br>
                <row>
                    <a href="pendaftaran.php" class="btn btn-primary" style="width: 20%">Ya</a>
                    <a href="index.php" class="btn btn-danger" style="width: 20%">Tidak</a>
                </row>

            </div>
           
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

    
               

    

  