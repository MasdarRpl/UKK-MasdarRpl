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
    <title>Halaman Foto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            background-image: url('sd.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            font-family: arial;
        }
    </style>
</head>
<br><br>

<center>
    <h1>Halaman Foto</h1>
    <p>Selamat Datang<b><?=$_SESSION['namalengkap']?></b></p>

    <tr>
        <!-- <td><a href="album.php">Album</a></td><br> -->
        <button type="submit" class="btn btn-primary"><a href="album.php" style="text-decoration:none; color: white;">Album</a></button>
        <!-- <td><a href="foto.php">Foto</a></td><br> -->
        <button type="submit" class="btn btn-success"><a href="foto.php" style="text-decoration:none; color: white;">Foto</a></button>
        <!-- <td><a href="logout.php">logout</a></td> -->
        <button type="submit" class="btn btn-danger"><a href="logout.php" style="text-decoration:none; color: white;">Logout</a></button>
    </tr>

    <form action="tambah_foto.php" method="post" enctype="multipart/form-data">
        <table>
            <br>
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judulfoto" style="border-radius: 20px;"></td>
            </tr>
            <div class="menu" style="padding-top:  10px;">
            <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsifoto" style="border-radius: 20px;"></td>
            </tr>
    </div>
            <tr>
                <td>Lokasi File</td>
                <td><input type="file" name="lokasifile"></td>
            </tr>
            <tr>
                
                <td>Album</td>
                <td>
                <select name="albumid">
                    <?php
                        include "koneksi.php";
                        $userid=$_SESSION['userid'];
                        $sql=mysqli_query($conn, "select * from album where userid='$userid'");
                        while($data=mysqli_fetch_array($sql)){
                    ?>
                    <option value="<?=$data['albumid']?>"><?=$data['namaalbum']?></option>
                    <?php    
                        }
                    ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <!-- <td><input type="submit" value="Tambah"></td> -->
                <td><button type="submit" class="btn btn-primary">Tambah</button></td>
            </tr>
        </table>
 <br><br>
<table class="table-bordered" border=1 cellpadding=5 cellspacing=0 style="border: 2px solid black;">
            <tr style="text-align: center;">
                <th>ID</th>
                <th>Judul</th>
                <th>Deskripsifoto</th>
                <th>Tanggal Unggah</th>
                <th>Lokasi File</th>
                <th>Album</th>
                <th>Aksi</th>
            </tr>

            <?php
                include "koneksi.php";
                $userid=$_SESSION['userid'];
                $sql=mysqli_query($conn, "select * from foto,album where foto.userid='$userid' and foto.
                albumid=album.albumid");
                while($data=mysqli_fetch_array($sql)){
            ?>
            <tr>
                <td style="text-align: center;"><?=$data['fotoid']?></td>
                <td style="text-align: center;"><?=$data['judulfoto']?></td>
                <td><?=$data['deskripsifoto']?></td>
                <td style="text-align: center;"><?=$data['tanggalunggah']?></td>
                <td>
                    <img src="gambar1/<?=$data['lokasifile']?>" width="200px">
                </td>
                <td style="text-align: center;"><?=$data['namaalbum']?></td>
                <td>
                    
                    <button type="submit" class="btn btn-danger"><a href="hapus_foto.php?fotoid=<?=$data['fotoid']?>" style="text-decoration:none; color: white;">Hapus</a></button>
                    <button type="submit" class="btn btn-primary"><a href="edit_foto.php?fotoid=<?=$data['fotoid']?>" style="text-decoration:none; color: white;">Edit</a></button>
                </td>
            </tr>

            <?php
                }
            ?>
        </table>
    </form>
    </center>
<body>
</body>
</html>