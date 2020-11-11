<?php

// Ta không thể new một object bằng cách $obj = object() => dùng stdClass

$but = new stdClass;
$but->loai = "Bút chì";
$but->ten = "Bút chì 2B";

$hinhDang = new stdClass;
$hinhDang->mauSac = "Màu nâu";
$hinhDang->chieuDai = "15 cm";
$hinhDang->canNang = "100g";

$but->hinhDang = $hinhDang;

print_r($but);

