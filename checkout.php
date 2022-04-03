<?php

$nama             = $_POST["nama"];
$nik              = $_POST["nik"];
$hp               = $_POST["hp"];
$lokasiWisata     = $_POST["lokasiWisata"];
$tanggal          = $_POST["tanggal"];
$jumlahPengunjung = $_POST["jumlahPengunjung"];
$jumlahAnak       = $_POST["jumlahAnak"];

$hargaTiket = 0;
if($lokasiWisata == "Kebun Raya Bogor")
  $hargaTiket = 15000;
else if ($lokasiWisata == "Danau Quarry Jayamix")
  $hargaTiket = 2000;
else if ($lokasiWisata == "De Ranch Megamedung")
  $hargaTiket = 20000;
else if ($lokasiWisata == "Paralayang Bukit Gantole Puncak")
  $hargaTiket = 13000;
else if ($lokasiWisata == "Taman bunga Nusantara")
  $hargaTiket = 50000;
else if ($lokasiWisata == "Bukit Alesano")      
  $hargaTiket = 10000;


// HITUNG TOTAL HARGA
$total      = $hargaTiket * ($jumlahAnak + $jumlahPengunjung);
$diskon     = $hargaTiket * $jumlahAnak;
$totalHarga = $hargaTiket * $jumlahPengunjung;

