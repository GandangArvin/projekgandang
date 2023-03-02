<?php

require 'controller.php';

$id = $_GET["id"];
$student = query("SELECT * FROM students WHERE id = $id")[0];

if (isset($_POST["submit"])) {

    if (ubahData($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil diubah');
            document.location.href = 'data.php';
        </script>
    ";

    } else {
        echo "
        <script>
            alert('data gagal diubah');
            document.location.href = 'data.php';
        </script>
    ";
    }

}

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="update.css">

</head>

<body>

    <form action="" method="post">
        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="d-flex justify-content-center">
                <div class="card" style="width: 30rem;">
                    <div class="card-body">
                        <h3>Update Data</h3>
                        <div class="mb-3">
                            <input type="hidden" name="id" id="" value="<?= $student["id"] ?>">
                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                name="nama" value="<?= $student["nama"] ?>">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">NIS</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="nis"
                                value="<?= $student["nis"] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Rombel</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="rombel"
                                value="<?= $student["rombel"] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Rayon</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="rayon"
                                value="<?= $student["rayon"] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Status</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="status"
                                value="<?= $student["status"] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Gambar</label>
                            <input type="file" class="form-control" id="exampleInputPassword1" name="gambar" value="<?= $student["gambar"] ?>">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>