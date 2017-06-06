 <!DOCTYPE html>
<html>
<head>
	<title> Perkalian Matriks </title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<?php
$n=$_GET['n'];
$a = array();
for ($i=0; $i<$n; $i++){
	for ($j=0; $j<$n; $j++){
		$a[$i][$j] =rand(1,10);
	}
}

$b = array();
for ($i=0; $i<$n; $i++){
	for ($j=0; $j<$n; $j++){
		$b[$i][$j] =rand(1,10);
	}
}



function perkalian_matriks($matriks_a, $matriks_b) {
	$hasil = array();
	for ($i=0; $i<sizeof($matriks_a); $i++) {
		for ($j=0; $j<sizeof($matriks_b[0]); $j++) {
			$temp = 0;
			for ($k=0; $k<sizeof($matriks_b); $k++) {
				$temp += $matriks_a[$i][$k] * $matriks_b[$k][$j];
			}
			$hasil[$i][$j] = $temp;
		}
	}
	return $hasil;
}

$x = perkalian_matriks($a, $b);

// include 'output.php';
?>

<h1>
	Perhitungan Selesai
</h1>

<div id="back">
	<a href="index.php">Kembali</a>
</div>

</body>
</html> 
