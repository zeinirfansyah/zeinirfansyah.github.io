<?php 
	include 'koneksi.php';

	$id = $_GET['kode'];

	$query = "DELETE FROM mhs WHERE kode = $id";

	$delete = mysqli_query($conn, $query);

	if ($delete) {
		echo '<script>alert("Hapus data berhasil")</script>';
	}
	else {
		echo '<script>alert("Hapus data gagal")</script>';
	}
	

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

		.pagging {
			padding: 10px;
			text-align: center;
			text-transform: uppercase;
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
		<?php
			$halaman = 3;
			$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
			$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
			$result = mysqli_query($conn, "SELECT * FROM mhs");
			$total = mysqli_num_rows($result);
			$pages = ceil($total/$halaman);
			$query = mysqli_query($conn, "SELECT * FROM mhs LIMIT $mulai, $halaman") or die(mysql_error);
			$no = $mulai+1;

		 while ($tampil = mysqli_fetch_array($query)){ ?>
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

	<tr>
		<td colspan="5" >
		<div class="pagging">
			<?php for ($i=1; $i <= $pages; $i++) { ?>
			 | <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
			<?php }?>|
		</div >
		</td>
	</tr>
	</table>
	
</body>
</html>