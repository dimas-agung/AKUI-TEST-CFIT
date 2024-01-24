<?php

$nik = $_GET['nik'];
$url = 'http://192.168.1.20:8000/api/Pelamar?nik=' . $nik;
// $result=
$data = file_get_contents($url);


echo $data;
?>