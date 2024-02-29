<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
 <style>
    body{
        background-image:url('sd3.jpg');
        font-family: arial;
        background-size: cover;
    }
 </style>
<body>
    <br><br>
    <center>
    <h1>Halaman Registrasi</h1>
    <form action="proses_register.php" method="post">
        <table>
        <p  style="font-weight: bold;">Username</p>
            <tr>
            <input type="text" name="username" style="width: 200px; height: 30px; border-radius: 30px;">
                <!-- <input type="text" name="username"> -->
            </tr>
            <p  style="font-weight: bold;">Password</p>
            <tr>
            <input type="password" name="password" style="width: 200px; height: 30px; border-radius: 30px;">
                <!-- <input type="password" name="password"> -->
            </tr>
            <p  style="font-weight: bold;">Email</p>
            <tr>
            <input type="email" name="email" style="width: 200px; height: 30px; border-radius: 30px;">
                <!-- <input type="email" name="email"> -->
            </tr>
            <p  style="font-weight: bold;">Nama Lengkap</p>
            <tr>
            <input type="text" name="namalengkap" style="width: 200px; height: 30px; border-radius: 30px;">
                <!-- <input type="text" name="namalengkap"> -->
            </tr>
            <p  style="font-weight: bold;">Alamat</p>
            <tr>
            <input type="text" name="alamat" style="width: 200px; height: 30px; border-radius: 30px;">
                <!-- <input type="text" name="alamat"> -->
            </tr>
            <br><br>
            <tr>
                <td></td>
                <!-- <td><input type="submit" value="register"></td> -->
                <td><button type="submit" class="btn btn-primary">Register</button></td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>