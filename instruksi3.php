<?php
session_start();

error_reporting(0);
ini_set('display_errors', 0);

// $nama = $_SESSION['nama'];
// $jabatan = $_SESSION['jabatan'];
// $pendidikan = $_SESSION['pendidikann'];
// $tgl = $_SESSION['tanggal_testa'];
// $tgl_lahir = $_SESSION['tanggal_lahir'];
// $usia = $_SESSION['usia'];


?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Instruksi sesi 3</title>
  <meta name="description" content="Tes cfit">
    <meta name="author" content="Clarymond Simbolon" />
    <link rel="shortcut icon" type="image/png" href="logo2.svg" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <style>
    
    .container {
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
    }

    img {
      width: 50px;
      height: 50px;
      justify-content: space-beetween;
    }

    #pm {
      width: 100px;
      height: 100px;
    }

    p {
      margin-left: 25px;
    }

    #v {
      margin-right: 20px;
    }

    input{
      margin-left: 20px;
    }
  </style>
</head>

<body>
  <form action="index3.php" method="post">
    

    <div class="container">
      <div class="card p-4 m-3">

        <h2>Berikut adalah petunjuk mengenai CFIT Test sub ketiga</h2>
        

        <p>Instruksi sesi 3
          Di bagian sebelah kiri, anda akan menemukan sebuah kotak besar, yang didalamnya terdapat kotak-kotak
          kecil bergambar. Anggaplah ini adalah gambar sebuah sapu tangan, di mana kotak-kotak tersebut memiliki
          pola tertentu. Perhatikan bahwa bagian sebelah kanan bawah masih kosong.Tugas anda adalah melengkapi
          bagian kosong tersebut dengan salah satu dari 5 pilihan jawaban disebelah kanan.


        </p>


        <h3>Contoh</h3>

        <div class="container mb-3" style="margin-top: 40px;">
          <p id="v">1</p>
          <div><img id="pm" src="asset/SOAL SUB 3.png" alt="" /></div>

          <div id="radioForm" class="container" style="margin-left: 10px;">
            <div>
              <p>a</p>
              <img src="asset/SUB 31A.png" alt="" /> <br>
              <input type="radio" value="A" name="radioGroups">
            </div>
            <div>
              <p>b</p>
              <img src="asset/SUB 31B.png" alt="" /> <br>
              <input type="radio" value="B" name="radioGroups">
            </div>
            <div>
              <p>c</p>
              <img src="asset/SUB 31C.png" alt="" /> <br>
              <input type="radio" value="C" name="radioGroups">
            </div>
            <div>
              <p>d</p>
              <img src="asset/SUB 31D.png" alt="" /> <br>
              <input type="radio" value="D" name="radioGroups">
            </div>
            <div>
              <p>e</p>
              <img src="asset/SUB 31E.png" alt="" /> <br>
              <input type="radio" value="E" name="radioGroups">
            </div>
            <div>
              <p>f</p>
              <img src="asset/SUB 31F.png" alt="" /> <br>
              <input type="radio" value="F" name="radioGroups">
            </div>
          </div>
          <p id="result"></p>
        </div>

        <div class="container" style="margin-top:40px ;">
          <p id="v">2</p>
          <div><img id="pm" src="asset/SUB 32.png" alt="" /></div>

          <div id="radioFormm" class="container" style="margin-left: 10px;">
            <div>
              <p>a</p>
              <img src="asset/SUB 32A.png" alt="" /> <br>
              <input type="radio" value="A" name="radioGroup">
            </div>
            <div>
              <p>b</p>
              <img src="asset/SUB 32B.png" alt="" /> <br>
              <input type="radio" value="B" name="radioGroup">
            </div>
            <div>
              <p>c</p>
              <img src="asset/SUB 32C.png" alt="" /> <br>
              <input type="radio" value="C" name="radioGroup">
            </div>
            <div>
              <p>d</p>
              <img src="asset/SUB 32D.png" alt="" /> <br>
              <input type="radio" value="D" name="radioGroup">
            </div>
            <div>
              <p>e</p>
              <img src="asset/SUB 32E.png" alt="" /> <br>
              <input type="radio" value="E" name="radioGroup">
            </div>
            <div>
              <p>f</p>
              <img src="asset/SUB 32F.png" alt="" /> <br>
              <input type="radio" value="F" name="radioGroup">
            </div>
          </div>
          <p id="resullt"></p>
        </div>

        <div class="container mb-3 " style="margin-top:40px ;">
          <p id="v">3</p>
          <div><img id="pm" src="asset/SUB 33.png" alt="" /></div>

          <div id="radioForrmm" class="container " style="margin-left: 10px;">
            <div>
              <p>a</p>
              <img src="asset/SUB 33A.png" alt="" /> <br>
              <input type="radio" value="A" name="radioGroupp">
            </div>
            <div>
              <p>b</p>
              <img src="asset/SUB 33B.png" alt="" /> <br>
              <input type="radio" value="B" name="radioGroupp">
            </div>
            <div>
              <p>c</p>
              <img src="asset/SUB 33C.png" alt="" /> <br>
              <input type="radio" value="C" name="radioGroupp">
            </div>
            <div>
              <p>d</p>
              <img src="asset/SUB 33D.png" alt="" /> <br>
              <input type="radio" value="D" name="radioGroupp">
            </div>
            <div>
              <p>e</p>
              <img src="asset/SUB 33E.png" alt="" /> <br>
              <input type="radio" value="E" name="radioGroupp">
            </div>
            <div>
              <p>f</p>
              <img src="asset/SUB 33F.png" alt="" /> <br>
              <input type="radio" value="F" name="radioGroupp">
            </div>
          </div>
          <p id="resulltt"></p>
        </div>

        <button type="submit" class="btn btn-warning text-light">mulai</button>
      </div>


    </div>
    </div>
  </form>
  <script>
  // Get all radio buttons by their name
  var radioButtons = document.getElementsByName('radioGroups');
  var resultParagraph = document.getElementById('result');

  // Add an event listener to the form
  document.getElementById('radioForm').addEventListener('change', function() {
    // Check if the second radio button is checked
    if (radioButtons[1].checked) {
      // Print "correct button" to the result paragraph
      resultParagraph.innerHTML = "Ya, benar. <br> kotak kecil yang kedualah yang tepat untuk mengisi kotak kecil yang hilang itu";
      resultParagraph.style.color = "green";
    } else {
      // Clear the result paragraph if the second radio button is not checked
      resultParagraph.innerHTML = "Jawaban yang anda pilih SALAH. <br> Jawaban yang benar adalah B. Jadi, pilihlah Jawaban B pada pilihan jawaban yang tersedia.  ";
      resultParagraph.style.color = "red";
    }
  });
  var radioButtonss = document.getElementsByName('radioGroup');
  var resulltParagraph = document.getElementById('resullt');

  // Add an event listener to the form
  document.getElementById('radioFormm').addEventListener('change', function() {
    // Check if the second radio button is checked
    if (radioButtonss[2].checked) {
      // Print "correct button" to the result paragraph
      resulltParagraph.innerHTML = "Ya, benar. <br> Kotak yang terletak dibawah huruf C yang tepat untuk mengisi kotak kecil yang hilang itu, karena yang hilang itu adalah ayam berbintik yang menghadap ke ke kanan.";
      resulltParagraph.style.color = "green";
    } else {
      // Clear the result paragraph if the second radio button is not checked
      resulltParagraph.innerHTML = "Jawaban yang anda pilih SALAH. <br> Jawaban yang benar adalah C. Jadi, pilihlah Jawaban C pada pilihan jawaban yang tersedia.  ";
      resulltParagraph.style.color = "red";
    }
  });
  var radioButtonnss = document.getElementsByName('radioGroupp');
  var resullttParagraph = document.getElementById('resulltt');

  // Add an event listener to the form
  document.getElementById('radioForrmm').addEventListener('change', function() {
    // Check if the second radio button is checked
    if (radioButtonnss[5].checked) {
      // Print "correct button" to the result paragraph
      resullttParagraph.innerHTML = "Ya, benar. <br> Satu lingkaran putih, yaitu kotak kecil yang terletak di huruf F.";
      resullttParagraph.style.color = "green";
    } else {
      // Clear the result paragraph if the second radio button is not checked
      resullttParagraph.innerHTML = "Jawaban yang anda pilih SALAH. <br> Jawaban yang benar adalah F. Jadi, pilihlah Jawaban F pada pilihan jawaban yang tersedia.  ";
      resullttParagraph.style.color = "red";
    }
  });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>