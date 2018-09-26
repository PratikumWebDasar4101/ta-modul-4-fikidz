<?php 
session_start();
 ?>

 <table align="center" border="1"">
 	<tr>
 		<td colspan="2"  align="center"><h1>Data Diri</h1></td>
 	</tr>
 	<tr>
 		<td align="center"><h3>Genre</h3></td>
 		<td align="center"><h3>Tempat Wisata</h3></td>
 	</tr>
 	<tr>
 		<td>
 			<?php 
 				foreach ($_SESSION['genre'] as $pilihan) {
 					echo $pilihan."<br>";
 				}
 			 ?>
 		</td>
 		<td>
 			<?php 
 				foreach ($_SESSION['wisata'] as $pilihan) {
 					echo $pilihan."<br>";
 				}
 			 ?>
 		</td>
 	</tr>

 </table>
 <center><a href="form.php">Hapus</a></center>