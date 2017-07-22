<?php 

	$nilai = array("Anggi" => 75, "Riski" => 90, "Oliv" => 85);
	echo $nilai['Anggi'];	//75
	echo "<br>";
	echo $nilai['Riski'];	//90
	echo "<br>";

	$nilai = array();
	$nilai['Ariska'] = 80;
	$nilai['Sari'] = 88;
	$nilai['Tyas'] = 95;

	echo $nilai['Tyas'];
	echo "<br>";
	echo $nilai['Ariska'];

	//array asosiatif. digunakan untuk mendeklarasikan array dengan index string, yaitu dengan cara menyebutkan indexnya terlebih dahulu diikuti operator => dan diikuti valuenya. sedangkan untuk menampilkan value dari suatu array, bisa dengan mengebutkan nama array yang diikuti index arraynya.
?>