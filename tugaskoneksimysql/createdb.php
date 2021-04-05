<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tugasprak6";
//create connection
$conn = mysqli_connect($servername, $username, $password);
//check connection
if(!$conn){
    die("connection failed : " . mysqli_connect_error());
}

//create database
$sql = "CREATE DATABASE tugasprak6";
if(mysqli_query($conn, $sql)){
    echo "Database created successfully" ; } 
else{
    echo "Error creating database: " . mysqli_error($conn);}

$conn = mysqli_connect($servername, $username, $password, $dbname);
//check connection
if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

//create tabel
$sql = "CREATE TABLE buku_tamu (
  ID_BT INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  NAMA VARCHAR(200) NOT NULL,
  EMAIL VARCHAR(50) NOT NULL,
  ISI TEXT(50)
  )";

if(mysqli_query($conn, $sql)){
    echo "Database created successfully" ; } 
else{
    echo "Error creating database: " . mysqli_error($conn);}

mysqli_close($conn);
?>    
