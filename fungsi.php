<?php
function hitungLuasPersegiPanjang($panjang, $lebar) {
    return $panjang * $lebar;
}
$p = 8;
$l = 5;
$luas = hitungLuasPersegiPanjang($p, $l);

echo "Luas persegi panjang dengan panjang $p dan lebar $l adalah $luas";