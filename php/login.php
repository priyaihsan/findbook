<?PHP
//priyaihsan_20190140050
$user = "priyaihsan";
$pass = "nickytuan";
//priyaihsan_20190140050
$nama = $_POST['nama'];
$password = $_POST['password'];

//priyaihsan_20190140050
if ($nama == $user && $password == $pass) {
    header( "Location:../php/findbook.php" );
}
else{
    header( "Location:./login.html" );
}
//priyaihsan_20190140050
?>