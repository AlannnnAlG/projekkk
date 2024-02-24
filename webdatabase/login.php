<?php
// mengaktifkan session pada php
session_start();
include 'koneksi.php';

$nama = $_POST['nama'];
$password = $_POST['password'];

$login = mysqli_query($mysqli, "select * from user where nama='$nama' and password='$password'");

if($cek > 0){

$data = mysqli_fetch_assoc($login);
 
    // cek jika user login sebagai admin
    if ($cek['level'] == "admin") {

        // buat session login dan username
        $_SESSION['email'] = $email;
        $_SESSION['level'] = "admin";
        // alihkan ke halaman dasbor admin
        header("location:admin/admin.php");

        // cek jika user login sebagai user
    } else if ($cek['level'] == "user") {
        //buat session login dan username
        $_SESSION['email'] == "$email";
        $_SESSION['level'] == "user";
        //alihkan ke halaman dasbor user
        header("location:user/user.php");
    } else {
        // alihkan ke halaman login kembali
        header("location:web.php");
    }
} else {
    header("location:web.php?pesan=gagal");
}
