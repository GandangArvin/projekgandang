<?php

$conn = mysqli_connect("localhost", "root", "", "db_students");


function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $kotak = [];
    while ($baju = mysqli_fetch_assoc($result)) {
        $kotak[] = $baju;
    }
    return $kotak;
}

function tambahData($data){

    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $nis = htmlspecialchars($data["nis"]);
    $rombel = htmlspecialchars($data["rombel"]);
    $rayon = htmlspecialchars($data["rayon"]);
    $status = htmlspecialchars($data["status"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO students
                VALUES
            ('', '$nama', '$nis', '$rombel','$rayon', '$status', '$gambar')
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapusdata($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM students WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubahData($post){
    global $conn;
    $id = $post["id"];
    $nama = htmlspecialchars($post["nama"]);
    $nis = htmlspecialchars($post["nis"]);
    $rombel = htmlspecialchars($post["rombel"]);
    $rayon = htmlspecialchars($post["rayon"]);
    $status = htmlspecialchars($post["status"]);
    $gambar = htmlspecialchars($post["gambar"]);

    $query = "UPDATE students SET
              nama = '$nama',
              gambar = '$gambar',
              nis = '$nis',
              rombel = '$rombel',
              rayon = '$rayon',
              status = '$status'
              WHERE id =$id
            ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function cari($keyword){
    $query = "SELECT * FROM students
                WHERE
            nama LIKE '%$keyword%' OR
            nis LIKE '%$keyword%' OR
            rombel LIKE '%$keyword%' OR
            rayon LIKE '%$keyword%' OR
            status LIKE '%$keyword%'

        ";
        return query($query);
}

?>