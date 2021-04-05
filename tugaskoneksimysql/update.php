<?php 
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "tugasprak6"; 

//create connection
$conn = mysqli_connect($host, $username , $password, $database); 
//check connection
if (mysqli_connect_errno()) { 
	echo "Failed to connect to MySQL ". mysqli_connect_error();
};
 
//menangkap data yang baru disubmit
$id = $_POST['ID_PG'];
$email = $_POST['EMAIL'];
$nama = $_POST['NAMA'];
$departemen = $_POST['DIVISI'];
 
//update data ke database
mysqli_query($conn,"update data_pegawai set NAMA='$nama', EMAIL='$email', DIVISI='$departemen' where ID_PG='$id'");
 
//Mengalihkan halaman kembali ke prog.php
header("location:prog.php");
 
?>