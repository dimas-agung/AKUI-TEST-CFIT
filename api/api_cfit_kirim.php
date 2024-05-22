<?php
require 'url_api.php';
// Inisialisasi cURL
$ch = curl_init();

// URL endpoint yang akan menerima data POST
$url = $url_api . 'api/Cfit/Store';

$data = array(
    'nik' => $_POST['nik'],
    'test1' => $_POST['sub1'],
    'test2' => $_POST['sub2'],
    'test3' => $_POST['sub3'],
    'test4' => $_POST['sub4'],
    'hasil_1' => $_POST['scores1'],
    'hasil_2' => $_POST['scores2'],
    'hasil_3' => $_POST['scores3'],
    'hasil_4' => $_POST['scores4'],
    'skor' => $_POST['iqq'],
    'kategori_iq' => $_POST['hasilIq'],
  
);

// Atur opsi cURL
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

// Eksekusi cURL dan dapatkan respons
$response = curl_exec($ch);

// Cek kesalahan pada cURL
if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}

// Tutup koneksi cURL
curl_close($ch);

// Proses respons
echo $response;
?>
