<?php
// membuat variabel
$nama_mahasiswa = "Ariel Tatum";
$nama_kamu = "Andi motor";
$Pekerjaan = "ibu rumah tangga"; 

if ($nama_mahasiswa == " ariel tatum") {
    if ($Pekerjaan == "aktris") {
        $jenis_kelamin = "perempuan";
        $Pengahasilan_perbulan = 1000000; 
    } else {
        $jenis_kelamin = "Perempuan";
        $Pengahasilan_perbulan = 2000000; 
    }
} else if ($nama_kamu == "andi") {
    $jenis_kelamin = "laki-laki";
} else {
    $jenis_kelamin = "??";
}

echo "Hallo " . $nama_mahasiswa . " Selamat <br> datang, saya " . $nama_kamu . 
    ". Jenis kelamin kamu adalah " . $jenis_kelamin . ". Penghasilan Anda " . $Pengahasilan_perbulan . " Rupiah.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERTEMUAN KE 6</title>
</head>
<body>
    <br>
    Calon pacar saya....
</body>
</html>