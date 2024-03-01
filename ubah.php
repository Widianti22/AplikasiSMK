<?php 
require 'function.php';
$id = $_GET["id"];
$swa = query("SELECT * FROM siswa WHERE id =
	$id")["0"];

if(isset($_POST["submit"])) {
	if (ubah($_POST) > 0){
		echo "  <script>
				alert('data berhasil di ubah!');
				document.location.href = 'index.php';
				</script>
			 ";

				}else{
						echo "  <script>
				alert('data gagal di ubah!');
				document.location.href = 'index.php';
				</script>";			
	}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>tambah data</title>
</head>
<body>
	<h2>Ubah data siswa</h2>
	<form action="" method="post">
		<ul>
				<input type="hidden" name="id" value="<?= $swa["id"]; ?>">
		
			<li><label for="nama">
				NAMA :</label>
				<input type="text" name="nama"id="nama" value="<?= $swa["nama"]; ?> "  required>
			</li>
			<li><label for="nis" >
				NIS :</label>
				<input type="text" name="nis"id="nis" value="<?= $swa["nis"]; ?> " required>
			</li>
			<li><label for="email" >
				EMAIL :</label>
				<input type="text" name="email"id="email" value="<?= $swa["email"]; ?>" required>
			</li>

			<li><label for="jurusan">
				JURUSAN :</label>
				<input type="text" name="jurusan"id="jurusan" value="<?= $swa["jurusan"]; ?> "  required>
			</li>
			<li><label for="gambar">
				 GAMBAR :</label>
				<input type="text" name="gambar"id="gambar" value="<?= $swa["gambar"]; ?> "  required>
			</li>
			<br>
			<li>
				<button type="submit" name="submit">Ubah data</button>
			</li>
		</ul>


	</form>
</body>
</html>