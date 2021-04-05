<?php 
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "tugasprak6"; 

//create connection
$conn = mysqli_connect($host, $username , $password, $database); 
//check Connection
if (mysqli_connect_errno()) { 
	echo "Failed to connect to MySQL ". mysqli_connect_error();
};
 
// menangkap data yang di kirim dari form
$id_pegawai = $_POST['ID_PG'];
$nama = $_POST['NAMA'];
$email = $_POST['EMAIL'];
$departemen = $_POST['DIVISI'];
 
// menginput data ke database
mysqli_query($conn,"insert into data_pegawai values('$id_pegawai','$nama', '$email', '$departemen')");
 
// mengalihkan halaman kembali ke prog.php
header("location:prog.php");
 
?>