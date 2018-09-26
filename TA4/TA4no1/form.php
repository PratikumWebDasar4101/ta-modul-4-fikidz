<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="proses.php" method="POST" enctype="multipart/form-data">
		<table align="center">
			<tr>
				<td colspan="3" align="center"><h2>Data Diri</h2></td>
			</tr>
			<tr>
				<td>Genre Film : </td> 
				<td>:</td>
				<td><input type="checkbox" name="genre[]" value="horror">Horror<br>
				<input type="checkbox" name="genre[]" value="action">Action<br>
				<input type="checkbox" name="genre[]" value="anime">Anime<br>
				<input type="checkbox" name="genre[]" value="thrille">Thrille<br>
				<input type="checkbox" name="genre[]" value="animasi">Animasi</td>
			</tr>
			<tr>
				<td colspan="3"><br></td>
			</tr>
			<tr>
				<td>Tujuan Tempat Wisata</td>
				<td>:</td>
				<td><input type="checkbox" name="wisata[]" value="bali">Bali<br>
				<input type="checkbox" name="wisata[]" value="rajaampat">Raja Ampat<br>
				<input type="checkbox" name="wisata[]" value="pulaudarawan">Pulau Darawan<br>
				<input type="checkbox" name="wisata[]" value="bangkabelitung">Bangka Belitung<br>
				<input type="checkbox" name="wisata[]" value="labuanbajo">Labuan Bajo</td>
			</tr>
			<td colspan="3" align="center"><input type="submit" name="submit" value="Submit"></td>
		</table>
	</form>
</body>
</html>