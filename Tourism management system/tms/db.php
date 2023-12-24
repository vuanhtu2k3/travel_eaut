<?php
$server = "localhost";
$username = "root";
$password = "1234";
$db = "tourism1";
$conn = mysqli_connect($server, $username, $password, $db);
if ($conn) {
    mysqli_query($conn, "SET NAMES 'utf8'");
} else {
    echo 'Ket noi that bai';
}
