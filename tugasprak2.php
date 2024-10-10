<?php
function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$send = curl("http://localhost/rekayasaweb/pertemuan2/getwisata.php");

$data = json_decode($send, TRUE);

echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr>";
echo "<th>Kota</th>";
echo "<th>Landmark</th>";
echo "<th>Tarif</th>";
echo "</tr>";

foreach($data as $row){
    echo "<tr>";
    echo "<td>" . $row["kota"] . "</td>";
    echo "<td>" . $row["landmark"] . "</td>";
    echo "<td>" . $row["tarif"] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
