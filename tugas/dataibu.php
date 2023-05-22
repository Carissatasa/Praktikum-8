<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1 style="text-align: center; margin-top: 30px;">FORMULIR PESERTA DIDIK</h1><br><br>
		<p class="subjudul" style="background-color: black; color: white;">DATA IBU KANDUNG</p>
	</div>

	<div class="container mt-4 mb-4">
		<form method="post" action="proses2.php">
		<!-- 40. Nama Ibu Kandung -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label for="namaibu" class="col-form-label font-weight-bold">40. Nama Ibu Kandung</label>
			</div>
			<div class="col">
				<input type="text" id="namaibu" name="namaibu" class="form-control">
			</div>
		</div>
		<!-- 41. Tahun Lahir -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label for="lahiribu" class="col-form-label font-weight-bold">41. Tahun Lahir</label>
			</div>
			<div class="col">
				<input type="text" id="lahiribu" name="lahiribu" class="form-control">
			</div>
		</div>
		<!-- 42. Pendidikan -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label for="pendibu" class="col-form-label font-weight-bold">42. Pendidikan</label>
			</div>
			<div class="col">
    			<select id="pendibu" name="pendibu" class="form-select">
     			 <option selected>Pilih opsi..</option>
     			 <option value="Tidak Sekolah">Tidak Sekolah</option>
     			 <option value="Putus SD">Putus SD</option>
     			 <option value="SD Sederajat">SD Sederajat</option>
     			 <option value="SMP Sederajat">SMP Sederajat</option>
     			 <option value="SMA Sederajat">SMA Sederajat</option>
     			 <option value="D1">D1</option>
     			 <option value="D2">D2</option>
     			 <option value="D3">D3</option>
     			 <option value="D4/S1">D4/S1</option>
     			 <option value="S2">S2</option>
     			 <option value="S3">S3</option>
    			</select>
			</div>
		</div>	
		<!-- 43. Pekerjaan -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label for="kerjaibu" class="col-form-label font-weight-bold">43. Pekerjaan</label>
			</div>
			<div class="col">
    			<select id="kerjaibu" name="kerjaibu" class="form-select">
     			 <option selected>Pilih opsi..</option>
     			 <option value="Tidak Bekerja">Tidak Bekerja</option>
     			 <option value="Nelayan">Nelayan</option>
     			 <option value="Petani">Petani</option>
     			 <option value="Peternak">Peternak</option>
     			 <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
     			 <option value="Karyawan Swasta">Karyawan Swasta</option>
     			 <option value="Pedagang Kecil">Pedagang Kecil</option>
     			 <option value="Pedagang Besar">Pedagang Besar</option>
     			 <option value="Wiraswasta">Wiraswasta</option>
     			 <option value="Wirausaha">Wirausaha</option>
                 <option value="Buruh">Buruh</option>
                 <option value="Pensiunan">Pensiunan</option>
     			 <option value="Lain-lain">Lain-lain</option>
    			</select>
			</div>
		</div>	
		<!-- 44. Penghasilan Bulanan -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label for="hasilibu" class="col-form-label font-weight-bold">44. Penghasilan Bulanan</label>
			</div>
			<div class="col">
    			<select id="hasilibu" name="hasilibu" class="form-select">
     			 <option selected>Pilih opsi..</option>
     			 <option value="Kurang dari 500.000">Kurang dari 500.00</option>
     			 <option value="500.000-999.999">500.000-999.999</option>
     			 <option value="1 juta-1.999.999">1 juta-1.999.999</option>
     			 <option value="2 juta-4.999.999">2 juta-4.999.999</option>
     			 <option value="5 juta-20 juta">5 juta-20 juta</option>
     			 <option value="lebih dari 20 juta">Lebih dari 20 juta</option>
    			</select>
			</div>
		</div>
		<!-- 45. Berkebutuhan Khusus -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label for="abkibu" class="col-form-label font-weight-bold">45. Berkebutuhan Khusus</label>
			</div>
			<div class="col">
    			<select id="abkibu" name="abkibu" class="form-select">
     			 <option selected>Pilih opsi..</option>
     			 <option value="Tidak">Tidak</option>
     			 <option value="Netra (A)">Netra (A)</option>
     			 <option value="Rungu (B)">Rungu (B)</option>
     			 <option value="Grahita Ringan (C)">Grahita Ringan (C)</option>
     			 <option value="Grahita Sedang (C1)">Grahita Sedang (C1)</option>
     			 <option value="Daksa Ringan (D)">Daksa Ringan (D)</option>
     			 <option value="Daksa Sedang (D1)">Daksa Sedang (D1)</option>
     			 <option value="Laras (E)">Laras (E)</option>
     			 <option value="Wicara (F)">Wicara (F)</option>
     			 <option value="Tuna Ganda (G)">Tuna Ganda (G)</option>
     			 <option value="Hiper Aktif (H)">Hiper Aktif (H)</option>
     			 <option value="Cerdas Istimewa (i)">Cerdas Istimewa (i)</option>
     			 <option value="Bakat Istimewa (J)">Bakat Istimewa (J)</option>
     			 <option value="Kesulitan Belajar (K)">Kesulitan Belajar (K)</option>
     			 <option value="Narkoba (N)">Narkoba (N)</option>
     			 <option value="Indigo (O)">Indigo (O)</option>
     			 <option value="Down Syndrome (P)">Down Syndrome (P)</option>
     			 <option value="Autis (Q)">Autis (Q)</option>
    			</select>
			</div>
		</div>

		<div class="col-md-12 mt-4 d-flex justify-content-end">
            <button class="btn btn-primary ml-3" type="submit" value="Submit">Submit</button>
        </div>
        <div class="col-md-12 mt-4 d-flex justify-content-end">
            <a class="btn btn-primary" href="dataayah.php"> << Data Ayah</a>
        </div>

    	</form>

	</div>
</body>
</html>