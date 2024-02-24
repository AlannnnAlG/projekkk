<?php
$databaseHost = "localhost";
$databaseName = "webdatabase";
$databaseUsername = "root";
$databasePassword = "";

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);



if($mysqli){
    echo"koneksi db berhasil.<br/>";
}else{
    echo"koneksi db gagal.<br/>";
}

?>