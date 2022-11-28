<?php
include 'coba2.php';

// $nama = "Titan";
// $kelas = "TI7";
// $nilai = "85" ;
$nama = $_GET['nama'];
$kelas = $_GET['kelas'];
$nilai = $_GET['nilai'];


$data = mysqli_query($koneksi, "INSERT INTO `coba`(`nama`, `kelas`, `nilai`) VALUES ('$nama', '$kelas' , '$nilai')");

if($data == true){
    echo "berhasil";
}








?>