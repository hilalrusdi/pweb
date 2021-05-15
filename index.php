<?php
require 'db_con.php';

if (isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $cek = mysqli_query($conn, "SELECT * from user WHERE username = '$username'");

    if( mysqli_num_rows($cek) === 1){
        $row = mysqli_fetch_assoc($cek);
        if (password_verify($password, $row["password"])) {
            echo "<script>alert('login berhasil')</script>";
            header("Location: me.php");
            exit;
        }
    }

    $error = true;

}

?>

<html>
<head>
    <title>Login</title>
</head>
<body>
    <div> <h1>Login</h1>
        <form action="login.php" method="POST" >
            <div>
                <label>Username</label>
                <input type="text" name="username" id="username" require>
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password" id="password" require>
            </div>
            <div>
                <button type="submit" name="login">Login</button>
            </div>
        </form>
    </div>
</body>

</html>
