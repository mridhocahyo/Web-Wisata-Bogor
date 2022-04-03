<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Form Pemesanan</title>
    <style>
          body{
               background-color: #D9DBF1;
          }
          
          .col {
               height: 400px;
               display: block;
          }

          .h1 {
               font-size: 30px ;
               font-weight: 600;
               color: white;
               text-shadow: 2px 2.5px #80475E;
          }
          .col img{
               position: relative;
               display: block;
               height: 100%;
               width: 100%;
               -webkit-filter: grayscale(60%);
               filter: grayscale(60%);
               z-index: 0;
          }
          
          figure{
               position: absolute;
               margin-left: 25px;
               margin-top: -100px;
               z-index: 1;
          }
          header {
               position:relative;
               width: 100%;
               display: block;
               height: 224px;
               background-color: #D9DBF1;
          }
          section {
               position:relative;
               width: 100%;
               display: block;
               height: 400px;
               background-color: #D9DBF1;
          }
          .nav-link {
               margin-left: 8px;
          }

          footer {
               position:relative;
               width: 100%;
               display: block;
               height: 200px;
               background-color: #2D728F;
          }
     </style>
  </head>
  <body>
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
         </div>
       </div>
       <!-- Collapsible wrapper -->
     </div>
     <!-- Container wrapper -->
   </nav>
<form style="margin-top:30px;position:relative;" action="checkout.php" class="p-120 shadow p-3 mb-5 bg-body rounded border border-5 border-secondary position-absolute top-50 start-50 translate-middle" method="post">
        <h3 class="pb-3">Form Pemesanan</h3>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
            <div class="col-sm-6">
                <input type="text" class="form-control border border-dark border-1" id="nama" required name="nama">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nik" class="col-sm-3 col-form-label">Nomor Identitas</label>
            <div class="col-sm-6">
                <input type="text" class="form-control border border-dark border-1" id="nik" minlength="16" required name="nik">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="hp" class="col-sm-3 col-form-label">No. Hp</label>
            <div class="col-sm-6">
                <input type="text" class="form-control border border-dark border-1" id="hp" name="hp" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="lokasiWisata" class="col-sm-3 col-form-label">Tempat Wisata</label>
            <div class="col-sm-6">
                <select name="lokasiWisata" id="lokasiWisata" class="form-select border border-dark border-1" aria-label="Default select example" required>
                    <option selected>Pilih tempat wisata</option>
                    <option value="Kebun Raya Bogor">Kebun Raya Bogor</option>
                    <option value="Danau Quarry Jayamix">Danau Quarry Jayamix</option>
                    <option value="De Ranch Megamedung">De Ranch Megamedung</option>
                    <option value="Paralayang Bukit Gantole Puncak">Paralayang Bukit Gantole Puncak</option>
                    <option value="Taman bunga Nusantara">Taman bunga Nusantara</option>
                    <option value="Bukit Alesano">Bukit Alesano</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tanggal" class="col-sm-3 col-form-label">Tanggal Kunjungan</label>
            <div class="col-sm-6">
                <input type="date" class="form-control border border-dark border-1" name="tanggal" id="tanggal" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jumlahPengunjung" class="col-sm-3 col-form-label">Jumlah Pengunjung</label>
            <div class="col-sm-6">
                <select name="jumlahPengunjung" id="jumlahPengunjung" class="form-select border border-dark border-1" aria-label="Default select example" required>
                    <option value="" selected>Berapa orang</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="jumlahAnak" class="col-sm-3 col-form-label" style="margin-top:-10px;">Pengunjung Anak-Anak <br> <sub class="">Usia di bawah 12 tahun</sub> </label>
            <div class="col-sm-6">
                <select name="jumlahAnak" id="jumlahAnak" class="form-select border border-dark border-1" aria-label="Default select example" required>
                    <option value="" selected>Berapa orang</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="totalHarga" class="col-sm-3 col-form-label">Total Bayar</label>
            <div class="col-sm-6">
                <input type="text" readonly class="form-control-plaintext" id="totalHarga" value="">
            </div>
        </div>

        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="persetujuan" required="">
            <label class="form-check-label col-sm-9" for="persetujuan">
                Saya dan/atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan
            </label>
        </div>

        <div class="text-center mt-3">
             <button id="hitung" type="button" class="btn btn-dark">Hitung total bayar</button>
            <button id="pesan" type="submit" class="btn btn-dark col-sm-2">Pesan Tiket</button>
            <a href="index.html" class="btn btn-dark col-sm-2">Cancel</a>
        </div>
    </form>
    <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>



    <script>
       document.getElementById("hitung").onclick = function() {hitungTotalHarga()};
       document.getElementById("pesan").onclick = function() {hitungTotalHarga()};

       function tampilAttempt() {
         var attempt = []
         while (document.getElementById("hitung").onclick) {
           attempt.push("1");
         }
         document.getElementById("totalHarga").value = attempt.lenght.value;
       }

  
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
    nama             = document.getElementById("nama").value;
    nik              = document.getElementById("nik").value;
    hp               = document.getElementById("hp").value;
    lokasiWisata     = document.getElementById("lokasiWisata").value;
    tanggal          = document.getElementById("tanggal").value;
    jumlahPengunjung = document.getElementById("jumlahPengunjung").value;
    jumlahAnak       = document.getElementById("jumlahAnak").value;

    // HARGA TIKET
    hargaTiket = 0;
    if(lokasiWisata == "Kebun Raya Bogor")
      hargaTiket = 15000;
    else if (lokasiWisata == "Danau Quarry Jayamix")
      hargaTiket = 2000;
    else if (lokasiWisata == "De Ranch Megamedung")
      hargaTiket = 20000;
    else if (lokasiWisata == "Paralayang Bukit Gantole Puncak")
      hargaTiket = 13000;
    else if (lokasiWisata == "Taman bunga Nusantara")
      hargaTiket = 50000;
    else if (lokasiWisata == "Bukit Alesano")      
      hargaTiket = 10000;


    // HITUNG TOTAL HARGA
    hargaTiket = hargaTiket;
    total      = hargaTiket * (parseInt(jumlahAnak) + parseInt(jumlahPengunjung));
    totalHarga = hargaTiket * jumlahPengunjung;
    diskon     = hargaTiket * jumlahAnak;
    
    document.getElementById("totalHarga").value = formatHarga(totalHarga);
  }
    </script>


  </body>
</html>
