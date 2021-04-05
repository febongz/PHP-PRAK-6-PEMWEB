<html>
<head></head>
<body>
	<br>
	<a href="index.php">KEMBALI</a>
	<br>
	<br>
	<h3>TAMBAH DATA pegawai</h3>
	<form method="post" action="inputACT.php"> <!--membuat form dengan method post, ketika form dikirim akan mengeksekusi file inputACT.php -->
		<table> <!-- membuat tabel-->
			<tr> <!-- membuat baris -->			
				<td>id_pegawai</td> 
				<td><input type="text" name="ID_PG"></td> 
			</tr>
			<tr>
				<td>Nama</td> 
				<td><input type="text" name="NAMA"></td> 
			</tr>
			<tr>
            <tr>
				<td>Email</td> 
				<td><input type="text" name="EMAIL"></td> 
			</tr>
			<tr>
				<td>Divisi</td> 
				<td><input type="text" name="DIVISI"></td> 
			</tr>
			<tr>
				<td></td> 
				<td><input type="submit" value="SIMPAN"></td> <!--membuat input type submit -->
			</tr>		
		</table>
	</form>
</body>
</html>