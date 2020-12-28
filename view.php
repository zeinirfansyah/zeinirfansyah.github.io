<?php 
	include 'koneksi.php';

	$query = "SELECT * FROM mhs";

	$call = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Menampilkan Data</title>
	<style type="text/css">
		html {
		    font-size: 15px;
		    font-family: 'Montserrat', sans-serif;
		    scroll-behavior: smooth;
		}

		a {
		    text-decoration: none;
		    color: #41527a;
		    font-size: 15px
		}

		table {
		  border-collapse: collapse;
		  width: 100%;
		}

		th, td {
		  text-align: left;
		  padding: 8px;
		}

		tr:nth-child(even){background-color: #f2f2f2}

		th {
		  background-color: #FFC000;
		  color: black;
		}

	</style>
</head>
<body>
	<h1>Riwayat Konsultasi</h1>
	<table border="1" align="center">
		<tr align="center">
			<th>Kode Video</th>
			<th>Judul Pertanyaan</th>
			<th>Pertanyaan</th>
			<th colspan="2">Action</th>
		</tr>
		<?php while ($tampil = mysqli_fetch_array($call)){ ?>
		<tr align="center">
			<td><?= $tampil ['kode']; ?></td>
			<td><?php echo $tampil ['judul']; ?></td>
			<td><?= $tampil ['pertanyaan']; ?></td>
			<td>
				<a href="edit.php?kode=<?=$tampil['kode'];?>">Sunting</a>
			</td>
			<td><a href="delete.php?kode=<?=$tampil['kode'];?>">Delete</a></td>
		</tr>
	<?php } ?>
	</table>
</body>
</html>