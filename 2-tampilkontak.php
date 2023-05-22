<h2>Daftar Kontak</h2>
<table border="1">	
	<tr><th>NO</th><th>NAMA</th><th>JENIS KELAMIN</th><th>EMAIL</th><th>ALAMAT</th><th>KOTA</th><th>PESAN</th></tr>
	<?php
	include 'koneksi.php';
	$kontak = mysqli_query($koneksi, "SELECT * FROM kontak");
	$no = 1;
	foreach ($kontak as $row){
		$jkel = $row['jkel']=='P'?'Perempuan':'Laki-laki';
		echo "<tr>
			<td>$no</td>
			<td>".$row['Nama']."</td>
			<td>".$jkel."</td>
			<td>".$row['Email']."</td>
			<td>".$row['Alamat']."</td>
			<td>".$row['Kota']."</td>
			<td>".$row['Pesan']."</td>
			</tr>";
		$no++;
	}
	?>
</table>