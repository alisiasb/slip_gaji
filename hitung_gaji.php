<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Detail Gaji</title>
</head>
<body>
	<main>
		<a class="top-link" href="index.php">Home</a>
		<h2 class="header-text">Slip Gaji Karyawan</h2>

		<?php
			function salary_pokok($gol){
				$gaji_pokok = 0;

				if($gol == 1){
					$gaji_pokok = 3000000;
				}else if ($gol == 2) {
					$gaji_pokok = 4000000;
				}else if ($gol == 3) {
					$gaji_pokok = 5000000;
				}else{
					$gaji_pokok = 6000000;
				}
				return $gaji_pokok;
			} // akhir gaji pokok

			function salary_lembur($jam){
				$upah_lembur = 0;

				if($jam <= 20){
					$upah_lembur = 100000 * $jam;
				}else{
					$upah_lembur = 2000000;
				}
				return $upah_lembur;
			} // akhir dari function upah lembur

			function salary_anak($n_anak){
				$tunjangan_anak = 0;

				if ($n_anak <=3) {
					$tunjangan_anak = 500000 * $n_anak;
				}else{
					$tunjangan_anak = 1500000;
				}
				return $tunjangan_anak;
			} //akhir dari function tunjangan anak

			function total_gaji($gaji_pokok, $upah_lembur, $tunjangan_anak){
				$total = $gaji_pokok + $upah_lembur + $tunjangan_anak;

				return $total;
			} // akhir dari funt total gaji

		if($_POST){
			$karyawan = $_POST['karyawan'];
			$golongan = $_POST['golongan'];
			$jumlah_anak = $_POST['jumlah_anak'];
			$jam_lembur = $_POST['jam_lembur'];

			echo "<ul>";
			echo "<li><h3>Nama Karyawan : " . $karyawan . "</h3>";
			echo "</ul>";

			echo "<ul>";
			echo "<li><h3>Gaji Pokok : <span>" . salary_pokok($golongan) . "</span></h3>";
			echo "</ul>";

			echo "<ul>";
			echo "<li><h3>Tunjangan Anak: <span>" . salary_anak($jumlah_anak)  . "<span></h3>";
			echo "</ul>";

			echo "<ul>";
			echo "<li><h3>Upah Lembur: <span>" . salary_lembur($jam_lembur) . "<span></h3>";
			echo "</ul>";

			echo "<li class='last-item'><h3>Total Gaji :<span>" . total_gaji(salary_pokok($golongan), salary_anak($jumlah_anak), salary_lembur($jam_lembur)) . "</span></h3></li>";
			echo "</ul>";


			


			
		}
		?>
	</main>
</body>
</html>