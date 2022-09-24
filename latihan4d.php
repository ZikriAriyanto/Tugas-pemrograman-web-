<?php

$data = [
    array ("Indonesia", "D.K.I. Jakarta", "+62"),
    array ("Singapura", "Singapura", "+65"),
    array ("Malaysia", "Kuala Lumpur", "+60"),
    array ("Brunei", "Bandar Seri Bengawan", "+673"),
    array ("Thailand", "Bangkok", "+66"),
    array ("Laos", "Vientiane", "+856"),
    array ("Failipina", "Manila", "+63"),
    array ("Myanmar", "Naypyidaw", "+95"),
];

echo "<table border='1'";
echo "<tr><th>Negara</th><th>Ibu Kota</th><th>Kode Telepon</th></tr>";
foreach ($data as $rows => $row)
{
	echo "<tr>";
	foreach ($row as $col => $cell)
	{
		echo "<td>" . $cell . "</td>";
	}	
 
}	
  echo "</tr></table>";
?>