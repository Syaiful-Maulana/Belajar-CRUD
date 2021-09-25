<?php
//memasukkan file koneksi di dalamfile menampilkan koneksi.php
include_once('koneksi.php');
//variable query menyimpan hasil query
$judul = $_POST['judul'];
$penyewa = $_POST['penyewa'];
$durasi = $_POST['durasi'];

$tanggal_sewa = date('Y-m-d');

mysqli_query($koneksi, "INSERT INTO idsewa(judul,penyewa,durasi,tanggal_sewa) value ('$judul','$penyewa','$durasi','$tanggal_sewa')");
header("location: index.php");
?>
