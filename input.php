<?php
	include ("koneksi.php");

	if (isset($_POST['tambah_data'])) {
		$kode = $_POST['kode'];
		$judul = $_POST['judul'];
		$pertanyaan = $_POST['pertanyaan'];


		$query = "INSERT INTO mhs (kode, judul, pertanyaan)
		VALUES ('$kode', '$judul', '$pertanyaan')";

		// $hasil = mysqli_query($conn,$query);

		$hasil =mysqli_query($conn,$query);

		if ($hasil) {
			echo '<script>alert("Input data berhasil")</script>';
		}
		else {
			echo '<script>alert("Input data gagal")</script>';
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Input Data</title>
	<style type="text/css">
		html {
		    font-size: 10px;
		    font-family: 'Montserrat', sans-serif;
		    scroll-behavior: smooth;
		}

		a {
		    text-decoration: none;
		    color: #7698cf;
		    font-size: 20px;
		}

		b {
			font-size: 20px;
		}

		form {
			background: #fcfcfc;
		}
		input{
			width : 900px;
		    border-radius: 10px;
		    padding: 12px;
		    margin: 0;
		    display: inline-block;
		    border: 1px solid #ccc;
		    box-sizing: border-box;
		}
		textarea{
			width : 900px;
			border-radius: 10px;
		    padding: 12px;
		    margin: 0;
		    display: inline-block;
		    border: 1px solid #ccc;
		    box-sizing: border-box;
		}
		.button {
		  background-color: #FFC000;
		  border: none;
		  color: black;
		  padding: 12px 30px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		  margin: 4px 2px;
		  cursor: pointer;
		}
	</style>
</head>
<body>
	<form method="post">
		<table width="90 %" border="0" align="center">
			<tr>
				<td><h1 align="center">KONSULTASI</h1></td>
			</tr>
			<tr>
				<td><input type="text" name="kode" placeholder="Kode Konsultasi"></td>
			</tr>
			<tr>
				<td><input type="text" name="judul" placeholder="Judul Konsultasi"></td>
			</tr>
			<tr>
				<td><textarea type="text" name="pertanyaan" placeholder="Masukan pertanyaan" rows="7" cols="50"></textarea></td>
			</tr>
			<tr>
				<td style="text-align: center;"><button class="button" name="tambah_data">KIRIM PERTANYAAN</button></td>
			</tr>
		</table>
	</form>
</body>
</html>