if (isset($_POST['insert'])) {
  $table = "tb_pesanan";

  $nama             = $_POST["modal-nama"];
  $nik              = $_POST["modal-nik"];
  $hp               = $_POST["modal-hp"];
  $lokasiWisata     = $_POST["modal-lokasiWisata"];
  $tanggal          = $_POST["modal-tanggal"];
  $jumlahPengunjung = $_POST["modal-jumlahPengunjung"];
  $hargaTiket       = $_POST["modal-hargaTiket"];
  $total            = $_POST["modal-total"];
  $diskon           = $_POST["modal-diskon"];
  $totalHarga       = $_POST["modal-totalHarga"];

  // INSERT DATA
  $query  = "INSERT INTO `tb_pesanan` (`nama`, `nik`, `hp`, `lokasiWisata`, `tanggal`, `jumlahPengunjung`, `hargaTiket`, `total`, `diskon`, `totalHarga`) VALUES ('$nama', '$nik', '$hp', '$lokasiWisata', '$tanggal', '$jumlahPengunjung', '$hargaTiket', '$total', '$diskon', '$totalHarga') ";
  $result = $db->query($query);

  //Format Rupiah
  function rupiah($angka){
    $hasil_rupiah = "RP ". number_format($angka, 2, ',', '.');
    return $hasil_rupiah;
  }

  // BALIK KE HOME
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PESANAN TIKET ANDA | Checkout</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style>
              footer {
               position:relative;
               margin-top:-50px;
               width: 100%;
               display: block;
               height: 200px;
               background-color: #2D728F;
          }
  </style>
</head>

<body>
       <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #4ABDAC;">
     <!-- Container wrapper -->
     <div class="container">
       <!-- Navbar brand -->
       <a class="navbar-brand me-2" href="https://mdbgo.com/">
         <img
           src="img/logo_jadi.png"
           height="40"
           alt="MDB Logo"
           loading="lazy"
           style="margin-top: -1px;margin-right: -10px;"
         />
       </a>
   
       <!-- Toggle button -->
       <button
         class="navbar-toggler"
         type="button"
         data-mdb-toggle="collapse"
         data-mdb-target="#navbarButtonsExample"
         aria-controls="navbarButtonsExample"
         aria-expanded="false"
         aria-label="Toggle navigation"
       >
         <i class="fas fa-bars"></i>
       </button>
   
       <!-- Collapsible wrapper -->
       <div class="collapse navbar-collapse" id="navbarButtonsExample">
         <!-- Left links -->
         <ul class="navbar-nav me-auto mb-2 mb-lg-0">
           <li class="nav-item">
             <a class="nav-link" href="index.html" style="text-decoration:none;">Dashboard</a>
           </li>
         </ul>
         <!-- Left links -->
   
         <div class="d-flex align-items-center">
           <button type="button" class="btn btn-link px-2 me-2" style="text-decoration:none;">
            <a href="daftar_harga.html" style="text-decoration:none;">Daftar Harga</a> 
           </button>
           <a href="form_pemesanan.php" style="text-decoration:none;">
           <button type="button" class="btn btn-primary me-3" >
               Kembali
           </button>
          </a>
         </div>
       </div>
       <!-- Collapsible wrapper -->
     </div>
     <!-- Container wrapper -->
   </nav>
  <form action="" method="post" accept-charset="utf-8" class="p-5 shadow p-3 mb-5 bg-body rounded">
    <h3 class="pb-3">Form Checkout</h3>
    <div class="mb-3 row">
      <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
      <div class="col-sm-6">
        <input type="text" class="form-control border border-dark border-1" value="<?= $_POST['nama'] ?>" name="modal-nama" required disabled>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="nik" class="col-sm-3 col-form-label">Nomor Identitas</label>
      <div class="col-sm-6">
        <input type="text" class="form-control border border-dark border-1" value="<?= $_POST['nik'] ?>" name="modal-nik" minlength="16" disabled required>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="hp" class="col-sm-3 col-form-label">No. Hp</label>
      <div class="col-sm-6">
        <input type="text" class="form-control border border-dark border-1" value="<?= $_POST['hp'] ?>" name="modal-hp" disabled required>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="lokasiWisata" class="col-sm-3 col-form-label">Tempat Wisata</label>
      <div class="col-sm-6">
        <input type="text" class="form-control border border-dark border-1" value="<?= $_POST['lokasiWisata'] ?>" name="modal-lokasiWisata" disabled required>
      </div>
      <div class="col-sm-6">
      <p id="tes" style="position:relative;display:block;width:470px;margin-left:405px;margin-top:10px;padding-right:-60px;margin-bottom:9px;"></p>
    </div>
    </div>
    <div class="mb-3 row">
      <label for="tanggal" class="col-sm-3 col-form-label">Tanggal Kunjungan</label>
      <div class="col-sm-6">
        <input type="date" class="form-control border border-dark border-1" value="<?= $_POST['tanggal'] ?>" name="modal-tanggal" disabled required>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="jumlahPengunjung" class="col-sm-3 col-form-label">Jumlah Pengunjung</label>
      <div class="col-sm-6">
        <input type="text" class="form-control border border-dark border-1" value="<?= $_POST['jumlahPengunjung'] ?>" name="modal-jumlahPengunjung" disabled required>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="hargaTiket" class="col-sm-3 col-form-label">Harga Tiket</label>
      <div class="col-sm-6">
        <input type="text" readonly class="form-control-plaintext" value="Rp. <?= $hargaTiket ?>" name="modal-hargaTiket" value="" disabled>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="total" class="col-sm-3 col-form-label">Total</label>
      <div class="col-sm-6">
        <input type="text" readonly class="form-control-plaintext" value="Rp. <?= $total ?>" name="modal-total" value="" disabled>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="diskon" class="col-sm-3 col-form-label">Potongan Harga</label>
      <div class="col-sm-6">
        <input type="text" readonly class="form-control-plaintext" value="Rp. <?= $diskon ?>" name="modal-diskon" value="" disabled>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="totalHarga" class="col-sm-3 col-form-label">Total Bayar</label>
      <div class="col-sm-6">
        <input type="text" readonly class="form-control-plaintext" value="<?= $totalHarga ?>" name="modal-totalHarga" value="" disabled>
      </div>
    </div>
    <div class="text-center">
      <a href="index.html" class="btn btn-dark">Batal</a>
      <input type="button" class="btn btn-dark" id="bayar" name="insert" value="Bayar" onclick="berhasil()">


    </div>
  </form>
  <footer>
     <div class="container">
               <p class="h1" style="font-size: 13px;padding-top: 150px;">Pariwisata <br> Kota Bogor 2022</p>
     </div>
   </footer>

</body>

</html>
<!-- Alert tombol Bayar -->
<script>
    wisata = ["Kebun Raya Bogor","Danau Quarry Jayamix","De Ranch Megamedung","Paralayang Bukit Gantole Puncak","Taman bunga Nusantara","Bukit Alesano"];
    let text ="Wisata: "  ;
    for(let i=0; i < wisata.length; i++) {
      text += wisata[i] + ", ";
    }
    document.getElementById("tes").innerHTML = text;
</script>
<script src="assets/bootstrap/js/bootstrap.bundle.js"></script>