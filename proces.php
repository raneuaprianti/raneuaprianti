<?php
$id = $_GET['id'];
echo $data;

include 'coba2.php';
$data = mysqli_query($koneksi, "DELETE FROM `coba` WHERE 'id' = '$data' ");
// $Raneu = $_GET['Raneu'];
// $Aprianti = $_GET['Aprianti'];


// if($Raneu == "A"){
//     echo "Sangat Baik"."<br>";
// }elseif($Raneu == "B"){
//     echo "Baik"."<br>";
// }elseif($Raneu == "C"){
//     echo "Cukup"."<br>";
// }else{
//     echo "Buruk";
// }

// if($Aprianti == "A"){
//     echo "Sangat Baik";
// }elseif($Aprianti == "B"){
//     echo "Baik";
// }elseif($Aprianti == "C"){
//     echo "Cukup";
// }else{
//     echo "Buruk";
// }



?>