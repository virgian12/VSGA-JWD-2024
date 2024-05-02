<?php
   include("lib/fileutil.php");
    include("layouts/header.php");
?>

  <div class="container mt-3">
    <div class="container text-center mt-5">
        <h3>Pesona Indonesia</h3>  
        <hr class="mx-auto">
        <iframe width=100% height="500" src="https://www.youtube.com/embed/s-QTnJp2rPY?si=8Wjg9TLCuRCRQwvu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <p style="text-align: justify">
            <?php
            $fileObject = new FileUtil("sejarah.txt");
            $str_data = $fileObject->readTxtFile();
            echo $str_data;
            ?>
        </p>
    </div>
            
        

    </div>
    </div>

    <script src="assets/js/app.js"></script>

<?php include "layouts/footer.php" ?>

    
               

    

  