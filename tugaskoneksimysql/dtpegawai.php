<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tugasprak6";
//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//check connection
if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

//create tabel
$sql = "CREATE TABLE data_pegawai( 
    ID_PG INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    NAMA VARCHAR(200) NOT NULL,
    EMAIL VARCHAR(200) NOT NULL,
    DIVISI VARCHAR(50) NOT NULL)" ;
  
  if(mysqli_query($conn, $sql)){
      echo "Database created successfully" ; } 
  else{
      echo "Error creating database: " . mysqli_error($conn);}

//mengisi data pada tabel dengan query INSERT INTO 
$sql = "INSERT INTO data_pegawai (NAMA, EMAIL, DIVISI)
    VALUES ('FEBY', 'FEBY@gmail.com','KEAMANAN'), ('FANNI','FANNI@gmail.com', 'HUMAS')"; 

    if(mysqli_query($conn, $sql)){ 
    echo "Koneksi Berhasil"; 
    } 
    else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
    }
mysqli_close($conn);
?>