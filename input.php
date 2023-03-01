<?php

require 'controller.php';

if (isset($_POST["submit"])) {

    if (tambahdata($_POST) > 0) {
        echo "
                <script>
                    alert('Data Anda berhasi dimasukkan');
                    document.location.href = 'data.php';
                </script>
            ";
    } else {
        echo "
                <script>
                    alert('Data Anda gagal dimasukan');
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">\
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Input Data Siswa</title>
    <link rel="stylesheet" href="input.css">

</head>

<body>

    <ul>
        <form action="" method="post">
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="d-flex justify-content-center">
                    <div class="card" style="width: 30rem;">
                        <div class="card-body">
                            <h3>Masukkan Data</h3>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="nama">
                                <div id="emailHelp" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">NIS</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="nis">
                                <div id="emailHelp" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Rombel</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="rombel">
                                <div id="emailHelp" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Rayon</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="rayon">
                                <div id="emailHelp" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Status</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="status">
                                <div id="emailHelp" class="form-text"></div>
                            </div>
                            <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Gambar</label>
        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="gambar">
        <div id="emailHelp" class="form-text"></div>
        </div>
                            <!-- <button  name="submit">Masukkan Data Anda</button> -->
                    <button type="submit" name="submit" class="btn btn-primary">Tambah data siswa</button>
        </form>
    </ul>
    
</body>

</html>