<?php
//memasukkan fle koneksi didalam file prosesEditSewa.php
include_once('koneksi.php');
//$query menyiman hasil query
// ketika berada di id yang dituju maka user dapat merubah data dari judul, penyewa, dan durasi
$id = $_GET['id'];
$judul = $_POST['judul'];
$penyewa = $_POST['penyewa'];
$durasi = $_POST['durasi'];

$tanggal_sewa = date('Y-m-d');

mysqli_query($koneksi, "UPDATE idsewa SET judul = '$judul', penyewa = '$penyewa', durasi ='$durasi' WHERE id='$id'");
header("location: index.php");
?>
