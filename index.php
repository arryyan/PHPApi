	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	$query = "SELECT * FROM siswa"; // Query untuk menampilkan semua data siswa
	$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	
	while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql


		// echo "<tr>";
		// echo "<td><img src='images/".$data['foto']."' width='100' height='100'></td>";
		// echo "<td>".$data['nis']."</td>";
		// echo "<td>".$data['nama']."</td>";
		// echo "<td>".$data['jenis_kelamin']."</td>";
		// echo "<td>".$data['telp']."</td>";
		// echo "<td>".$data['alamat']."</td>";
		// echo "<td><a href='form_ubah.php?nis=".$data['nis']."'>Ubah</a></td>";
		// echo "<td><a href='proses_hapus.php?nis=".$data['nis']."'>Hapus</a></td>";
		// echo "</tr>";
		echo json_encode($data);
		echo "<br>";
	}
