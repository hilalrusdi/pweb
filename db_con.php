<?php

$conn = mysqli_connect("localhost", "root", "TOShiba123", "user_php");


function registrasi($data){
    global $conn;

    $username = stripslashes($data["username"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $konfirm =  mysqli_real_escape_string($conn, $data["konfirm"]);

    if( $password !== $konfirm) {
        echo "<script>alert('password salah')</script>";
        return false;
    }
    
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");
    return mysqli_affected_rows($conn);


}
?>