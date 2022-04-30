<html>
<body>
<?php
$koneksi = mysqli_connect("localhost","root","","wisata");
$result = mysqli_query($koneksi, "SELECT * FROM kota");
?>
<h1><center>DAFTAR PEMESANAN-TIKET WISATA KOTA BOGOR</center></h1><br>
            <table border="0">
            <thead>
            <?php
                $no=1;
                while ($data = mysqli_fetch_array($result)) :
                ?>
                <tr>
                                  </tr>
                <br>

                  <tr>
                  <td>No </td>
                  <td>:</td>
                  <td></td>
                    
                  <td><?= $no ?></td>
                </tr>

                <tr>
                    <td>Nama </td>
                    <td>:</td>
                    <td></td>
                    
                    <td><?= $data['nama'] ?></td>
                </tr>

                <tr>
                <td>No Identitas </td>
                  <td>:</td>
                  <td></td>
                    
                    <td><?= $data['noid'] ?></td>
                </tr>

                <tr>
                <td>No Hp </td>
                <td>:</td>
                <td></td>
                    
                    <td><?= $data['nohp'] ?></td>
                </tr>

                <tr>
                <td>Wisata </td>
                <td>:</td>
                <td></td>
                    
                    <td><?= $data['wisata'] ?></td>
                </tr>

                <tr>
                <td>Tanggal Kunjungan </td>
                <td>:</td>
                <td></td>
                    
                    <td><?= $data['ttl'] ?></td>
                </tr>

                <tr>
                <td>Jumlah Pengunjung </td>
                <td>:</td>
                <td></td>
                    
                    <td><?= $data['jp'] ?></td>
                </tr>

                <tr>
                <td>Pengunjung Anak-anak </td>
                <td>:</td>
                <td></td>
                    
                    <td><?= $data['pa'] ?></td>
                </tr>

              </thead>                
                <?php
                endwhile;
                ?>
                </thead>
            </table>
            </body>
</html>