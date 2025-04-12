<?php
$temenSaya = ["Jonathan", "Hibran", "Ramadhan"];
print_r($temenSaya); //untuk menampilkan seluruh nilai array
echo $temenSaya[2];
echo "<ol>";
foreach ($temenSaya as $key => $value) {
    echo "<li>$key. $value</li>";
}
echo "</ol>";
$temenSaya[] = "Jonathan";
unset($temenSaya[0]); //menghilangkan value pertama atau value 0
print_r($temenSaya);

echo "<br><br><br>";
?>