<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Form Gaji</title>
</head>
<body>
	<main>

		<h1>Form Input Data Karyawan</h1>
		<form action="hitung_gaji.php" method="post">
			<label for="karyawan">Nama Karyawan :</label>
			<input type="text" name="karyawan" id="karyawan">

			<label for="golongan">Golongan :</label>
			<select name="golongan" id="golongan">
				<option value="1">I</option>
				<option value="2">II</option>
				<option value="3">III</option>
				<option value="4">IV</option>
			</select>

			<label for="jumlah_anak">Jumlah Anak :</label>
			<input type="text" name="jumlah_anak" id="jumlah_anak">

			<label for="jam_lembur">Jam Lembur :</label>
			<input type="text" name="jam_lembur" id="jam_lembur">

			<input type="submit" value="hitung">
		</form>
	</main>

</body>
</html>