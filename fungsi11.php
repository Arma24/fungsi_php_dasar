<?php 

	echo "<h1> Perulangan </h1>";
	$a = 1;

	while($a<=5)
	{
		echo "Angka : $a <br>";
		$a++;
	}

	echo "<br>";

	echo "<h1> Perulangan Do While </h1>";
	$a = 1;

	do{
		echo "Angka : $a <br>";
		$a++;
	}
	while ($a<=5);

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
?>