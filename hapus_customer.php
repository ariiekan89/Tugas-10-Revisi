<?php 	
		require 'koneksi.php';
		
		$id_pelanggan = $_GET['id_pelanggan'];

			if(hapus_customer($id_pelanggan)) {
				echo "<script>
							alert('Data berhasil dihapus');
							document.location.href='index.php';
						  </script>";
		 		} else {
		 			echo "<script>
							alert('Data gagal dihapus');
							document.location.href='index.php';
						  </script>";
				}
 ?>