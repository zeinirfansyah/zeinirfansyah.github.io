<?php
	include 'koneksi.php';
	$id = $_GET['kode'];
	$query = "SELECT * FROM mhs WHERE kode = '$id'";
	$tampil = mysqli_query($conn, $query);

	if (isset($_POST['simpan'])) {
		$kode = $_POST['kode'];
		$judul = $_POST['judul'];
		$pertanyaan = $_POST['pertanyaan'];

		$query2 = "UPDATE mhs SET
		kode='$kode',
		judul='$judul',
		pertanyaan='$pertanyaan'
		WHERE kode = '$id'";

		$ubah = mysqli_query($conn, $query2);

		if ($ubah) {
			echo '<script>alert("Edit data berhasil")</script>';
		}
		else {
			echo '<script>alert("Edit data gagal")</script>';
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
	<style type="text/css">
		html {
		    font-size: 10px;
		    font-family: 'Montserrat', sans-serif;
		    scroll-behavior: smooth;
		}

		a {
		    text-decoration: none;
		    color: #7698cf;
		    font-size: 20px
		}
		
		b {
			font-size: 20px;
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
		form {
			background: #fcfcfc;
		}

		.button {
		  background-color: #B4846C;
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
	<a href="view.php">Back to View Data</a>
	<?php while ($show = mysqli_fetch_array($tampil)) { ?>
	<form method="post">
		<table width="90 %" border="0" align="center">
			<tr>
				<td><h1 align="center">Edit Pertanyaan</h1></td>
			</tr>
			<hr>
			<tr>
				<td><input type="text" name="kode" value="<?= $show['kode']?>"></td>
			</tr>
			<tr>
				<td><input type="text" name="judul" value="<?= $show['judul']?>"></td>
			</tr>
			<tr>
				<td><textarea type="text" name="pertanyaan" rows="7" cols="50"><?= $show['pertanyaan']?></textarea></td>
			</tr>
			<tr>
				<td style="text-align: center;"><button class="button" name="simpan">Simpan</button></td>
			</tr>
		</table>
		<hr>
	</form>
	<?php } ?>
</body>
</html>