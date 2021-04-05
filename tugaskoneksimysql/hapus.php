<?php 
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "tugasprak6"; 

$conn = mysqli_connect($host, $username , $password, $database); 

if (mysqli_connect_errno()) { 
	echo "Failed to connect to MySQL ". mysqli_connect_error();
};
 
//menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
//menghapus data dari database
mysqli_query($conn,"delete from tb_pegawai where id_pegawai='$id'");
 
//mengalihkan halaman kembali ke prog.php
header("location:prog.php");
 
?>