<?php
  $hasil = "";
  if (isset($_POST['hitung'])) {
    $rusuk = $_POST['rusuk'];
    if (is_numeric($rusuk)) {
      $hasil = "Volume Kubus = " . pow($rusuk, 3) . " cm";
    }else {
      $hasil = "Input harus berupa angka!";
    }
  }
  
  ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Website Zaky Zulfiqar</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
  <div class="header">
        <img src="zaky.jpeg" class="logo">
    <div class="welcome">SELAMAT DATANG DI WEBSITE ZAKY ZULFIQAR !!!</div>
  </div>
  <div class="main">
    <div class="sidebar">
      <div class="menu-title">MENU</div>
      <a href="index.php">Home</a>
      <a href="profil.html">Profile</a>
      <a href="media.html">Media Sosial</a>
      <a href="kubus.php">Hitung Kubus</a>
    </div>

    <div class="content">
      <img src="kubus.jpg" alt="Foto">
      <div>
       <?php
{
            echo "<h3>Menghitung Volume Kubus</h3>";
            echo "<form method='post'>
                    <label>Masukan panjang rusuk (cm):</label><br>
                    <input type='text' name='rusuk' required>
                    <button type='submit' name='hitung'>Hitung</button>
                  </form>";
          }
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $rusuk = $_POST["rusuk"];
            $volume = pow($rusuk, 3); 
    
            echo "<h3>Hasil Perhitungan:</h3>";
            echo "Panjang sisi: " . $rusuk . "<br>";
            echo "Volume kubus: " . $volume . "cm3";
        }
       ?>
      </div>
    </div>
  </div>

  <div class="footer">Copyright@baknus666.sch.id</div>
</body>
</html>