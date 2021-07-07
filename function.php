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
	$tgl = date('y-m-d');

	$query = "INSERT INTO data_user VALUES('$nama', '$email', '$pesan', '$tgl')";

	mysqli_query($conn, $query);
	
	return mysqli_affected_rows($conn);
}

?>