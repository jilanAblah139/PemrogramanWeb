<?php
$nama = $_POST['nama'];
$menu = $_POST['menu'];
$total = 0;

for ($i=0; $i < count($menu) ; $i++) { 
    $total = $total+$menu[$i];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Jilan Ablah Hanifah 221051139 -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Total Harga</title>
</head>
<body>
<div class="container mt-4 ">
<div class="card">
    <div class="card-body">
    <h3 class="card-title text-center mb-4">Kantin Mamah Dedeh</h3>
    <h4 class="card-text">Total Harga : <?php echo $total ?></h4>
    <?php
        if ($total < 7000) {
          echo "<p><b>Selamat Makan $nama by Mamah Dedeh</b></p>";
        }
        elseif ( $total >= 7000 && $total < 13000){
            echo "<p><b>Hi, $nama </b></p>";
            echo "<h4>Bonus :</h4>";
            echo "<ul>";
            echo "<li>Minuman Gratis: Teh Manis Dingin</li>";
            echo "</ul>";
        }
        elseif($total==13000){
            echo "<p><b>Hi, $nama </b></p>";
            echo "<h4>Bonus :</h4>";
            echo "<ul>";
            echo "<li>Minuman Gratis: Jus Alpukat</li>";
            echo "<li>Diskon: 1300</li>";
            echo "<li>Harga Sekarang: 11700</li>";
            echo "</ul>";
        }
    ?>
  </div>
  </div>
</div>
</div>
</body>
</html>