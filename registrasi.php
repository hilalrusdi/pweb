<?php
require 'db_con.php';

if(isset($_POST['daftar'])){
    if(registrasi ($_POST) > 0 ){
        echo"<script>
                alert('berhasil ditambahkan');
            </script>";
    } else {
        echo mysqli_error($conn);
    }
    
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
</head>

<body>
    <h1>Registrasi</h1>
    <form action="" method="post">
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label for="konfirm">Konfirmasi Password</label>
            <input type="password" name="konfirm" id="konfirm">
        </div>
        <div>
            <button type="submit" name="daftar">Submit</button>
        </div>
    </form>

</body>
</html>