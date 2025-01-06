<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Link Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Link Js Bootstrap -->
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Link Font Google -->
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&family=Roboto:wght@300&display=swap" rel="stylesheet">
  <!-- Links CSS Manual -->
  <link rel="stylesheet" href="./jadwal.css">

</head>

	<body>
        <center>
    <h1>Form Edit soal</h1>
        <form action="./tambahsoal.php" method="POST">
			<div class="wrap">
			  <div class="container">
				<form action="" method="POST">
				  <table>
                  <tr>
                    <td><label>ID Soal</label></td>
				  <td>
					<input
					  type="text"
					  name="id_soal"
					  id="name"
					/>
				  </td>
				</tr>
                <tr>
                    <td><label>ID Matkul</label></td>
				  <td>
					<input
					  type="text"
					  name="id_matkul"
					  id="name"
					/>
				  </td>
				</tr>
					<tr>
                    <td><label>soal</label></td>
				  <td>
					<input
					  type="text"
					  name="soal"
					  id="name"
                      size="200"
					/>
				  </td>
				</tr>
				<tr>
				  <td><label>Option A</label></td>
				  <td>
					<input
					  type="text"
					  name="a"
					  id="name"
                      size="200"
					/>
				  </td>
				</tr>
                <tr>
				  <td><label>Option B</label></td>
				  <td>
					<input
					  type="text"
					  name="b"
					  id="name"
                      size="200"
					/>
				  </td>
				</tr>
                <tr>
				  <td><label>Option C</label></td>
				  <td>
					<input
					  type="text"
					  name="c"
					  id="name"
                      size="200"
					/>
				  </td>
				</tr>
                <tr>
				  <td><label>Kunci Jawaban</label></td>
				  <td>
					<input
					  type="text"
					  name="kunci"
					  id="name"
                      size="200"
					/>
				  </td>
				</tr>
                <tr>
				  <td><label>Tanggal</label></td>
				  <td>
					<input
					  type="date"
					  name="tanggal"
					  id="name"
					/>
				  </td>
				</tr>
                <tr>
				  <td><label>Aktif</label></td>
				  <td>
					<input
					  type="text"
					  name="aktif"
					  id="name"
					/>
				  </td>
				</tr>
			</table>

			<div class="flex-tambahjadwal">
			  <input type="submit" name="tambah" value="Tambah Jadwal" />
			  <li><a href="datajadwal.php" class="kluar-jadwal">Kembali</a></li>
		  </form>
		</div>
	  </div>
	  </div>


	  <?php

	  include("koneksi.php");

	  // cek apakah tombol daftar sudah diklik atau blum?
	  if (isset($_POST['tambah'])) {

		// ambil data dari formulir
        $id_soal = $_POST['id_soal'];
        $id_matkul = $_POST['id_matkul'];
        $soal = $_POST['soal'];
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $kunci = $_POST['kunci'];
        $tanggal = $_POST['tanggal'];
        $aktif = $_POST['aktif'];
    
		// buat query
		$sql = "INSERT INTO soal (id_soal, id_matkul, soal, a, b, c, kunci, tanggal, aktif) VALUES ( '$id_soal', '$id_matkul','$soal','$a','$b','$c','$kunci','$tanggal','$aktif')";
		$query = mysqli_query($db, $sql);

		// apakah query simpan berhasil?
		if ($query) {
		  // kalau berhasil alihkan ke halaman index.php dengan status=sukses
		  header('Location: soal.php?status=sukses');
		} else {
		  // kalau gagal alihkan ke halaman indek.php dengan status=gagal
          echo mysqli_error($db); 
		}
	  }

	  ?>

	</body>

	</html>