<?php


include 'coba2.php';


// echo "awikwok academy";

// include 'coba2.php'
// $nama = "Udin";
$nama = $_POST ['nama'];
$data = mysqli_query($koneksi, "SELECT * FROM `awikwok` where `nama` = '$nama' ");

// if($koneksi == true){
//     echo "koneksi berhasil";
// }else{
//     echo "koneksi gagal";
// }

foreach ($data as $data ){
    echo $data ['nama']."&nbsp";
    echo $data ['kelas']."&nbsp";
    echo $data ['nilai']."<br>";
}


?>