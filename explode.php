<?php
include '../header.php';
$str = "25/09/2023 14:04";
$kq = explode(" ", $str);
//var_dump($kq); 
$ngay = explode("/", $kq[0]);
$gio = explode(":", $kq[1]);
echo "Ngày " . $ngay[0] . " tháng " . $ngay[1] . " năm " . $ngay[2] . " " . $gio[0] . " Giờ " . $gio[1] . " phút"; 
?>