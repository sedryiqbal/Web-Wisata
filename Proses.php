<?php
 $koneksi = mysqli_connect("localhost","root","","wisata");

 if(isset($_POST['proses'])) {

    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $noid = $_POST['noid'];
    $nohp = $_POST['nohp'];
    $wisata = $_POST['wisata'];
    $ttl = $_POST['ttl'];        
    $jp = $_POST['jp'];
    $pa = $_POST['pa'];

   //  $total
   //  <?php
    
   //  if($jp > 0){
   //      $total = $harga*$jp;
   //      echo"Total".$total;
   //  }
      

       header("Location: hasil.php");
       mysqli_query($koneksi, "insert into kota(no,nama,noid,nohp,wisata,ttl, jp, pa) value ('$no','$nama','$noid','$nohp','$wisata','$ttl','$jp','$pa')");
      }
?>