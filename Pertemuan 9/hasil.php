<?php
    // print_r($_GET) ; die();

    $angka1=$_POST['angka1'];
    $angka2= $_POST['angka2'];
    $hasil_penjumlahan=$angka1+$angka2; 
    $hasil_pengurangan=$angka1-$angka2; 
    $hasil_perkalian=$angka1*$angka2; 

    echo  "Hasil Penjumlahan : ". $hasil_penjumlahan ."<br>";
    echo  "Hasil Pengurangan : ". $hasil_pengurangan."<br>";
    echo   "Hasil Perkalian : ". $hasil_perkalian. "<br>" ;
?>