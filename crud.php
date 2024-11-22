<?php
include 'koneksi.php';

if (isset($_POST['tambah'])) {
    $alas = $_POST['alas'];
    $sisi_miring = $_POST['sisi_miring'];

    if ($sisi_miring > $alas) {
        $tinggi = sqrt(pow($sisi_miring, 2) - pow($alas, 2));
        $luas = 0.5 * $alas * $tinggi;
        $keliling = $alas + $tinggi + $sisi_miring;

        $query = "INSERT INTO segitiga (alas, sisi_miring, tinggi, luas, keliling) VALUES ('$alas', '$sisi_miring', '$tinggi', '$luas', '$keliling')";
        $conn->query($query);

        echo "<script>alert('Data berhasil ditambahkan!');</script>";
        echo "<script>window.location.href='/pweb-crud';</script>";
    } else {
        echo "<script>alert('Sisi miring harus lebih panjang dari alas!');</script>";
        echo "<script>window.location.href='/pweb-crud';</script>";
    }
}

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $query = "DELETE FROM segitiga WHERE id = $id";
    $conn->query($query);

    echo "<script>alert('Data berhasil dihapus!');</script>";
    echo "<script>window.location.href='/pweb-crud';</script>";
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $alas = $_POST['alas'];
    $sisi_miring = $_POST['sisi_miring'];

    if ($sisi_miring > $alas) {
        $tinggi = sqrt(pow($sisi_miring, 2) - pow($alas, 2));
        $luas = 0.5 * $alas * $tinggi;
        $keliling = $alas + $tinggi + $sisi_miring;

        $query = "UPDATE segitiga SET alas='$alas', sisi_miring='$sisi_miring', tinggi='$tinggi', luas='$luas', keliling='$keliling' WHERE id='$id'";
        $conn->query($query);

        echo "<script>alert('Data berhasil diupdate!');</script>";
        echo "<script>window.location.href='/pweb-crud';</script>";
    } else {
        echo "<script>alert('Sisi miring harus lebih panjang dari alas!');</script>";
        echo "<script>window.location.href='/pweb-crud';</script>";
    }
}