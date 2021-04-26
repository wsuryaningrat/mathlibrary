<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbName = "perpustakaan";
$conn = mysqli_connect($host, $user, $pass);
mysqli_select_db($conn, $dbName)
or die ("Connect Failed !! : ".mysql_error());
?>