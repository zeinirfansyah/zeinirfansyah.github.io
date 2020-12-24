<?php 
	include 'koneksi.php';

	$id = $_GET['kode'];

	$query = "DELETE FROM mhs WHERE kode = $id";

	$delete = mysqli_query($conn, $query);

	if ($delete) {
		echo "<br><b>Hapus data berhasil</b>";
	}
	else {
		echo "<br><b>Hapus data gagal</b>";
	}

 ?>

 <br>
 <a href="view.php"><h1>Back to View Data</h1></a>
 <style type="text/css">
 html {
    font-size: 20px;
    font-family: 'Montserrat', sans-serif;
    scroll-behavior: smooth;
}

h1 {
	font-size: 30px;
}

a{
	color: #41527a;
}
 </style>