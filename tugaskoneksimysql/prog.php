<html>
<head></head>
<body>
	<br>
	<a href="input.php">+ TAMBAH PEGAWAI</a> 
	<br>
	<br>
	<table border="1" width="50%"> 
		<tr>
			<th>id_pegawai</th> 
			<th>Nama</th> 
			<th>Email</th> 
			<th>Divisi</th> 
			<th>OPSI</th> 
		</tr>
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
		$data = mysqli_query($conn,"select * from data_pegawai"); 
		while($d = mysqli_fetch_array($data)){ //perulangan untuk menampilkan data dari database
			?>
			<tr>
				<td><?php echo $d['ID_PG']; ?></td>
				<td><?php echo $d['NAMA']; ?></td>
				<td><?php echo $d['EMAIL']; ?></td>
				<td><?php echo $d['DIVISI']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a> <!-- memasukan link ke teks edit -->
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a> <!-- memasukan link ke teks hapus -->
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>