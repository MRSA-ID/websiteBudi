<?php 

$conn = mysqli_connect("localhost", "root", "", "user");

function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row; 
	}
	return $rows;
}

function tambah($data){
	global $conn;

	$nama = $_POST["nama_input"];
	$email = $_POST["email_input"];
	$pesan = $_POST["pesan"];
	$perihal = $_POST["perihal"];
	$tgl = date('d-m-y');

	$query = "INSERT INTO data_user VALUES('$nama', '$email', '$pesan', '$perihal', '$tgl')";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

?>