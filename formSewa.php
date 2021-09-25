<!DOCTYPE HTML>
<html>
    <head>
        <title>Form Sewa</title>
    </head>
    <body>
        <form action="prosessewa.php" method="POST">
            <label for="">Judul Buku</label>
            <div><input type="text" name ="judul"></div>
            <label for="">Nama Penyewa</label>
            <div><input type="text" name ="penyewa"></div>
            <label for="">Durasi Sewa</label>
            <div><input type="text" name ="durasi"></div>
            <div>
                <input type="submit" name="sewa" value="Sewa buku">
            </div>
        </form>        
    </body>
</html>