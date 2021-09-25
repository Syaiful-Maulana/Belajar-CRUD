
<!DOCTYPE HTML>
<?php
include_once('koneksi.php');
$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM idsewa WHERE  id='$id'");
$row = mysqli_fetch_array($query);
?>
<html>
    <head>
        <title>Form Sewa</title>
    </head>
    <body>
        <form action="prosesEditSewa.php?id=<?php echo $id;?>" method="POST">
            <label for="">Judul Buku</label>
            <div><input type="text" name ="judul" value ="<?php echo $row['judul']; ?>"></div>
            <label for="">Nama Penyewa</label>
            <div><input type="text" name ="penyewa" value ="<?php echo $row['penyewa']; ?>"></div>
            <label for="">Durasi Sewa</label>
            <div><input type="text" name ="durasi" value ="<?php echo $row['durasi']; ?>"></div>

            <div>
                <input type="submit" name="sewa" value="Edit">
            </div>
        </form>        
    </body>
</html>