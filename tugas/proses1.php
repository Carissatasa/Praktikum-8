<?php
$conn = mysqli_connect("localhost","root","","formulir");

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$namaayah = $_POST['namaayah'];
	$lahirayah = $_POST['lahirayah'];
	$pendayah = $_POST['pendayah'];
	$kerjaayah = $_POST['kerjaayah'];
	$hasilayah = $_POST['hasilayah'];
	$abkayah = $_POST['abkayah'];

$query = "INSERT INTO dataayah VALUES ('$namaayah','$lahirayah','$pendayah','$kerjaayah','$hasilayah','$abkayah')";

if(mysqli_query($conn, $query) == TRUE){
	echo "Data berhasil disimpan";
}else{
	echo "Terjadi kesalahan : " .mysql_error($conn);
}

}

 
echo "<h2>Data Ayah</h2>";
echo "Nama Ayah = ".$namaayah;
echo "<br>";
echo "Tahun Lahir = ".$lahirayah;
echo "<br>";
echo "Pendidikan = ".$pendayah;
echo "<br>";
echo "Penghasilan Bulanan = ".$hasilayah;
echo "<br>";
echo "Berkebutuhan Khusus = ".$abkayah;

?>