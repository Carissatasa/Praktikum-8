<?php 
include "conn.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($conn, "SELECT * FROM login WHERE username = '".$username."' AND password = '".$password."' ") or die (mysqli_error());

if(mysqli_num_rows($sql) == 0){
	echo '<script language = "javascript">
	alert("Username dan password salah! Silakan login kembali");
	document.location="login1.php"; </script>';
} else {
	echo '<script language = "javascript">
	alert("Login berhasil!");
	document.location="formdiri.php"; </script>';
}
?>