<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//check connection
if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

//create tabel
$sql = "CREATE TABLE liga (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  kode VARCHAR(3) NOT NULL,
  negara VARCHAR(30) NOT NULL,
  champion int(3)
  )";

if(mysqli_query($conn, $sql)){
    echo "Database created successfully" ; } 
else{
    echo "Error creating database: " . mysqli_error($conn);}

//mengisi data pada tabel dengan query INSERT INTO 
$sql = "INSERT INTO liga (kode, negara, champion) VALUES ('Jer', 'Jerman', '4'), 
('Spa', 'Spanyol', '3'), ('Eng', 'English', '3')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql."<br>".mysqli_error($conn);
}

mysqli_close($conn);
?>