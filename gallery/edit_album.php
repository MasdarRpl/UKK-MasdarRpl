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
    <title>Halaman Home</title>
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
    <h1>Halaman Home</h1>
    <p>Selamat Datang<b><?=$_SESSION['namalengkap']?></b></p>

    <tr>
        <!-- <td><a href="album.php">Album</a></td><br> -->
        <button type="submit" class="btn btn-primary"><a href="album.php" style="text-decoration:none; color: white;">Album</a></button>
        <!-- <td><a href="foto.php">Foto</a></td><br> -->
        <button type="submit" class="btn btn-success"><a href="foto.php" style="text-decoration:none; color: white;">Foto</a></button>
        <!-- <td><a href="logout.php">logout</a></td> -->
        <button type="submit" class="btn btn-danger"><a href="logout.php" style="text-decoration:none; color: white;">Logout</a></button>
    </tr>

    <form action="update_album.php" method="post">
            <?php
                include "koneksi.php";
                $albumid=$_GET['albumid'];
                $sql=mysqli_query($conn, "select * from album where albumid='$albumid'");
                while($data=mysqli_fetch_array($sql)){
            ?>


         <input type="text" name="albumid" value="<?=$data['albumid']?>" hidden>
<br>

        <table>
            <tr>
                <td>Nama Album</td>
                <td><input type="text" name="namaalbum" value="<?=$data['namaalbum']?>"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi" value="<?=$data['deskripsi']?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Tambah"></td>
            </tr>
        </table>

        <?php
        }
        ?>


    </form>
    </center>
</body>
</html>