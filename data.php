<?php

require 'controller.php';

$students = query("SELECT * FROM students");

if ( isset($_POST["cari"] )) {
    $students = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connection data base</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="data.css">

</head>

<body class="container-sm">

    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="card" style="width: 60rem;">
            <div class="card-body">

            <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <form class="d-flex" role="search" action="" method="post">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword"
                autofocus autocomplete="off">
            <button class="buttonsearch" type="submit" name="cari">Search</button>
                </form>
            </div>
            </nav>

                <h3>List of student data at Wikrama Senior High School, Bogor!</h3>
                <form action="input.php">
                    <button type="submit" class="button">Add New Data?</button>
                </form>
                <br>
                <table class="table table-bordered border-primary">

                    <tr>
                        <th>Number</th>
                        <th>Name</th>
                        <th>Nis</th>
                        <th>Rombel</th>
                        <th>Rayon</th>
                        <th>Status</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>

                    <tbody>

                        <?php $i = 1; ?>
                        <?php foreach ($students as $student) { ?>
                            <tr>
                                <td class="Primer">
                                    <?= $i; ?>
                                </td>
                                <td>
                                    <?= $student["nama"] ?>
                                </td>
                                <td>
                                    <?= $student["nis"] ?>
                                </td>
                                <td>
                                    <?= $student["rombel"] ?>
                                </td>
                                <td>
                                    <?= $student["rayon"] ?>
                                </td>
                                <td>
                                    <?= $student["status"] ?>
                                </td>
                                <td><img src="img/<?= $student["gambar"]; ?>" width="50"></td>
                                <td>
                                    <a class="btn btn-primary" href="delete.php?id=<?= $student["id"] ?>"
                                        onclick="return confirm('Yakin data ingin di hapus?')">Delete</a>
                                    <a class="btn btn-primary" href="update.php?id=<?= $student["id"] ?>"
                                        onclick="return confirm('Yakin data ingin di ubah?')">Change</a>
                                </td>

                            </tr>


                            <?php $i++; ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>