<?php
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'];
$hobi = $_POST['hobi'];
$pesan = $_POST['pesan'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>TAMPILAN BUKU TAMU</title>
</head>
<body>
    <h3>ISI BUKU TAMU</h3>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= $nama; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?= $jk; ?></td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td>:</td>
            <td><?= $prodi; ?></td>
        </tr>
        <tr>
            <td valign="top">Hobby</td>
            <td valign="top">:</td>
            <td>
                <?php
                   if (!empty($hobi)) {
                    echo "<ul>";
                    foreach ($hobi as $value) {
                        echo "<li>$value</li>";
                    }
                     echo "</ul>";
                   }
                ?>
            </td>
        </tr>
        <tr>
            <td>Pesan</td>
            <td>:</td>
            <td><?php echo  nl2br($pesan); ?></td>
        </tr>
    </table>
</body>
</html>