<?php
    session_start();
    if(!isset($_SESSION['userid'])){
    header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Album</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            background-image: url('sd1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            font-family: arial;
        }
    </style>
</head>
<body>
    
    <br><br>
    <center>
    <h1>Halaman Album</h1>
    <p>Selamat Datang<b><?=$_SESSION['namalengkap']?></b></p>

    <tr>
        <!-- <td><a href="album.php">Album</a></td><br> -->
        <button type="submit" class="btn btn-primary"><a href="album.php" style="text-decoration:none; color: white;">Album</a></button>
        <!-- <td><a href="foto.php">Foto</a></td><br> -->
        <button type="submit" class="btn btn-success"><a href="foto.php" style="text-decoration:none; color: white;">Foto</a></button>
        <!-- <td><a href="logout.php">logout</a></td> -->
        <button type="submit" class="btn btn-danger"><a href="logout.php" style="text-decoration:none; color: white;">Logout</a></button>
        <!-- <a href="album.php">Album</a><br>
        <a href="foto.php">Foto</a><br>
        <a href="logout.php">logout</a> -->
    </tr>

    
    <form action="tambah_album.php" method="post">
        <table>
        <br>
            <tr>
            <td>Nama Album</td>
                <td><input type="text" name="namaalbum" style="border-radius: 20px;"></td>
            </tr>

            <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi" style="border-radius: 20px;"></td>
            </tr>
            <tr>
                <td></td>
                <!-- <td><input type="submit" value="Tambah"></td> -->
                <td><button type="submit" class="btn btn-primary">Tambah</button></td>
            </tr>
        </table>
<br><br>
<table class="table-bordered" border=1 cellpadding=5 cellspacing=0>
            <tr>
                <th>ID</th>
                <th>Nama Album</th>
                <th>Deskripsi</th>
                <th>Tanggal Dibuat</th>
                <th>Aksi</th>
            </tr>

            <?php
                include "koneksi.php";
                $userid=$_SESSION['userid'];
                $sql=mysqli_query($conn, "select * from album where userid='$userid'");
                while($data=mysqli_fetch_array($sql)){
            ?>
            <tr>
                <td><?=$data['albumid']?></td>
                <td><?=$data['namaalbum']?></td>
                <td><?=$data['deskripsi']?></td>
                <td><?=$data['tanggaldibuat']?></td>
                <td>
                    
                    <button type="submit" class="btn btn-danger"><a href="hapus_album.php?albumid=<?=$data['albumid']?>" style="text-decoration:none; color: white;">Hapus</a></button>
                    <button type="submit" class="btn btn-primary"><a href="edit_album.php?albumid=<?=$data['albumid']?>" style="text-decoration:none; color: white;">Edit</a></button>
                </td>
            </tr>

            <?php
                }
            ?>
        </table>
    </form>
    </center>
</body>
</html>