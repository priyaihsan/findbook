<?php
//priyaihsan_20190140050
// koneksi ke database
$koneksi = mysqli_connect("localhost","root","","tokobuku");
//priyaihsan_20190140050
// cek koneksi database
// apabila error
if(mysqli_connect_errno()){
    echo "koneksi database gagal :" .mysqli_connect_errno();
}