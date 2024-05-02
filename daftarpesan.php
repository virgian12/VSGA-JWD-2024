<?php 
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "jwd_wisata";
    $dbConn = mysqli_connect($hostname, $username, $password, $database);

    $query = "SELECT * FROM pesan";
    $hasil=$dbConn->query($query);
?>

<?php include  "layouts/header.php" ?>

  <div class="container mt-3">
    <div class="row mt-3">
        <div class="col-12 text-center">
            <h2 >Daftar Pesanan</h2>
            <table class="table table-sm table-bordered">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Paket</th>
                    <th scope="col">Tanggal Pesan</th>
                    <th scope="col">Jumlah Hari</th>
                    <th scope="col">Jumlah Orang</th>
                    <th scope="col">Penginapan</th>
                    <th scope="col">Transportasi</th>
                    <th scope="col">Konsumsi</th>
                    <th scope="col">Total Tagihan</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider"> 
                <?php 
                    $count=0;
                     if($hasil->num_rows>0){
                         while($row=$hasil->fetch_assoc()){
                             $count++;
                             echo "<tr>";
                                 echo  "<td>$count</td>";
                                 echo  "<td>". $row['nama'] ."</td>";
                                 echo  "<td>". $row['paket'] ."</td>";
                                 echo  "<td>". $row['tgl_pesan'] ."</td>";
                                 echo  "<td>". $row['durasi'] ."</td>";
                                 echo  "<td>". $row['jml_orang'] ."</td>";
                                 echo  "<td>". $row['penginapan'] ."</td>";
                                 echo  "<td>". $row['transportasi'] ."</td>";
                                 echo  "<td>". $row['konsumsi'] ."</td>";
                                 echo  "<td>". $row['total'] ."</td>";
                                 echo  "<td>"; 
                                    echo "<a href='modifikasi.php?id=" . $row['id'] . "' class='btn btn-primary btn-sm'>Ubah</a>";
                                    echo "<a href='hapus.php?id=" . $row['id'] . "' class='ms-3 btn btn-danger btn-sm' onclick='return confirm(\"Anda yakin akan hapus ?\")'>Hapus</a>";
                                 echo "</td>";
                                
                             
                             echo"</tr>";
                         }

                   }
                   
                ?>
                
                </tbody>

            </table>
  
        </div>
            
           
        </div>

    </div>     
        

    <script src="assets/js/app.js"></script>

<?php include "layouts/footer.php" ?>


        

        


    
    
               

    

  