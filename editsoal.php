<?php

include("koneksi.php");

// kalau tidak ada id di query string
if (!isset($_GET['id_soal'])) {
	header('Location: soal.php');
}

//ambil id dari query string
$id_soal = $_GET['id_soal'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM soal WHERE id_soal=$id_soal";
$query = mysqli_query($db, $sql);
$soal    = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
	die("data tidak ditemukan...");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="./css/editsoal.css" />
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
	<form action="prosesedit.php" method="POST">
		<div class="wrap">
			<div class="container">
				<h1>Form Edit soal</h1>
				<form action="" method="POST">
					<table>
						<tr class="id">
							<td><label>ID Soal</label></td>
							<td>
								<input type="text" name="id_soal" id="name" value="<?php echo $soal['id_soal'] ?>" />
							</td>
						</tr>

						<tr class="klz">
							<td><label>soal</label></td>
							<td>
								<input type="text" name="soal" id="name" value="<?php echo $soal['soal'] ?>" />
							</td>
						</tr>
						<tr class="klz">
							<td><label>Option A</label></td>
							<td>
								<input type="text" name="a" id="name" value="<?php echo $soal['a'] ?>" />
							</td>
						</tr>
						<tr class="klz">
							<td><label>Option B</label></td>
							<td>
								<input type="text" name="b" id="name" value="<?php echo $soal['b'] ?>" />
							</td>
						</tr>
						<tr class="klz">
							<td><label>Option C</label></td>
							<td>
								<input type="text" name="c" id="name" value="<?php echo $soal['c'] ?>" />
							</td>
						</tr>
						<tr class="kta">
							<td><label>Kunci Jawaban</label></td>
							<td>
								<input type="text" name="kunci" id="name" value="<?php echo $soal['kunci'] ?>" />
							</td>
						</tr>
						<tr class="kta">
							<td><label>Tanggal</label></td>
							<td>
								<input type="date" name="tanggal" id="name" value="<?php echo $soal['tanggal'] ?>" />
							</td>
						</tr>
						<tr class="aktf">
							<td><label>Aktif</label></td>
							<td>
								<input type="text" name="aktif" id="name" value="<?php echo $soal['aktif'] ?>" />
							</td>
						</tr>

					</table>

					<div class="flex">
						<input type="submit" name="simpan" value="simpan" />
						<a href="soal.php"><button>kembali</button></a>
					</div>
				</form>
			</div>
		</div>
		</div>