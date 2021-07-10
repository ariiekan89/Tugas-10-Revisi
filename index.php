<?php 
	require 'koneksi.php';
		$operator = operator("SELECT * FROM operator");
		if(isset($_POST['tambah'])) {
		 		if(tambah_operator($_POST) >0) {
		 			echo "<script>
							alert('Data berhasil ditambahkan');
							document.location.href='index.php';
						  </script>";
		 		} else {
		 			echo "<script>
							alert('Data gagal ditambahkan');
						  </script>";
		 		}
		 	}

		$customer = customer("SELECT * FROM customer");
		if(isset($_POST['tambah_customer'])) {
		 		if(tambah_kasir($_POST) >0) {
		 			echo "<script>
							alert('Data berhasil ditambahkan');
							document.location.href='index.php';
						  </script>";
		 		} else {
		 			echo "<script>
							alert('Data gagal ditambahkan');
						  </script>";
		 		}
		 	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>CREATE, READ, UPDATE, DELETE</title>
 </head>
 <body>

 	<h3>TABLE OPERATOR (mysqli_fetch_array)</h3>

<!-- FORM TAMBAH DATA -->
 	<form action="" method="post">
 		
 			<tr>
 				<td>
 					<input type="text" name="kode" placeholder="masukan kode" required>
 				</td>
 				<td>
 					<input type="text" name="nama" placeholder="masukan nama.." required>
 				</td>
 				<td>
 					<button type="submit" name="tambah">Tambah Data</button>
 				</td>
 			</tr>

 			<br><br>
 
 	</form>

<!-- TABLE OPERATOR -->
 	<table border="1" cellpadding="10" cellspacing="">
 		<tr>
 			<th>NO</th>
 			<th>KODE</th>
 			<th>NAMA</th>
 			<th>Aksi</th>
 		</tr>

 	<?php
 		$i = 1; 
 		foreach ($operator as $b) : ?>

 		<tr>
 			<td><?= $i; ?></td>
 			<td><?= $b["kode"]?></td>
 			<td><?= $b["nama"]?></td>
 			<td>
		 			<a href="edit.php?kode=<?= $b['kode']; ?>">Edit |</a>
		 			<a href="hapus.php?kode=<?= $b['kode']; ?>" onclick='return confirm("Menghapus data?");'>Delete</a>
		 		</td>
 		</tr>

 	<?php 
 		$i++;
 		endforeach; ?>
 	</table>

 		<!-- ============================================================== --><br>









 	<h3>TABLE KASIR (mysqli_fetch_array)</h3>

<!-- FORM TAMBAH DATA -->
 	<form action="" method="post">
 		
 			<tr>
 				<td>
 					<input type="text" name="id_pelanggan" placeholder="masukan id.." required>
 				</td>
 				<td>
 					<input type="text" name="nama_pelanggan" placeholder="masukan nama.." required>
 				</td>
 				<td>
 					<input type="text" name="jumlah" placeholder="masukan jumlah.." required>
 				</td>
 				<td>
 					<button type="submit" name="tambah_customer">Tambah Data</button>
 				</td>
 			</tr>

 			<br><br>
 
 	</form>

<!-- TABLE OPERATOR -->
 	<table border="1" cellpadding="10" cellspacing="">
 		<tr>
 			<th>NO</th>
 			<th>ID PELANGGAN</th>
 			<th>NAMA PELANGGAN</th>
 			<th>JUMLAH</th>
 			<th>Aksi</th>
 		</tr>

 	<?php
 		$i = 1; 
 		foreach ($customer as $b) : ?>

 		<tr>
 			<td><?= $i; ?></td>
 			<td><?= $b["id_pelanggan"]?></td>
 			<td><?= $b["nama_pelanggan"]?></td>
 			<td><?= $b["jumlah"]?></td>
 			<td>
			 	<a href="hapus_customer.php?id_pelanggan=<?= $b['id_pelanggan']; ?>" onclick='return confirm("Menghapus data?");'>Delete</a>
		 	</td>
 		</tr>

 	<?php 
 		$i++;
 		endforeach; ?>
 	</table>


 	
 
 </body>
 </html> 