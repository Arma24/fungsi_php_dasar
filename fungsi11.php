<?php 

	echo "<h1> Perulangan While</h1>";
	$a = 1;

	while($a<=5)
	{
		echo "Angka : $a <br>";
		$a++;
	}
	//perulangan while yaitu perulangan kode program berdasarkan suatu kondisi yang bernilai benar. jika kondisi tersebut bernilai salah, maka perulangan berhenti

	echo "<br>";

	echo "<h1> Perulangan Do While </h1>";
	$a = 1;

	do{
		echo "Angka : $a <br>";
		$a++;
	}
	while ($a<=5);
	//perulangan do whila yaitu perintah untuk mengerjakan kode program lalu mengulang proses tersebut selama kondisi bernilai benar. perulangan berhenti jika kondisi tidak terpenuhi lagi

	echo "<br>";

	echo "<h1> Perulangan For </h1>";
	for($a=0; $a<=10; $a++)
	{
		echo "Angka : $a <br>";
	}

	echo "<br>";
	echo "<h1> Perulangan Foreach </h1>";
	$warna = array("merah","hijau","biru");

	foreach($warna as $value)
	{
		echo "$value <br>";
	}
	//perulangan for yaitu perulangan kode program dengan jumlah angka perulangan tertentu. perulangan berhenti setelah tercapai angka perulangan yang diset pada inisialisasi FOR. perulangan FOR dipakai jika kita sudah mengetahui berapa jumlah perulangan yang diinginkan
?>