<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <script defer>
    sub2 = localStorage.getItem('sub2');
    if (!sub2) {
      // Redirect to index.php
      window.location.href = 'index.php';
    }
  </script>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CFIT Sub 3</title>
  <meta name="description" content="Tes cfit">
    <meta name="author" content="Clarymond Simbolon" />
    <link rel="shortcut icon" type="image/png" href="logo2.svg" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <style>
    .container .container {
      display: flex;
      flex-wrap: nowrap;
      flex-direction: row;
      gap: 10px;
    }

    img {
      width: 50px;
      height: 50px;

    }

    #pm {
      width: 100px;
      height: 100px;
    }

    p {
      margin-left: 25px;
    }

    #il {
      margin-top: 80px;
      font-size: 20px;
    }

    #hb {
      margin-top: 40px;
    }

    #op {
      margin-top: 50px;
    }

    #a {
      margin-left: 15px;
    }

    .timer {
      position: fixed;
      top:0;
      right:20px;
    }



    @media screen and (max-width: 480px) {
      .card {
        overflow: hidden;
      }

      .container {
        flex-wrap: wrap;

      }

      button {
        margin-left: 10px;
      }
    }
  </style>
</head>

<body>
  <div class=" mb-2 text-dark">
    <section class="d-flex justify-content-center">
      <div class="card-body border-top">
        <div class="timer ">
          <h2 id="countdown"></h2>
        </div>
        <h5 class="card-title text-center p-3">CFIT Test Sub 3</h5>
        <form action="instruksi4.php" id="form3" method="post" enctype="multipart/form-data">
          <div class="container mb-3">
            <p id="il">1</p>
            <div class="container" id="hb">
              <div><img id="pm" src="asset/1.jpg" alt="" /></div>
            </div>
            <div class="container" id="op">
              <div>
                <p>a</p>
                <img src="asset/1A-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="A" name="nomor1">
              </div>
              <div>
                <p>b</p>
                <img src="asset/1B-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="B" name="nomor1">
              </div>
              <div>
                <p>c</p>
                <img src="asset/1C-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="C" name="nomor1">
              </div>
              <div>
                <p>d</p>
                <img src="asset/1D-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="D" name="nomor1">
              </div>
              <div>
                <p>e</p>
                <img src="asset/1E-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="E" name="nomor1">
              </div>
              <div>
                <p>f</p>
                <img src="asset/1F.jpg" alt="" /> <br>
                <input id="a" type="radio" value="F" name="nomor1">
              </div>
            </div>
          </div>
          <div class="container mb-3">
            <p id="il">2</p>
            <div class="container" id="hb">
              <div><img id="pm" src="asset/2.jpg" alt="" /></div>
            </div>
            <div class="container" id="op">
              <div>
                <p>a</p>
                <img src="asset/2A-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="A" name="nomor2">
              </div>
              <div>
                <p>b</p>
                <img src="asset/2B-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="B" name="nomor2">
              </div>
              <div>
                <p>c</p>
                <img src="asset/2C-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="C" name="nomor2">
              </div>
              <div>
                <p>d</p>
                <img src="asset/2D-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="D" name="nomor2">
              </div>
              <div>
                <p>e</p>
                <img src="asset/2E-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="E" name="nomor2">
              </div>
              <div>
                <p>f</p>
                <img src="asset/2F.jpg" alt="" /> <br>
                <input id="a" type="radio" value="F" name="nomor2">
              </div>
            </div>
          </div>
          <div class="container mb-3">
            <p id="il">3</p>
            <div class="container" id="hb">
              <div><img id="pm" src="asset/3.jpg" alt="" /></div>
            </div>
            <div class="container" id="op">
              <div>
                <p>a</p>
                <img src="asset/3A-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="A" name="nomor3">
              </div>
              <div>
                <p>b</p>
                <img src="asset/3B-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="B" name="nomor3">
              </div>
              <div>
                <p>c</p>
                <img src="asset/3C-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="C" name="nomor3">
              </div>
              <div>
                <p>d</p>
                <img src="asset/3D-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="D" name="nomor3">
              </div>
              <div>
                <p>e</p>
                <img src="asset/3E-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="E" name="nomor3">
              </div>
              <div>
                <p>f</p>
                <img src="asset/3F.jpg" alt="" /> <br>
                <input id="a" type="radio" value="F" name="nomor3">
              </div>
            </div>
          </div>
          <div class="container mb-3">
            <p id="il">4</p>
            <div class="container" id="hb">
              <div><img id="pm" src="asset/4-1.jpg" alt="" /></div>
            </div>
            <div class="container" id="op">
              <div>
                <p>a</p>
                <img src="asset/4A-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="A" name="nomor4">
              </div>
              <div>
                <p>b</p>
                <img src="asset/4B-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="B" name="nomor4">
              </div>
              <div>
                <p>c</p>
                <img src="asset/4C-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="C" name="nomor4">
              </div>
              <div>
                <p>d</p>
                <img src="asset/4D-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="D" name="nomor4">
              </div>
              <div>
                <p>e</p>
                <img src="asset/4E-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="E" name="nomor4">
              </div>
              <div>
                <p>f</p>
                <img src="asset/4F-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="F" name="nomor4">
              </div>
            </div>
          </div>
          <div class="container mb-3">
            <p id="il">5</p>
            <div class="container" id="hb">
              <div><img id="pm" src="asset/5-2.jpg" alt="" /></div>
            </div>
            <div class="container" id="op">
              <div>
                <p>a</p>
                <img src="asset/5A-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="A" name="nomor5">
              </div>
              <div>
                <p>b</p>
                <img src="asset/5B-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="B" name="nomor5">
              </div>
              <div>
                <p>c</p>
                <img src="asset/5C-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="C" name="nomor5">
              </div>
              <div>
                <p>d</p>
                <img src="asset/5D-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="D" name="nomor5">
              </div>
              <div>
                <p>e</p>
                <img src="asset/5E-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="E" name="nomor5">
              </div>
              <div>
                <p>f</p>
                <img src="asset/5F-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="F" name="nomor5">
              </div>
            </div>
          </div>
          <div class="container mb-3">
            <p id="il">6</p>
            <div class="container" id="hb">
              <div><img id="pm" src="asset/6-1.jpg" alt="" /></div>
            </div>
            <div class="container" id="op">
              <div>
                <p>a</p>
                <img src="asset/6A-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="A" name="nomor6">
              </div>
              <div>
                <p>b</p>
                <img src="asset/6B-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="B" name="nomor6">
              </div>
              <div>
                <p>c</p>
                <img src="asset/6C-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="C" name="nomor6">
              </div>
              <div>
                <p>d</p>
                <img src="asset/6D-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="D" name="nomor6">
              </div>
              <div>
                <p>e</p>
                <img src="asset/6E-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="E" name="nomor6">
              </div>
              <div>
                <p>f</p>
                <img src="asset/6F-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="F" name="nomor6">
              </div>
            </div>
          </div>
          <div class="container mb-3">
            <p id="il">7</p>
            <div class="container" id="hb">
              <div><img id="pm" src="asset/7-1.jpg" alt="" /></div>
            </div>
            <div class="container" id="op">
              <div>
                <p>a</p>
                <img src="asset/7A-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="A" name="nomor7">
              </div>
              <div>
                <p>b</p>
                <img src="asset/7B-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="B" name="nomor7">
              </div>
              <div>
                <p>c</p>
                <img src="asset/7C-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="C" name="nomor7">
              </div>
              <div>
                <p>d</p>
                <img src="asset/7D-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="D" name="nomor7">
              </div>
              <div>
                <p>e</p>
                <img src="asset/7E-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="E" name="nomor7">
              </div>
              <div>
                <p>f</p>
                <img src="asset/7F-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="F" name="nomor7">
              </div>
            </div>
          </div>
          <div class="container mb-3">
            <p id="il">8</p>
            <div class="container" id="hb">
              <div><img id="pm" src="asset/8-1.jpg" alt="" /></div>
            </div>
            <div class="container" id="op">
              <div>
                <p>a</p>
                <img src="asset/8A-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="A" name="nomor8">
              </div>
              <div>
                <p>b</p>
                <img src="asset/8B-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="B" name="nomor8">
              </div>
              <div>
                <p>c</p>
                <img src="asset/8C-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="C" name="nomor8">
              </div>
              <div>
                <p>d</p>
                <img src="asset/8D-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="D" name="nomor8">
              </div>
              <div>
                <p>e</p>
                <img src="asset/8E-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="E" name="nomor8">
              </div>
              <div>
                <p>f</p>
                <img src="asset/8F-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="F" name="nomor8">
              </div>
            </div>
          </div>
          <div class="container mb-3">
            <p id="il">9</p>
            <div class="container" id="hb">
              <div><img id="pm" src="asset/9-1.jpg" alt="" /></div>
            </div>
            <div class="container" id="op">
              <div>
                <p>a</p>
                <img src="asset/9A-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="A" name="nomor9">
              </div>
              <div>
                <p>b</p>
                <img src="asset/9B-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="B" name="nomor9">
              </div>
              <div>
                <p>c</p>
                <img src="asset/9C-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="C" name="nomor9">
              </div>
              <div>
                <p>d</p>
                <img src="asset/9D-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="D" name="nomor9">
              </div>
              <div>
                <p>e</p>
                <img src="asset/9E-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="E" name="nomor9">
              </div>
              <div>
                <p>f</p>
                <img src="asset/9F-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="F" name="nomor9">
              </div>
            </div>
          </div>
          <div class="container mb-3">
            <p id="il">10</p>
            <div class="container" id="hb">
              <div><img id="pm" src="asset/10-1.jpg" alt="" /></div>
            </div>
            <div class="container" id="op">
              <div>
                <p>a</p>
                <img src="asset/10A-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="A" name="nomor10">
              </div>
              <div>
                <p>b</p>
                <img src="asset/10B-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="B" name="nomor10">
              </div>
              <div>
                <p>c</p>
                <img src="asset/10C-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="C" name="nomor10">

              </div>
              <div>
                <p>d</p>
                <img src="asset/10D-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="D" name="nomor10">

              </div>
              <div>
                <p>e</p>
                <img src="asset/10E-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="E" name="nomor10">

              </div>
              <div>
                <p>f</p>
                <img src="asset/10F-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="F" name="nomor10">

              </div>
            </div>
          </div>
          <div class="container">
            <p id="il">11</p>
            <div class="container" id="hb">
              <div><img id="pm" src="asset/11-1.jpg" alt="" /></div>
            </div>
            <div class="container" id="op">
              <div>
                <p>a</p>
                <img src="asset/11A-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="A" name="nomor11">

              </div>
              <div>
                <p>b</p>
                <img src="asset/11B-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="B" name="nomor11">

              </div>
              <div>
                <p>c</p>
                <img src="asset/11C-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="C" name="nomor11">

              </div>
              <div>
                <p>d</p>
                <img src="asset/11D-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="D" name="nomor11">

              </div>
              <div>
                <p>e</p>
                <img src="asset/11E-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="E" name="nomor11">

              </div>
              <div>
                <p>f</p>
                <img src="asset/11F-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="F" name="nomor11">

              </div>
            </div>
          </div>

          <div class="container mb-3">
            <p id="il">12</p>
            <div class="container" id="hb">
              <div><img id="pm" src="asset/12-1.jpg" alt="" /></div>
            </div>
            <div class="container" id="op">
              <div>
                <p>a</p>
                <img src="asset/12A-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="A" name="nomor12">

              </div>
              <div>
                <p>b</p>
                <img src="asset/12B-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="B" name="nomor12">

              </div>
              <div>
                <p>c</p>
                <img src="asset/12C-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="C" name="nomor12">

              </div>
              <div>
                <p>d</p>
                <img src="asset/12D-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="D" name="nomor12">

              </div>
              <div>
                <p>e</p>
                <img src="asset/12E-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="E" name="nomor12">

              </div>
              <div>
                <p>f</p>
                <img src="asset/12F-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="F" name="nomor12">

              </div>
            </div>
          </div>
          <div class="container mb-3">
            <p id="il">13</p>
            <div class="container" id="hb" style="margin-top: 40px">
              <div><img id="pm" src="asset/13-1.jpg" alt="" /></div>
            </div>
            <div class="container" id="op" style="margin-top: 50px">
              <div>
                <p>a</p>
                <img src="asset/13A-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="A" name="nomor13">

              </div>
              <div>
                <p>b</p>
                <img src="asset/13B-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="B" name="nomor13">

              </div>
              <div>
                <p>c</p>
                <img src="asset/13C-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="C" name="nomor13">

              </div>
              <div>
                <p>d</p>
                <img src="asset/13D-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="D" name="nomor13">

              </div>
              <div>
                <p>e</p>
                <img src="asset/13E-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="E" name="nomor13">

              </div>
              <div>
                <p>f</p>
                <img src="asset/13F-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="F" name="nomor13">

              </div>
            </div>
          </div>

          <button name="btnSubmit" type="submit" onclick="myF()" class="btn btn-warning text-white "
            style="width: 100%">
            Submit
          </button>
        </form>
      </div>
    </section>
  </div>

  <script>
   // Add the correct answers for each question
  const correctAnswers = ["E", "E", "E", "B", "C", "D", "E", "E", "A", "A", "F", "C", "C"];

