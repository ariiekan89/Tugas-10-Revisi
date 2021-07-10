 <?php
	 	require 'koneksi.php';

	 	$kode = $_GET['kode'];
	 	$a = operator("SELECT * FROM operator WHERE kode = $kode")[0];

		 	if(isset($_POST['ubah'])) {
		 		if(edit($_POST) > 0) {
		 			echo "<script>
							alert('Data berhasil diubah');
							document.location.href='index.php';
						  </script>";
		 		} else {
		 			echo "<script>
							alert('Data gagal diubah');
						  </script>";
		 		}
		 	}
  ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>UBAH DATA</title>
 </head>
 <body>

 	<h1><u>Isi Form dibawah</u></h1>

 	<form action="" method="post">
 			<ul>
 				<li>
 					<input type="text" name="kode" id="kode" value="<?= $a['kode']; ?>">
 				</li>
 					<br>
 				<li>
 					<input type="text" name="nama" id="nama" value="<?= $a['nama']; ?>">
 				</li>
 			</ul>
 			<button type="submit" name="ubah">Ubah Data</button>
 	</form>
 			<br>
 			<a href="index.php">Kembali</a>
 
 </body>
 </html>