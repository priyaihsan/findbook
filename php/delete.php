<?php
//include koneksi database
include './config.php';
//priyaihsan_20190140050
// menangkap data yang di kirim dari form
$id = $_GET['id_buku'];
//priyaihsan_20190140050

// menginput data ke database
mysqli_query($koneksi, "delete from mahasiswa where id_buku='$id'");
// mengembalikan ke halaman awal
//priyaihsan_20190140050
header("Location:./findbook.php");
//priyaihsan_20190140050
