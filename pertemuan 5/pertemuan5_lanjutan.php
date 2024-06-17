<?php
    // membuat variabel
    $nama_mahasiswa = "Ariel Tatum";
    $nama_kamu = "Andi";

    if ($nama_mahasiswa == "Ariel Tatum") {
        $jenis_kelamin = "perempuan";
    } else if ($nama_kamu == "Andi") {
        $jenis_kelamin = "laki-laki";
    } else {
        $jenis_kelamin = "??";
    }

    echo "Hallo " . $nama_mahasiswa . " Selamat <br> Datang, saya " . $nama_kamu . "
    jenis kelamin kamu adalah ".$jenis_kelamin;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
</head>
<body>
    <br> 
    Calon pacar saya adalah...
</body>
</html>
