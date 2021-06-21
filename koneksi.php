<?php
$conn = mysqli_connect("localhost", 'root', '', 'dbsiswa');

function koneksi($query)
{
    global $conn;


    $result = mysqli_query($conn, $query);


    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data)
{
    global $conn;
    $nis = htmlspecialchars($data['nis']);
    $nama = htmlspecialchars($data['nama']);
    $alamat = htmlspecialchars($data['alamat']);

    $result = "INSERT INTO datasekolah VALUE
    ('','$nis','$nama','$alamat')
    ";

    mysqli_query($conn, $result);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    $result = "DELETE FROM datasekolah WHERE id = $id";

    mysqli_query($conn, $result);

    return mysqli_affected_rows($conn);
}
function edit($data)
{
    global $conn;
    $id = $data['id'];
    $nis = htmlspecialchars($data['nis']);
    $nama = htmlspecialchars($data['nama']);
    $alamat = htmlspecialchars($data['alamat']);

    $result = "UPDATE datasekolah set
    nis = '$nis',
    nama = '$nama',
    alamat= '$alamat'
    WHERE ID = $id
    ";

    mysqli_query($conn, $result);

    return mysqli_affected_rows($conn);
}
