<?php
date_default_timezone_set("Asia/Jakarta");

$jam = date("H");

if ($jam >= 4 && $jam <= 10) {
    $salam = "pagi";
} else if ($jam >= 11 && $jam <= 14) {
    $salam = "siang";
} else if ($jam >= 15 && $jam <= 17) {
    $salam = "sore";
} else {
    $salam = "malam";
}

echo "Selamat " . $salam;
?>