<?php
//priyaihsan_20190140050
//include koneksi database
include './config.php';
//priyaihsan_20190140050
// menangkap data yang di kirim dari form
$namaBuku = $_POST['nama_buku'];
$kategoriBuku = $_POST['kategori_buku'];
$penerbitBuku = $_POST['penerbit_buku'];
$hargaBuku = $_POST['harga'];
$diskon = $_POST['diskon'];
$gambarBuku = $_POST['gambar_buku'];
//priyaihsan_20190140050
// menginput data ke database
mysqli_query($koneksi, "insert into rakbuku values('','$namaBuku','$kategoriBuku',$hargaBuku,'$gambarBuku','$penerbitBuku',$diskon)");
// mengembalikan ke halaman awal
header("Location:./findbook.php");