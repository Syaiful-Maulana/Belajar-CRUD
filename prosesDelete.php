<?php
//memasukkan fle koneksi didalam file prosesDelete.php
include_once('koneksi.php');
// user akan menghapus data di table dimana id yang dituju di klik
$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM idsewa WHERE id='$id'");
header("location: index.php");
?>
