<?php 

	$conn = mysqli_connect("localhost","root","","ariyanto_311810886");

	function operator($query) {
		global $conn;
			 $result = mysqli_query($conn, $query);
			 $array = [];
			 while($row = mysqli_fetch_array($result)) {
			 	$array[] = $row;
			 }
			 	return $array;
		}

	function customer($query) {
		global $conn;
			 $result = mysqli_query($conn, $query);
			 $array = [];
			 while($row = mysqli_fetch_array($result)) {
			 	$array[] = $row;
			 }
			 	return $array;
		}


	function tambah_operator($data) {
		global $conn;

			$kode = htmlspecialchars($data['kode']);
			$nama = htmlspecialchars($data['nama']);
			
				$query = "INSERT INTO operator VALUES
					('$kode','$nama')";

					mysqli_query($conn, $query);
					return mysqli_affected_rows($conn);
	}	

	function tambah_kasir($data) {
		global $conn;

			$id_pelanggan = htmlspecialchars($data['id_pelanggan']);
			$nama_kasir = htmlspecialchars($data['nama_pelanggan']);
			$jumlah = htmlspecialchars($data['jumlah']);
			
				$query = "INSERT INTO customer VALUES
					('$id_pelanggan','$nama_kasir','$jumlah')";

					mysqli_query($conn, $query);
					return mysqli_affected_rows($conn);
	}	

	function edit($data) {
		global $conn;

			$kode = htmlspecialchars($data['kode']);
			$nama = htmlspecialchars($data['nama']);
		
				$query = "UPDATE operator SET
							kode = '$kode',
							nama = '$nama'
							WHERE kode = $kode";

					mysqli_query($conn, $query);
					return mysqli_affected_rows($conn);
	}	

	function hapus($kode) {
			global $conn;
				$query = "DELETE FROM operator WHERE kode = $kode";
				mysqli_query($conn, $query);
				return mysqli_affected_rows($conn);
		}

	function hapus_customer($id_pelanggan) {
			global $conn;
				$query = "DELETE FROM customer WHERE id_pelanggan = $id_pelanggan";
				mysqli_query($conn, $query);
				return mysqli_affected_rows($conn);
		}
 ?>