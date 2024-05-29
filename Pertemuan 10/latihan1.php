<!DOCTYPE html>
<html lang="en">
<head>
   <title>Contoh Implementasi dari PHP</title>
</head>

<body>
    <table border='1'>
        <th>NO</th>
        <th>Barang</th>
        <th>Harga</th>
        <?php
            for ($i=0; $i < 5; $i++) { 
            
        ?>
            <tr>
                <td><?php
                echo $i+1;?></td>
                <td>
                    <?php
                    echo "sabun";
                    ?>
                </td>
                <td>
                <?php
                    echo "RP. 2500";
                    ?>
                </td>
            </tr>
        <?php
            }
        ?>
    </table>

    <form action="latihan1.php" method="post" style="margin-top:200px;">
        <h2>Program Lempar Nama</h2>
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" placeholder="Masukkan Nama"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Eksekusi"></td>
            </tr>
        </table>
    </form>
    <?php
        print_r($_POST);
        // echo "Nama anda adalah ". $_POST['nama'];
        $nama=$_POST['nama'];
        echo "Nama anda adalah ". $nama ."";
    ?>
</body>
</html>