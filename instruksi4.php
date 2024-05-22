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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Instruksi sesi 4</title>
  <meta name="description" content="Tes cfit">
    <meta name="author" content="Clarymond Simbolon" />
    <link rel="shortcut icon" type="image/png" href="logo2.svg" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

  <style>
    .container {
      display: flex;
      flex-wrap: wrap;
      flex-direction: row;
    }

    img {
      width: 50px;
      height: 50px;
      justify-content: space-beetween;
    }

    p {
      margin-left: 25px;
    }

    input{
      margin-left: 20px;
    }
  </style>
</head>

<body>
  <form action="index4.php" method="post">
    
    <div class="container">
      <div class="card p-4 m-3">
        <h2>Berikut adalah petunjuk mengenai CFIT Test sub keempat</h2>
        

        <p>
          Instruksi sesi 4 Pilihlah satu dari kelima jawaban yang mencerminkan
          kondisi yang sama dengan gambar contoh di sebelah kiri.
        </p>

        <h3>Contoh</h3>
        <div class="container" style="margin-bottom: 10px;">
          <div style="margin-top: 50px;">
            <p id="v">1</p>
          </div>
          <div style="margin-top: 40px;">
            <div style="margin-left: 40px;">
              <img id="pm" src="asset/SUB 4.png" alt="" />
            </div>
          </div>

          <div id="radioForm" class="container" style="margin-left: 50px;">
            <div>
              <p>a</p>
              <img src="asset/SUB 41A.png" alt="" /> <br>
              <input type="radio" value="A" name="radioGroups">
            </div>
            <div>
              <p>b</p>
              <img src="asset/SUB 41B.png" alt="" /> <br>
              <input type="radio" value="B" name="radioGroups">
            </div>
            <div>
              <p>c</p>
              <img src="asset/SUB 41C.png" alt="" /> <br>
              <input type="radio" value="C" name="radioGroups">
            </div>
            <div>
              <p>d</p>
              <img src="asset/SUB 41D.png" alt="" /> <br>
              <input type="radio" value="D" name="radioGroups">
            </div>
            <div>
              <p>e</p>
              <img src="asset/SUB 41E.png" alt="" /> <br>
              <input type="radio" value="E" name="radioGroups">
            </div>
          </div>
          <p id="result" style="margin-left: 60px;"></p>
        </div>

        <div class="container" style="margin-bottom: 10px;">
          <div style="margin-top: 20px;">
            <p id="v">2</p>
          </div>
          <div style="margin-top: 10px;">
            <div style="margin-left: 40px;">
              <img id="pm" src="asset/SUB 42.png" alt="" />
            </div>
          </div>

          <div id = "radioFormm" class="container" style="margin-left: 50px;">
            <div>
              <p>a</p>
              <img src="asset/SUB 42A.png" alt="" /> <br>
              <input type="radio" value="A" name="radioGroup">
            </div>
            <div>
              <p>b</p>
              <img src="asset/SUB 42B.png" alt="" /> <br>
              <input type="radio" value="B" name="radioGroup">
            </div>
            <div>
              <p>c</p>
              <img src="asset/SUB 42C.png" alt="" /> <br>
              <input type="radio" value="C" name="radioGroup">
            </div>
            <div>
              <p>d</p>
              <img src="asset/SUB 42D.png" alt="" /> <br>
              <input type="radio" value="D" name="radioGroup">
            </div>
            <div>
              <p>e</p>
              <img src="asset/SUB 42E.png" alt="" /> <br>
              <input type="radio" value="E" name="radioGroup">
            </div>
          </div>
          <p id="resullt" style="margin-left: 60px;"></p>
        </div>


        <div class="container mb-3">
          <div style="margin-top: 20px;">
            <p id="v">3</p>
          </div>
          <div style="margin-top: 10px;">
            <div style="margin-left: 40px;">

              <img id="pm" src="asset/SUB 43.png" alt="" />
            </div>
          </div>

          <div id="radioForrmm" class="container" style="margin-left: 50px;">
            <div>
              <p>a</p>
              <img src="asset/SUB 43A.png" alt="" /> <br>
              <input type="radio" value="A" name="radioGroupp">
            </div>
            <div>
              <p>b</p>
              <img src="asset/SUB 43B.png" alt="" /> <br>
              <input type="radio" value="B" name="radioGroupp">
            </div>
            <div>
              <p>c</p>
              <img src="asset/SUB 43C.png" alt="" /> <br>
              <input type="radio" value="C" name="radioGroupp">
            </div>
            <div>
              <p>d</p>
              <img src="asset/SUB 43D.png" alt="" /> <br>
              <input type="radio" value="D" name="radioGroupp">
            </div>
            <div>
              <p>e</p>
              <img src="asset/SUB 43E.png" alt="" /> <br>
              <input type="radio" value="E" name="radioGroupp">
            </div>
            
          </div>
          <p id="resulltt" style="margin-left: 60px;"></p>
        </div>
        <button type="submit" class="btn btn-warning text-light">
          mulai
        </button>
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
    if (radioButtons[2].checked) {
      // Print "correct button" to the result paragraph
      resultParagraph.innerHTML = "Ya, benar. <br> Jawabannya adalah gambar yang terletak di bawah huruf C";
      resultParagraph.style.color = "green";
    } else {
      // Clear the result paragraph if the second radio button is not checked
      resultParagraph.innerHTML = "Jawaban yang anda pilih SALAH. <br> Jawaban yang benar adalah C. Jadi, pilihlah Jawaban C pada pilihan jawaban yang tersedia.  ";
      resultParagraph.style.color = "red";
    }
  });
  var radioButtonss = document.getElementsByName('radioGroup');
  var resulltParagraph = document.getElementById('resullt');

  // Add an event listener to the form
  document.getElementById('radioFormm').addEventListener('change', function() {
    // Check if the second radio button is checked
    if (radioButtonss[3].checked) {
      // Print "correct button" to the result paragraph
      resulltParagraph.innerHTML = "Ya, benar. <br> Jawabannya adalah gambar yang terletak di bawah huruf D";
      resulltParagraph.style.color = "green";  
    } else {
      // Clear the result paragraph if the second radio button is not checked
      resulltParagraph.innerHTML = "Jawaban yang anda pilih SALAH. <br> Jawaban yang benar adalah D. Jadi, pilihlah Jawaban D pada pilihan jawaban yang tersedia.  ";
      resulltParagraph.style.color = "red";
    }
  });
  var radioButtonnss = document.getElementsByName('radioGroupp');
  var resullttParagraph = document.getElementById('resulltt');

  // Add an event listener to the form
  document.getElementById('radioForrmm').addEventListener('change', function() {
    // Check if the second radio button is checked
    if (radioButtonnss[1].checked) {
      // Print "correct button" to the result paragraph
      resullttParagraph.innerHTML = "Ya, benar. <br> Jawabannya adalah gambar yang terletak di bawah huruf B";
      resullttParagraph.style.color = "green";
    } else {
      // Clear the result paragraph if the second radio button is not checked
      resullttParagraph.innerHTML = "Jawaban yang anda pilih SALAH. <br> Jawaban yang benar adalah B. Jadi, pilihlah Jawaban B pada pilihan jawaban yang tersedia.  ";
      resullttParagraph.style.color = "red";
    }
  });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>