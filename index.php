<!DOCTYPE html>
<html lang="en">  
  <head>
  <title>Undangan Pernikahan</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Grey+Qo&display=swap" rel="stylesheet">
</head>
<body>
  <h1>Undangan Pernikahan</h1>
  <h2>Raden Mas Gibran dan Ratu Sari</h2>  <p>Dengan hormat, kami mengundang Anda untuk menghadiri acara sakral pernikahan kami.</p>

  <h3>Hari, Tanggal: 22-2-2029</h3>  <p>Waktu: Pukul 09.00 WIB</p>   <div class="carousel">
    <div class="carousel-inner">
      <img src="mempelai 1.jpg" alt="1" width="300" height="250">  <img src="mempelai 3.jpg" alt="3"width="300" height="250">
      <img src="mempelai 2.jpg" alt="2"width="300" height="250">
    </div>
  </div>

  <h4> Gedung K-Link Tower</h4></p>  <p>Lokasi: K-LINK TOWER, Jl. Gatot Subroto No.Kav. 59A, Kuningan Timur, Setiabudi, Jakarta Selatan.</p>
  <h5>Venue</h5>
  <img src="bg foto kawinan.jpg" alt="Gambar Tempat Acara">
  <iframe width="425" height="350" src="https://www.openstreetmap.org/export/embed.html?bbox=106.83230727910998%2C-6.240839046554418%2C106.8348151445389%2C-6.23939123630972&amp;layer=mapnik" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/#map=19/-6.240115/106.833561">View Larger Map</a></small>
    <h3>
            UCAPAN DAN DOA
        </h3>
        <p>Berikan ucapan dan doa ke mempelai</p>
        <form action="insert.php" method="post">
            <input type="text"name="nama" placeholder="nama"> <br>
            <textarea name="ucapan" id="" cols="30" rows="4" placeholder="ucapan"required></textarea> <br>
            <select name="keterangan">
                <option value ="" selected disabled hidden>Konfirmasi kehadiram
                </option>
                <option value ="1">ya</option>
                <option value="2">tidak hadir</option>
                <option value="3">tidak tahu</option>
            </select> <br>
            <button>confirm</button>
        </form>
        <?php
       include 'koneksi.php';
       //kirim pesan
       if (isset($_POST)) {
        $nama = @$_POST['nama'];
        $ucapan = @$_POST['ucapan'];
        $keterangan = @$_POST['keterangan'];

        $sql = "INSERT INTO bukutamu (nama, ucapan, keterangan) VALUES ('$nama', '$ucapan', '$keterangan')";        
        
        $koneksi->query($sql);
       }

        //tampilkan data
        $sql2 = "SELECT * FROM bukutamu ORDER BY id DESC";
        $hasil = $koneksi->query($sql2);
    ?>
     <div style="height:200px; width:300px; overflow:scroll;">
    <?php
        while ($baris = $hasil->fetch_row()) {
    ?>
        <div style="border-style:solid; border-color:crimson; margin: 10px;">
          <p style="font-weight:bolt;"><?= $baris[1] ?></p>
          <p><?= $baris[2] ?></p>
        </div>
        
        <?php
        }
        
        $hasil->free_result();
     ?>
  <audio controls autoplay>
    <source src="Andra And The Backbone - Sempurna (Official Music Video).mp3" type="audio/mpeg">
  </audio>
  <script src="script.js"></script>
</body>
</html>