<?php


    //yang menerima inputan
    // print_r($_POST)
    $nama="";
    $email="";
    $username="";
    $password="";

    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    //deklarasi error
    $namaError="";
    $emailError="";
    $usernameError="";
    $passwordError="";
    //isset or empty
    if (isset($_POST['submit'])) {
        if(empty($nama)){
            $namaError="<p style='color:red;'> Nama tidak boleh kosong </p>";
        }
        if(empty($email)){
            $emailError="<p style='color:red;'> email tidak boleh kosong </p>";
        }
        if(empty($username)){
            $userError="<p style='color:red;'> username tidak boleh kosong </p>";
        }
        if(empty($password)){
            $passwordError="<p style='color:red;'> password tidak boleh kosong </p>";
        }

        if (!empty($nama) && !empty($email) && !empty($username) && !empty($password)) {
            echo"
                <h1>Data Mahasiswa</h1>
                <table>
                <tr>
                    <td> Nama </td>
                    <td> : </td>
                    <td> $nama </td>
                </tr>
                <tr>
                <td> email </td>
                <td> : </td>
                <td> $email </td>
                </tr>
                <tr>
                <td> username </td>
                <td> : </td>
                <td> $username </td>
                </tr>
                <tr>
                <td> password </td>
                <td> : </td>
                <td> $password </td>
                </tr>
                </table>
        ";
        }
    }
?>

<html>
    <h1>Registrasi Data Mahasiswa</h1>

<form action="form_validasi.php" method="post">
     <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" id=""></td>
            <td><?php echo $namaError; ?></td>
        </tr>
        <tr>
            <td>EMAIL</td>
            <td>:</td>
            <td><input type="text" name="email" id=""></td>
            <td><?php echo $emailError; ?></td>
        </tr>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" id=""></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="text" name="password" id=""></td>
        </tr>
        <tr>
            <td collspan="3"></td>
            <td></td>
            <td><input type="submit" value="Registrasi" name="submit"></td>
        </tr>
    </table>


</form>


</html>