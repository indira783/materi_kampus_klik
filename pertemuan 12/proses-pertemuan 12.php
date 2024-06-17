<?php
include "koneksi.php";

// Mengambil data input jika form telah disubmit
    $nama_mhs = $_POST['nama'];
    $prodi_mhs = $_POST['prodi']; 
    $ulangi = $_POST['ulangi'];

    // Menyimpan data ke database
    $proses = mysqli_query($koneksi, "INSERT INTO mahasiswa (nama-mahasiswa, prodi, ) VALUES ('".$nama_mhs."', '".$prodi_mhs."')")
        or die(mysqli_error($koneksi));

    // Menampilkan pesan berhasil atau gagal
    if ($proses) {
        echo "
        <script>
            alert('Data Berhasil Disimpan');
            window.location.href='web5.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data Gagal Disimpan');
            window.location.href='web5.php';
        </script>";

        // Menentukan huruf mutu
    if ($nilai != "") {
        if ($nilai >= 85) {
            $huruf_mutu = 'A';
        } else if ($nilai >= 75) {
            $huruf_mutu = 'B';
        } else if ($nilai >= 65) {
            $huruf_mutu = 'C';
        } else {
            $huruf_mutu = 'E';
        }
    }

    // Menampilkan nilai dengan perulangan
    for ($x = 0; $x < $perulangan; $x++) { // Perulangan hingga kurang dari $perulangan
        echo $nama_mhs . " Nilai Mata Kuliah anda adalah: " . $huruf_mutu . "<br>";
    }
}

?>