// Retrieve the answers array and scores from local storage or initialize them
const answers = JSON.parse(localStorage.getItem('sub3')) || Array(13).fill('');
const scores = JSON.parse(localStorage.getItem('scores3')) || Array(13).fill(0);

function myF() {
  for (let i = 1; i <= 13; i++) {
    // Select the checked radio button for the current question
    const selectedValue = document.querySelector(`input[name="nomor${i}"]:checked`);
    answers[i - 1] = selectedValue ? selectedValue.value : 'null';

    // Check if the selected answer is correct and update the scores array
    scores[i - 1] = selectedValue && selectedValue.value === correctAnswers[i - 1] ? 1 : 0;
  }

  // Store the updated arrays in local storage
  localStorage.setItem('sub3', JSON.stringify(answers));
  localStorage.setItem('scores3', JSON.stringify(scores));

  // Redirect to instruksi4.php
  document.location.href = 'instruksi4.php';
}
    

    const countdownElement = document.getElementById('countdown');

    function countdownTimer(duration, displayElement) {
      let timer = duration;

      setInterval(function () {
        const minutes = parseInt(timer / 60, 10);
        const seconds = parseInt(timer % 60, 10);

        const formattedMinutes = minutes < 10 ? '0' + minutes : minutes;
        const formattedSeconds = seconds < 10 ? '0' + seconds : seconds;

        displayElement.textContent = formattedMinutes + ':' + formattedSeconds;

        if (--timer === -1) {
        alert('Waktu habis');
        myF(); 
        }
      }, 1000);
    }

    const countdownDuration = 180;
    countdownTimer(countdownDuration, countdownElement);

  </script>

  <script src="js3.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>