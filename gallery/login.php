<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    body{
    background-image: url(sd4.jpg);
    background-size: cover;
    font-family: Arial;
}
</style>
<body>
    <center>
    <h1 style="color: black; text-align: center; padding-top: 40px;">Halaman Login</h1>

    <form action="proses_login.php" method="post">
        <p style="font-weight: bold;">Username</p>
            <tr>
                
                <input type="text" name="username" style="width: 200px; height: 30px; border-radius: 30px;">
            </tr>
            <p style="font-weight: bold;">Password</p>
            <tr>
                
                <input type="password" name="password" style="width: 200px; height: 30px; border-radius: 30px;">
            </tr>
            <tr>
                <td></td><br><br>
                <td><button type="submit" class="btn btn-primary">Login</button></td>
                
            </tr>
        </table>
    </form>
    
    </center>
</body>
</html>