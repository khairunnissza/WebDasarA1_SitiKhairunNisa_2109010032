<?php 
require "controllers/function.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>Halaman Login</h1>
    <form action="" method="post">
    <table>
        <tr>
            <th>Username</th>
            <td>:</td>
            <td>
                <input type="text" placeholder = "Input username" name="username">
            </td>
        </tr>
        <tr>
            <th>Password</th>
            <td>:</td>
            <td>
                <input type="password" placeholder="Input Password" name="pw">
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <button style="width : 100%;" name="login">Login</button>
            </td>
        </tr>
    </table>
    <p>Kamoe Belum Punya akun? Silahkan Registrasi <a href="registrasi.php">disini</a> </p>

    <?php 
        if (isset($_POST["login"])) {
            $username = $_POST["username"];
            $pw = $_POST["pw"];
            if (user_satu_jumlah($username) > 0) {
                if (password_verify($pw, user_satu($username,"password"))) {
                    echo "<script>
                    alert('password anda sesuai!')
                    location='../website_saya/'
                    </script>";
                    session_start();
                    $_SESSION["username"]=$username;
                }else {
                    echo "<script>
                    alert('password tidak sesuai!')
                    </script>";
                }
            }else {
                echo "<script>
                alert('username tidak ditemukan!')
                </script>";
            }
        }
        ?>
    </body>
</form>
</html>