<?php
session_start();

// Inisialisasi variabel pesan

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Instruksi sesi 1</title>
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
      width: 200px;

    }

    p {
      margin-left: 25px;
    }

    #v {
      margin-top: 30px;
    }

    .b {
      position: relative;
    }

    .g {
      margin-left: 30px;
    }

    input{
      margin-left: 20px;
    }
  </style>
</head>

<body>
  <form action="indexx.php" method="post" >
    <div class="container">
      <div class="card p-4 m-3">
        <h2>Berikut adalah petunjuk mengenai CFIT Test sub pertama</h2>
        <p>Instruksi sesi 1
          Di sebelah atas, anda akan menemukan sederet kotak yang berisi urutan gambar. Namun, kotak terakhir
          belum
          ada isinya. Tugas anda adalah mengisi kotak tersebut dengan gambar yang sesuai,yang bisa dipilih dari
          enam pilihan jawaban yang tersedia, yaitu A, B, C, D, E dan F. Perlu diingat bahwa gambar-gambar pada
          soal memiliki pola tertentu sehingga untuk mengisinya,anda perlu mengetahui pola dari urutan gambar
          tersebut.

        </p>

        <h3>Contoh</h3>
        <ol type="1">
          <div>
        <div>
         
          <li>
            <div class="container">
              <div><img id="pm" src="asset/CONTOH 1.png" alt="" /></div>
            </div>
            <div class="container mb-3" id = "radioForm">
              <div>
                <p>a</p>
                <img src="asset/CONTOH 1 A.png" alt="" /> <br>
                <input type="radio" value="A" name="radioGroups">
              </div>
              <div>
                <p>b</p>
                <img src="asset/CONTOH 1B.png" alt="" /> <br>
                <input type="radio" value="B" name="radioGroups">
              </div>
              <div>
                <p>c</p>
                <img src="asset/CONTOH 1C.png" alt="" /> <br>
                <input type="radio" value="C" name="radioGroups">
              </div>
              <div>
                <p>d</p>
                <img src="asset/CONTOH 1D.png" alt="" /> <br>
                <input type="radio" value="D" name="radioGroups">
              </div>
              <div>
                <p>e</p>
                <img src="asset/CONTOH 1E.png" alt="" /> <br>
                <input type="radio" value="E" name="radioGroups">
              </div>
              <div>
                <p>f</p>
                <img src="asset/CONTOH 1F.png" alt="" /> <br> 
                <input type="radio" value="F" name="radioGroups">
              </div>
            </div>
          
        </div>
        <p id="result" ></p>
</li>
        <div class="">
          <li>
          <div style="margin-top:20px ;">
            <img id="pm" src="asset/CONTOH 2.png" alt="" />
          </div>
        </div>
        <div class="container mb-3" id="radioFormm" >
          <div>
            <p>a</p>
            <img src="asset/CONTOH 2A.png" alt="" /> <br>
            <input type="radio" value="F" name="radioGroup">
          </div>
          <div>
            <p>b</p>
            <img src="asset/CONTOH 2B.png" alt="" /> <br>
            <input type="radio" value="F" name="radioGroup">
          </div>
          <div>
            <p>c</p>
            <img src="asset/CONTOH 2C.png" alt="" /> <br>
            <input type="radio" value="F" name="radioGroup">
          </div>
          <div>
            <p>d</p>
            <img src="asset/CONTOH 2D.png" alt="" /> <br>
            <input type="radio" value="F" name="radioGroup">
          </div>
          <div>
            <p>e</p>
            <img src="asset/CONTOH 2E.png" alt="" /> <br>
            <input type="radio" value="F" name="radioGroup">
          </div>
          <div>
            <p>f</p>
            <img src="asset/CONTOH 2F.png" alt="" /> <br>
            <input type="radio" value="F" name="radioGroup">
          </div>
        </div>
        <p id = "resullt"></p>
</li>

        <div class=" ">
          <li>
           <div style="margin-top:20px ;">
            <img id="pm" src="asset/CONTOH 3.png" alt="" />
          </div>
        </div>
        <div class="container mb-3" id="radioForrmm">
          <div>
            <p>a</p>
            <img src="asset/CONTOH 3A.png" alt="" /> <br>
            <input type="radio" value="F" name="radioGroupp">
          </div>
          <div>
            <p>b</p>
            <img src="asset/CONTOH 3B.png" alt="" /> <br>
            <input type="radio" value="F" name="radioGroupp">
          </div>
          <div>
            <p>c</p>
            <img src="asset/CONTOH 3C.png" alt="" /> <br>
            <input type="radio" value="F" name="radioGroupp">
          </div>
          <div>
            <p>d</p>
            <img src="asset/CONTOH 3D.png" alt="" /> <br>
            <input type="radio" value="F" name="radioGroupp">
          </div>
          <div>
            <p>e</p>
            <img src="asset/CONTOH 3E.png" alt="" /> <br>
            <input type="radio" value="F" name="radioGroupp">
          </div>
          <div>
            <p>f</p>
            <img src="asset/CONTOH 3F.png" alt="" /> <br>
            <input type="radio" value="F" name="radioGroupp">
          </div>
        </div> <p id="resulltt"></p></li> <button type="submit" class="btn btn-warning text-light" style="width: 100%">mulai</button>
       </div> 
       </ol>    
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
      resultParagraph.innerHTML = "Ya, benar. <br> Kotak yang terletak dibawah huruf C yang tepat untuk gambar ranting yang rendah selanjutnya.";
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
    if (radioButtonss[4].checked) {
      // Print "correct button" to the result paragraph
      resulltParagraph.innerHTML = "Ya, benar. <br> Kotak yang terletak dibawah huruf E yang tepat untuk gambar selanjutnya.";
      resulltParagraph.style.color = "green";
    } else {
      // Clear the result paragraph if the second radio button is not checked
      resulltParagraph.innerHTML = "Jawaban yang anda pilih SALAH. <br> Jawaban yang benar adalah E. Jadi, pilihlah Jawaban E pada pilihan jawaban yang tersedia.  ";
      resulltParagraph.style.color = "red";
    }
  });
  var radioButtonnss = document.getElementsByName('radioGroupp');
  var resullttParagraph = document.getElementById('resulltt');

  // Add an event listener to the form
  document.getElementById('radioForrmm').addEventListener('change', function() {
    // Check if the second radio button is checked
    if (radioButtonnss[4].checked) {
      // Print "correct button" to the result paragraph
      resullttParagraph.innerHTML = "Ya, benar <br> Kotak yang terletak dibawah huruf E yang tepat untuk gambar selanjutnya.";
      resullttParagraph.style.color = "green";
    } else {
      // Clear the result paragraph if the second radio button is not checked
      resullttParagraph.innerHTML = "Jawaban yang anda pilih SALAH. <br> Jawaban yang benar adalah E. Jadi, pilihlah Jawaban E pada pilihan jawaban yang tersedia.  ";
      resullttParagraph.style.color = "red";
    }
  });
</script>

  </script>
</body>
</html>