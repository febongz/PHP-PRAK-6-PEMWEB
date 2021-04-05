<html>
<head></head>
<body>
	<br>
	<a href="prog.php">KEMBALI</a>
	<br>
	<br>
	<h3>EDIT DATA pegawai</h3>
 
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

	$id = $_GET['id']; 
	$data = mysqli_query($conn,"select * from data_pegawai where ID_PG='$id'"); 
	while($d = mysqli_fetch_array($data)){//perulangan berisi perintah untuk menampilkan data dari database
		?>
		<form method="post" action="update.php"> <!---membuat form dengan method post, ketika form dikirim akan mengeksekusi file update.php  -->
			<table> 
				<tr> 			
					<td>nama</td> 
					<td> 
						<input type="hidden" name="ID_PG" value="<?php echo $d['ID_PG']; ?>"> <!-- membuat input type type hidden yang berisi data id pegawai yang akan dirubah -->
						<input type="text" name="NAMA" value="<?php echo $d['NAMA']; ?>"> <!-- membuat input type type text yang berisi data nama yang akan dirubah -->
					</td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="EMAIL" value="<?php echo $d['EMAIL']; ?>"></td> <!-- membuat input type type text yang berisi data departemen yang akan dirubah -->
				</tr
				<tr>
					<td>DIVISI</td>
					<td><input type="text" name="DIVISI" value="<?php echo $d['DIVISI']; ?>"></td> <!-- membuat input type type text yang berisi data departemen yang akan dirubah -->
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td> <!-- membuat input type type submit-->
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>