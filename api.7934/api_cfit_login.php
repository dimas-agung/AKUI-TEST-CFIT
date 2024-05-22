<?php

$nik = $_GET['nik'];
$url = 'http://103.215.177.169:81/api/Pelamar?nik=' . $nik;
// $result=
$data = file_get_contents($url);


echo $data;
?>