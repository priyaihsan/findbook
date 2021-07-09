<?php
// koneksi database
include './config.php';
//priyaihsan_20190140050
// menangkap data yang di kirim dari form
$id = $_POST['id_buku'];
$namaBuku = $_POST['nama_buku'];
$kategoriBuku = $_POST['kategori_buku'];
$penerbitBuku = $_POST['penerbit_buku'];
$hargaBuku = $_POST['harga'];
$diskon = $_POST['diskon'];
$gambarBuku = $_POST['gambar_buku'];

// update data ke database
mysqli_query($koneksi,"update rakbuku set nama_buku='$namaBuku', kategori_buku='$kategoriBuku', harga='$hargaBuku', gambar_buku='$gambarBuku',penerbit_buku='$penerbitBuku',diskon='$diskon' where id='$id'");
//priyaihsan_20190140050
// mengalihkan halaman kembali ke index.php
header("Location:./findbook.php");