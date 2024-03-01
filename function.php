<?php 
// koneksi ke database
$conn = mysqli_connect("localhost","root", "", "smk");

function query($query) {
	global $conn;
	$result = mysqli_query($conn,$query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}
function tambah_siswa($data) {
	global $conn;

	$nis = htmlspecialchars($data["nis"]);
	$nama = htmlspecialchars($data["nama"]);
	$jk = htmlspecialchars($data["jk"]);
	$tempat_lahir = htmlspecialchars($data["tempat_lahir"]);
	$tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
	$kelas = htmlspecialchars($data["kelas"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	

	$query = "INSERT INTO siswa
				VALUES
			  ('', '$nis', '$nama', '$jk', '$tempat_lahir', '$tanggal_lahir', '$kelas', '$jurusan')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}