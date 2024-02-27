<?php
// error_reporting(0);
// ini_set('display_errors', 0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Terima Kasih</title>
  <meta name="description" content="Tes cfit">
    <meta name="author" content="Clarymond Simbolon" />
    <link rel="shortcut icon" type="image/png" href="logo2.svg" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
        body {
            background-color: #f0f0f0;
        }

        .container {
            margin-top: 100px;
            background-color: #d4edda;
            /* Bootstrap Success Color */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* Adding Box Shadow */
        }
    </style>
</head>
<body>
  <div class="container text-center">
        <h1 class="mb-4">Terima Kasih telah mengerjakan Tes CFIT</h1>
        <p class="lead">Jawaban tes anda telah terkirim. <br> Silahkan menunggu informasi HR selanjutnya</p>
  </div>
  <script>
    $(document).ready(function () {
            // Retrieve data from localStorage
          var sub1 = JSON.parse(localStorage.getItem('sub1')) || [];
          var sub2 = JSON.parse(localStorage.getItem('sub2')) || [];
          var sub3 = JSON.parse(localStorage.getItem('sub3')) || [];
          var sub4 = JSON.parse(localStorage.getItem('sub4')) || [];

          const subb1 = ["B", "C", "B", "D", "E", "B", "D", "B", "F", "C", "B", "B", "E"];
          const subb2 = ["BE", "AE", "AD", "CE", "BE", "AD", "BE", "BE", "AD", "BD", "AE", "CD", "BC", "AB"];
          const subb3 = ["E", "E", "E", "B", "C", "D", "E", "E", "A", "A", "F", "C", "C"];
          const subb4 = ["B", "A", "D", "D", "A", "B", "C", "D", "A", "D"];

          // Mencocokkan elemen yang sama
          const commonElements1 = sub1.map((value, index) => (value !== null && subb1[index] === value) ? value : null).filter(Boolean);
          const commonElements2 = sub2.map((value, index) => (value !== null && subb2[index] === value) ? value : null).filter(Boolean);
          const commonElements3 = sub3.map((value, index) => (value !== null && subb3[index] === value) ? value : null).filter(Boolean);
          const commonElements4 = sub4.map((value, index) => (value !== null && subb4[index] === value) ? value : null).filter(Boolean);

          // Menghitung jumlah jawaban benar dari semua subtest
          var jumlahBener1 = commonElements1.length;
          var jumlahBener2 = commonElements2.length;
          var jumlahBener3 = commonElements3.length;
          var jumlahBener4 = commonElements4.length;

          var jumlahBener = jumlahBener1 + jumlahBener2 + jumlahBener3 + jumlahBener4;

          var indexIq = jumlahBener;
          var iq = [38, 40, 43, 45, 47, 48, 52, 55, 57, 60, 63, 67, 70, 72, 75, 78, 81, 85, 88, 91, 94, 96, 100, 103, 106, 109, 113, 116, 119, 121, 124, 128, 131, 133, 137, 140, 142, 145, 149, 152, 155, 157, 161, 165, 167, 169, 173, 176, 179, 183, 185];

          var iqq = iq[indexIq] || 'iq tidak terdeteksi';

          var hasilIq;
          if (iqq <= 78) {
              hasilIq = 'Sangat Rendah';
          } else if (iqq <= 88) {
              hasilIq = 'Rendah';
          } else if (iqq <= 109) {
              hasilIq = 'Rata-Rata';
          } else if (iqq <= 119) {
              hasilIq = 'Tinggi';
          } else if (iqq <= 185) {
              hasilIq = 'Sangat Tinggi';
          } else {
              hasilIq = 'tidak terdeteksi';
          }
               
      
      var data = localStorage.getItem('key');

          if (data) {
            var parsedData = JSON.parse(data);
            if (parsedData && parsedData.nik) {
                var nik = parsedData.nik;
            } else {
                console.error("Properti 'nik' tidak ditemukan dalam struktur data.");
            }
        } else {
            console.error("Data tidak ditemukan di localStorage.");
        }
      // Parse the JSON string into an object
      // var parsedData = JSON.parse(data);
      // var nik = parsedData.data.nik;
      // var nama = parsedData.data.nama;
      // var unit_id = parsedData.data.unit_id;
      // var usia = parsedData.data.usia;
      // var nomor_telp = parsedData.data.nomor_telp;
      // var email = parsedData.data.email;
      var sub1 = localStorage.getItem('sub1');
      var sub2 = localStorage.getItem('sub2');
      var sub3 = localStorage.getItem('sub3');
      var sub4 = localStorage.getItem('sub4');
      var scores1 = localStorage.getItem('scores1');
      var scores2 = localStorage.getItem('scores2');
      var scores3 = localStorage.getItem('scores3');
      var scores4 = localStorage.getItem('scores4');
      var dataToo = {
          scores1 : scores1,
          scores2 : scores2,
          scores3 : scores3,
          scores4 : scores4
      };
      var dataToSend = {
        iqq: iqq,
        hasilIq: hasilIq
      };
       
      
      $.ajax({
        type: "POST",
        url: "api/api_cfit_kirim.php",
        data: {
          nik: nik,
          sub1: sub1,
          sub2: sub2,
          sub3: sub3,
          sub4: sub4,
          scores1 : scores1,
          scores2 : scores2,
          scores3 : scores3,
          scores4 : scores4,
          iqq: iqq,
          hasilIq: hasilIq
          
        },
        success: function (response) {
          Swal.fire({
            title: 'Success!',
            text: 'Your data has been successfully sent',
            icon: 'success',
            confirmButtonText: 'OK'
          }).then((result) => {
            if (result.isConfirmed || result.isDismissed) {
              // Redirect to index.php
              // window.location.href = 'index.php';
            }
          });
        },
        error: function (response) {
        Swal.fire({
          title: 'Error!',
          text: 'Failed to send data to the server. Please try again.',
          icon: 'error',
          confirmButtonText: 'OK'
        });
      }
      });
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>
</html>