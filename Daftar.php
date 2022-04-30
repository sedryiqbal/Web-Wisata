<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384- KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="Project.css">

    <!-- Font CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,600;1,700&family=Roboto+Sla b:wght@500;700&family=Roboto:wght@300;700&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>Sistem Informasi | Home</title>
</head>

<body>
    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <!-- <a class="navbar-brand" href="tampilan.php"><i>KOTA BOGOR</i></b></a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs- target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria- label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="tampilan.php">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                            Wisata
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                
                            <li>
                                <a class="dropdown-item" href="Kebun.php">Kebun Raya</a>
                            </li>
                      
                                <a class="dropdown-item" href="Museum.php">Meseum Zoologi </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="Istana.php">Istana Bogor</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Daftar.php">Pesan-Tiket</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- End Navbar -->
  <div class="container">
  <form action="Proses.php" method="POST" enctype="multipart/form-data">
    <h1>Form Pemesanan-Tiket Wisata Kota Bogor</h1>
    <p>Silakan Masukan Pemesanan di bawah ini:</p>
    <hr>
    <label for="no"><b>No</b></label>
    <input type="text" name="no" id="no" required>

    <label for="nama"><b>Nama Lengkap</b></label>
    <input type="text" name="nama"  id="nama" required>

    <label for="noid"><b>No Identitas</b></label><br>
    <input type="text" name="noid"  id="noid" required><br>

    <label for="nohp"><b>No Hp</b></label><br>
    <input type="text" name="nohp"  id="nohp" required><br>
    <br>
    <label for="wisata"><b>Tempat Wisata</b>&nbsp;&nbsp;&nbsp;&nbsp;<select name="wisata"  id="wisata">
        <option value="kebun">Kebun Raya</option>
        <option value="museum">Museum Zoologi</option>
        <option value="istana">Istana Bogor</option>
     </select>
     </label><br>
     <br></br>

    <label for="ttl"><b>Tanggal Kunjungan</b></label>
    <input type="text" placeholder="YYY/DD/MM/" name="ttl"  id="ttl" required><br>
    <br>
    <label for="jp"><b>Jumlah Pengunjung</b>&nbsp;&nbsp;&nbsp;&nbsp;<select name="jp" id="jp">
    <option value="">- orang -</option>
	<?php for($x=1;$x<=10;$x++){ ?>
	<option value="<?php echo $x; ?>"><?php echo $x; ?></option>
	<?php } ?>
     </select>
     </label><br>
     <br></br>
     <label for="pa"><b>Pengunjung Anak-anak</b>&nbsp;&nbsp;&nbsp;&nbsp;<select name="pa" id="pa">
     <option value="">- orang -</option>
	 <?php for($x=1;$x<=10;$x++){ ?>
	 <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
	 <?php } ?>
     </select>
     </label><br>
     <br></br>
     
     <label for="total"><b>Total</b></label>
    <input type="text" readonly class="form-control-plaintext" name="total" id="total">
    <br>
    <label for="totalHarga"><b>Total Harga</b></label>
    <input type="text" readonly class="form-control-plaintext" name="totalHarga" id="totalHarga">
    <br>
    <label for="diskon"><b>Diskon</b></label>
    <input type="text" readonly class="form-control-plaintext" name="diskon" id="diskon">
    
    <hr>
    Saya dan/atau Rombongan telah membaca, memahami,dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan <input type='checkbox'  id="persetujuan" required="" checked='checked' />
    <br><br>
    <a  id="hitung"  class="registerbtn">Hitung</a>
    <br><br>
    <button type="submit"  name="proses" value="Simpan" class="registerbtn">Register</button>
    <button type="submit"  name="hapus" value="reset" class="registerbtn"><a href="Daftar.php">Cancel</a></button>
  </div> 

  <script>
       document.getElementById("hitung").onclick = function() {hitungTotalHarga()};
  
  // document.getElementById("bayar").onclick = function() {bayarPesanan()};

  function formatHarga(harga){
    return new Intl.NumberFormat('id-ID', {
      style: 'currency',
      currency: 'IDR',
      minimumFractionDigits: 0,
    }).format(harga);
  }
  function hitungTotalHarga() {
    
    // AMBIL DATA DARI INPUT
    no             = document.getElementById("no").value;
    nama             = document.getElementById("nama").value;
    noid              = document.getElementById("noid").value;
    nohp               = document.getElementById("nohp").value;
    wisata           = document.getElementById("wisata").value;
    ttl          = document.getElementById("ttl").value;
    jp = document.getElementById("jp").value;
    pa       = document.getElementById("pa").value;

    // HARGA TIKET
    hargaTiket = 0;
    if(wisata == "kebun")
      hargaTiket = 15000;
    else if (wisata == "museum")
      hargaTiket = 15000;
    else if (wisata == "istana")
      hargaTiket = 15000;

    // HITUNG TOTAL HARGA
    hargaTiket = hargaTiket;
    total      = hargaTiket * (parseInt(pa) + parseInt(jp));
    totalHarga = hargaTiket * jp;
    diskon     = hargaTiket * pa;
    
    document.getElementById("totalHarga").value = formatHarga(totalHarga);
    
    document.getElementById("total").value = formatHarga(total);
    
    document.getElementById("diskon").value = formatHarga(diskon);
  }
    </script>
      </form> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>


</body>
</html>
