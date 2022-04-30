<?php
 $koneksi = mysqli_connect("localhost","root","","wisata");

 if(isset($_POST['hitung'])) {

    $harga = $_POST['harga'];       
    $jp = $_POST['jp'];
    $pa = $_POST['pa'];
   //  <?php
    
    if($jp > 0){
        $total = $harga*$jp;
        echo"Total".$total;
    }
      

       header("Location: Daftar.php");
?>