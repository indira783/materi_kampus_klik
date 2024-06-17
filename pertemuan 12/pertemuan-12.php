<?php
include "tampilkan_data.php";
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Input Nilai Mahasiswa</title>
    <link href="liblary/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="liblary/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="liblary/assets/styles.css" rel="stylesheet" media="screen">
    <script src="liblary/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body>

    <div class="span9" id="content">
        <div class="row-fluid">
            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Input Nilai Mahasiswa</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <form action="proses.php" method="POST">
                            <fieldset>
                                <legend>Input Nilai Mahasiswa</legend>
                                <div class="control-group">
                                    <label class="control-label" for="nama">NAMA MAHASISWA:</label>
                                    <div class="controls">
                                        <input type="text" class="input-xlarge focused" id="nama" name="nama" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="npm">NPM MAHASISWA:</label>
                                    <div class="controls">
                                        <input type="text" class="input-xlarge focused" id="npm" name="npm" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="prodi">PRODI MAHASISWA:</label>
                                    <div class="controls">
                                        <input type="text" class="input-xlarge focused" id="prodi" name="prodi"
                                            required>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">PROSES</button>
                                    <button type="reset" class="btn">Batal</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row-fluid">
            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Data Mahasiswa</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>NPM Mahasiswa</th>
                                    <th>Nama Mahasiswa</th>
                                    <th>Prodi Mahasiswa</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                            $result = $koneksi->query("SELECT * FROM mahasiswa");
                            while($data = $result->fetch_assoc()){
                            ?>
                                <tr>
                                    <td><?php echo $data['npm_mahasiswa']; ?></td>
                                    <td><?php echo $data['nama_mahasiswa']; ?></td>
                                    <td><?php echo $data['prodi']; ?></td>
                                    <td>
                                        <a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
                                        <a href="hapus_data.php?id=<?php echo $data['id']; ?>"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                                    </td>
                                </tr>
                                <?php
                            }
                            $result->free();
                            $koneksi->close();
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>