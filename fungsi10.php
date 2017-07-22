<?php 

	$tahun = date("Y");
	$kabisat = ($tahun%4 == 0) ? "KABISAT" : "BUKAN KABISAT";
	echo "Tahun <b> $tahun </b> $kabisat";

//fungsi yang digunakan untuk menampilkan tahun sekarang termasuk tahun kabisat atau bukan. pada baris 4diperiksa apakah isi variable $tahun jika dimodulus dengan 4 akan menghasilkan nila 0. jika TRUE, maka $kabisat akan berisi "KABISAT" dan jika FALSE, maka $kabisat akan berisi "BUKAN KABISAT"
?>