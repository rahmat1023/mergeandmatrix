<?php
// output matriks a
echo "<table border='1' cellspacing='0' cellpadding='5'>";
for ($i=0; $i<$n; $i++){
	echo '<tr>';
	for ($j=0; $j<$n; $j++){
		echo '<td>' .$a[$i][$j]. '</td>';
	}
	echo'</tr>';
}
echo'</table>';

// output matriks b
echo "<table border='1' cellspacing='0' cellpadding='5'>";
for ($i=0; $i<$n; $i++){
	echo '<tr>';
	for ($j=0; $j<$n; $j++){
		echo '<td>' .$b[$i][$j]. '</td>';
	}
	echo'</tr>';
}
echo'</table>';

//output hasil
$hasil = perkalian_matriks($a, $b);
echo "<table border='1' cellspacing='0' cellpadding='5'>";
for ($i=0; $i<sizeof($hasil); $i++) {
	echo "<tr>";
	for ($j=0; $j<sizeof($hasil[$i]); $j++) {
		echo "<td>". $hasil[$i][$j]."</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>

