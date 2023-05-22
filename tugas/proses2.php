<?php
$conn = mysqli_connect("localhost","root","","formulir");

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$namaibu = $_POST['namaibu'];
	$lahiribu = $_POST['lahiribu'];
	$pendibu = $_POST['pendibu'];
	$kerjaibu = $_POST['kerjaibu'];
	$hasilibu = $_POST['hasilibu'];
	$abkibu = $_POST['abkibu'];

$query = "INSERT INTO dataibu VALUES ('$namaibu','$lahiribu','$pendibu','$kerjaibu','$hasilibu','$abkibu')";

if(mysqli_query($conn, $query) == TRUE){
	echo "Data berhasil disimpan";
}else{
	echo "Terjadi kesalahan : " .mysql_error($conn);
}

}

echo "<h2>Data Ibu</h2>";
echo "Nama Ibu = ".$namaibu;
echo "<br>";
echo "Tahun Lahir = ".$lahiribu;
echo "<br>";
echo "Pendidikan = ".$pendibu;
echo "<br>";
echo "Penghasilan Bulanan = ".$hasilibu;
echo "<br>";
echo "Berkebutuhan Khusus = ".$abkibu;

?>