<?php

//Jilan Ablah Hanifah 2210511139

    //yang menerima inputan
    // print_r($_POST)
    $nama="";
    $email="";
    $website="";
    $comment="";
    $gender="";

    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $website=$_POST['website'];
    $comment=$_POST['comment'];
    $gender=$_POST['gender'];
    //deklarasi error
    $namaError="<p style='color:red;'>*</p>";
    $emailError="<p style='color:red;'>*</p>";
    $websiteError="";
    $commentError="";
    $genderError="<p style='color:red;'>*</p>";
    //isset or empty
if (isset($_POST['submit'])) {
    $isValid = true;

    if (empty($_POST['nama'])) {
        $namaError = "<p style='color:red;'>*</p>";
    } else {
        $nama = ($_POST['nama']);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $nama)) {
            $namaError = "<p style='color:red;'>* Hanya huruf dan spasi yang diperbolehkan</p>";
        }
    }

    if (empty($_POST['email'])) {
        $emailError = "<p style='color:red;'>*</p>";
    } else {
        $email = ($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "<p style='color:red;'>* Format email tidak valid</p>";
            
        }
    }

    if (!empty($_POST['website'])) {
        $website = ($_POST['website']);
        if (!filter_var($website, FILTER_VALIDATE_URL)) {
            $websiteError = "<p style='color:red;'>* URL tidak valid</p>";
        }
    }
    if (empty($_POST['gender'])) {
        $genderError = "<p style='color:red;'>*</p>";
    } else {
        $gender = ($_POST['gender']);
    }
}

    // if (!empty($nama) && !empty($email) && !empty($website) && !empty($comment) && !empty($gender)) {
    //         echo"
    //             <h1>Data Mahasiswa</h1>
    //             <table>
    //             <tr>
    //                 <td> Nama </td>
    //                 <td> : </td>
    //                 <td> $nama </td>
    //             </tr>
    //             <tr>
    //             <td> email </td>
    //             <td> : </td>
    //             <td> $email </td>
    //             </tr>
    //             <tr>
    //             <td> website </td>
    //             <td> : </td>
    //             <td> $website </td>
    //             </tr>
    //             <tr>
    //             <td> comment </td>
    //             <td> : </td>
    //             <td> $comment </td>
    //             </tr>
    //             </table>
    //     ";
    //     }
?>


<html>
    <h1>PHP Form Validation Example</h1>

<form action="formvalidation.php" method="post">
    <p style='color:red'>*required field</p>
     <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" id=""></td>
            <td><?php echo $namaError; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="text" name="email" id=""></td>
            <td><?php echo $emailError; ?></td>
        </tr>
        <tr>
            <td>Website</td>
            <td>:</td>
            <td><input type="text" name="website" id=""></td>
            <td><?php echo $websiteError; ?></td>
        </tr>
        <tr>
            <td>Comment</td>
            <td>:</td>
            <td><textarea name="comment" id="" cols="30" rows="5"></textarea></td>
            <td><?php echo $commentError; ?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>:</td>
            <td><input type="radio" id="male" name="gender" value="male">
                <label for="male">Laki-laki</label><br>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Perempuan</label><br></td>
                <td><?php echo $genderError; ?></td>
        </tr>
        <tr>
            <td collspan="3"></td>
            <td></td>
            <td><input type="submit" value="Submit" name="submit"></td>
        </tr>
    </table>


</form>


</html>