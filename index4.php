<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
 <script defer>
  sub3 = localStorage.getItem('sub3');
  if (!sub3) {
   // Redirect to index.php
   window.location.href = 'index.php';
  }
 </script>
 <meta charset="UTF-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <title>CFIT Sub 4</title>
 <meta name="description" content="Tes cfit">
    <meta name="author" content="Clarymond Simbolon" />
    <link rel="shortcut icon" type="image/png" href="logo2.svg" />
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
 <script src="sweetalert2.all.min.js"></script>
 <style>
  .container {
   display: flex;
   flex-wrap: nowrap;
   flex-direction: row;
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

  #mn {
   margin-left: 10px;
  }

  .timer {
      position: fixed;
      top:0;
      right:20px;
    }

  input[type="radio"] {
   margin-left: 1em;
  }

  /* #mn > img{
   margin: 1em;
  } */

  @media screen and (max-width: 480px) {
   .container {
    flex-wrap: wrap;
   }

  }
 </style>
</head>

<body>

 <div class="p-3 mb-2 ">
  <section class="d-flex justify-content-center">
   <div class="card-body border-top">
    <div class="timer ">
     <h2 id="countdown"></h2>
    </div>
    <h5 class="card-title text-center p-3">CFIT Test Sub 4</h5>
    <form action="ending.php" id="form4" method="post" enctype="multipart/form-data">

     <div class="container mb-3">

      <div class="container" style="margin-top: 40px">
       1
       <div id="mn"><img id="pm" src="asset/1 (2).jpg" alt="" /></div>
      </div>
      <div class="container" style="margin-top: 50px;gap: 20px;">
       <div>
        <p>a</p>
        <img src="asset/1A (2).jpg" alt="" /><br>
        <input type="radio" name="no1" id="" value="A">
       </div>
       <div>
        <p>b</p>
        <img src="asset/1B (2).jpg" alt="" />
        <br>
        <input type="radio" name="no1" id="" value="B">
       </div>
       <div>
        <p>c</p>
        <img src="asset/1C (2).jpg" alt="" />
        <br>
        <input type="radio" name="no1" id="" value="C">
       </div>
       <div>
        <p>d</p>
        <img src="asset/1D (2).jpg" alt="" />
        <br>
        <input type="radio" name="no1" id="" value="D">
       </div>
       <div>
        <p>e</p>
        <img src="asset/1E (2).jpg" alt="" />
        <br>
        <input type="radio" name="no1" id="" value="E">
       </div>
      </div>
     </div>
     <div class="container mb-3">

      <div class="container" style="margin-top: 40px">
       2 <div id="mn"><img id="pm" src="asset/2 (2).jpg" alt="" /></div>
      </div>
      <div class="container" style="margin-top: 50px;gap: 20px;">
       <div>
        <p>a</p>
        <img src="asset/2A (2).jpg" alt="" />
        <br>
        <input type="radio" name="no2" id="" value="A">
       </div>
       <div>
        <p>b</p>
        <img src="asset/2B (2).jpg" alt="" />
        <br>
        <input type="radio" name="no2" id="" value="B">
       </div>
       <div>
        <p>c</p>
        <img src="asset/2C (2).jpg" alt="" />
        <br>
        <input type="radio" name="no2" id="" value="C">
       </div>
       <div>
        <p>d</p>
        <img src="asset/2D (2).jpg" alt="" />
        <br>
        <input type="radio" name="no2" id="" value="D">
       </div>
       <div>
        <p>e</p>
        <img src="asset/2E (2).jpg" alt="" />
        <br>
        <input type="radio" name="no2" id="" value="E">
       </div>
      </div>
     </div>
     <div class="container mb-3">

      <div class="container" style="margin-top: 40px">
       3<div id="mn"><img id="pm" src="asset/3 (2).jpg" alt="" /></div>
      </div>
      <div class="container" style="margin-top: 50px;gap: 20px;">
       <div>
        <p>a</p>
        <img src="asset/3A (2).jpg" alt="" />
        <br>
        <input type="radio" name="no3" id="" value="A">
       </div>
       <div>
        <p>b</p>
        <img src="asset/3B (2).jpg" alt="" /><br>
        <input type="radio" name="no3" id="" value="B">
       </div>
       <div>
        <p>c</p>
        <img src="asset/3C (2).jpg" alt="" />
        <br>
        <input type="radio" name="no3" id="" value="C">
       </div>
       <div>
        <p>d</p>
        <img src="asset/3D (2).jpg" alt="" />
        <br>
        <input type="radio" name="no3" id="" value="D">
       </div>
       <div>
        <p>e</p>
        <img src="asset/3E (2).jpg" alt="" />
        <br>
        <input type="radio" name="no3" id="" value="E">
       </div>
      </div>

     </div>
     <div class="container mb-3">

      <div class="container" style="margin-top: 40px">
       4<div id="mn"><img id="pm" src="asset/4 (2).jpg" alt="" /></div>
      </div>
      <div class="container" style="margin-top: 50px;gap: 20px;">
       <div>
        <p>a</p>
        <img src="asset/4A (2).jpg" alt="" /><br>
        <input type="radio" name="no4" id="" value="A">
       </div>
       <div>
        <p>b</p>
        <img src="asset/4B (2).jpg" alt="" /><br>
        <input type="radio" name="no4" id="" value="B">
       </div>
       <div>
        <p>c</p>
        <img src="asset/4C (2).jpg" alt="" /><br>
        <input type="radio" name="no4" id="" value="C">
       </div>
       <div>
        <p>d</p>
        <img src="asset/4D (2).jpg" alt="" />
        <br>
        <input type="radio" name="no4" id="" value="D">
       </div>
       <div>
        <p>e</p>
        <img src="asset/4E (2).jpg" alt="" />
        <br>
        <input type="radio" name="no4" id="" value="E">
       </div>
      </div>


     </div>
     <div class="container mb-3">

      <div class="container" style="margin-top: 40px">
       5<div id="mn"><img id="pm" src="asset/5 (2).jpg" alt="" /></div>
      </div>
      <div class="container" style="margin-top: 50px;gap: 20px;">
       <div>
        <p>a</p>
        <img src="asset/5A (2).jpg" alt="" />
        <br>
        <input type="radio" name="no5" id="" value="A">
       </div>
       <div>
        <p>b</p>
        <img src="asset/5B (2).jpg" alt="" />
        <br>
        <input type="radio" name="no5" id="" value="B">
       </div>
       <div>
        <p>c</p>
        <img src="asset/5C (2).jpg" alt="" /><br>
        <input type="radio" name="no5" id="" value="C">
       </div>
       <div>
        <p>d</p>
        <img src="asset/5D (2).jpg" alt="" />
        <br>
        <input type="radio" name="no5" id="" value="D">
       </div>
       <div>
        <p>e</p>
        <img src="asset/5E (2).jpg" alt="" />
        <br>
        <input type="radio" name="no5" id="" value="E">
       </div>
      </div>
     </div>

     <div class="container mb-3">

      <div class="container" style="margin-top: 40px">
       6<div id="mn"><img id="pm" src="asset/6 (2).jpg" alt="" /></div>
      </div>
      <div class="container" style="margin-top: 50px;gap: 20px;">
       <div>
        <p>a</p>
        <img src="asset/6A (2).jpg" alt="" />
        <br>
        <input type="radio" name="no6" id="" value="A">
       </div>
       <div>
        <p>b</p>
        <img src="asset/6B (2).jpg" alt="" />
        <br>
        <input type="radio" name="no6" id="" value="B">
       </div>
       <div>
        <p>c</p>
        <img src="asset/6C (2).jpg" alt="" />
        <br>
        <input type="radio" name="no6" id="" value="C">
       </div>
       <div>
        <p>d</p>
        <img src="asset/6D (2).jpg" alt="" />
        <br>
        <input type="radio" name="no6" id="" value="D">
       </div>
       <div>
        <p>e</p>
        <img src="asset/6E (2).jpg" alt="" />
        <br>
        <input type="radio" name="no6" id="" value="E">
       </div>
      </div>


     </div>
     <div class="container mb-3">

      <div class="container" style="margin-top: 40px">
       7<div id="mn"><img id="pm" src="asset/7 (2).jpg" alt="" /></div>
      </div>
      <div class="container" style="margin-top: 50px;gap: 20px;">
       <div>
        <p>a</p>
        <img src="asset/7A (2).jpg" alt="" />
        <br>
        <input type="radio" name="no7" id="" value="A">
       </div>
       <div>
        <p>b</p>
        <img src="asset/7B (2).jpg" alt="" />
        <br>
        <input type="radio" name="no7" id="" value="B">
       </div>
       <div>
        <p>c</p>
        <img src="asset/7C (2).jpg" alt="" />
        <br>
        <input type="radio" name="no7" id="" value="C">
       </div>
       <div>
        <p>d</p>
        <img src="asset/7D (2).jpg" alt="" />
        <br>
        <input type="radio" name="no7" id="" value="D">
       </div>
       <div>
        <p>e</p>
        <img src="asset/7E (2).jpg" alt="" />
        <br>
        <input type="radio" name="no7" id="" value="E">
       </div>
      </div>
     </div>
     <div class="container mb-3">

      <div class="container" style="margin-top: 40px">
       8<div id="mn"><img id="pm" src="asset/8 (2).jpg" alt="" /></div>
      </div>
      <div class="container" style="margin-top: 50px;gap: 20px;">
       <div>
        <p>a</p>
        <img src="asset/8A (2).jpg" alt="" /><br>
        <input type="radio" name="no8" id="" value="A">
       </div>
       <div>
        <p>b</p>
        <img src="asset/8B (2).jpg" alt="" /><br>
        <input type="radio" name="no8" id="" value="B">
       </div>
       <div>
        <p>c</p>
        <img src="asset/8C (2).jpg" alt="" /><br>
        <input type="radio" name="no8" id="" value="C">
       </div>
       <div>
        <p>d</p>
        <img src="asset/8D (2).jpg" alt="" />
        <br>
        <input type="radio" name="no8" id="" value="D">
       </div>
       <div>
        <p>e</p>
        <img src="asset/8E (2).jpg" alt="" />
        <br>
        <input type="radio" name="no8" id="" value="E">
       </div>
      </div>


     </div>

     <div class="container mb-3">

      <div class="container" style="margin-top: 40px">
       9<div id="mn"><img id="pm" src="asset/9 (2).jpg" alt="" /></div>
      </div>
      <div class="container" style="margin-top: 50px;gap: 20px;">
       <div>
        <p>a</p>
        <img src="asset/9A (2).jpg" alt="" />
        <br>
        <input type="radio" name="no9" id="" value="A">
       </div>
       <div>
        <p>b</p>
        <img src="asset/9B (2).jpg" alt="" />
        <br>
        <input type="radio" name="no9" id="" value="B">
       </div>
       <div>
        <p>c</p>
        <img src="asset/9C (2).jpg" alt="" />
        <br>
        <input type="radio" name="no9" id="" value="C">
       </div>
       <div>
        <p>d</p>
        <img src="asset/9D (2).jpg" alt="" />
        <br>
        <input type="radio" name="no9" id="" value="D">
       </div>
       <div>
        <p>e</p>
        <img src="asset/9E (2).jpg" alt="" />
        <br>
        <input type="radio" name="no9" id="" value="E">
       </div>
      </div>
     </div>
     <div class="container mb-3">

      <div class="container" style="margin-top: 40px">
       10<div id="mn"><img id="pm" src="asset/10 (2).jpg" alt="" /></div>
      </div>
      <div class="container" style="margin-top: 50px;gap: 20px;">
       <div>
        <p>a</p>
        <img src="asset/10A (2).jpg" alt="" /><br>
        <input type="radio" name="no10" id="" value="A">
       </div>
       <div>
        <p>b</p>
        <img src="asset/10B (2).jpg" alt="" /><br>
        <input type="radio" name="no10" id="" value="B">
       </div>
       <div>
        <p>c</p>
        <img src="asset/10C (2).jpg" alt="" />
        <br>
        <input type="radio" name="no10" id="" value="C">
       </div>
       <div>
        <p>d</p>
        <img src="asset/10D (2).jpg" alt="" /><br>
        <input type="radio" name="no10" id="" value="D">
       </div>
       <div>
        <p>e</p>
        <img src="asset/10E (2).jpg" alt="" />
        <br>
        <input type="radio" name="no10" id="" value="E">
       </div>
      </div>

     </div>

     <button name="btn-submit" type="submit" class="btn btn-warning text-light" style="width: 100%"
      onclick="myFun()" ;>
      Submit
     </button>
    </form>
   </div>
  </section>
 </div>





 <script>
  const correctAnswers = ["B", "A", "D", "D", "A", "B", "C", "D", "A", "D"];

// Retrieve the answers array and scores from local storage or initialize them
const answers = JSON.parse(localStorage.getItem('sub4')) || Array(10).fill('');
const scores = JSON.parse(localStorage.getItem('scores4')) || Array(10).fill(0);

function myFun() {
  for (let i = 1; i <= 10; i++) {
    // Select the checked radio button for the current question
    const selectedValue = document.querySelector(`input[name="no${i}"]:checked`);
    answers[i - 1] = selectedValue ? selectedValue.value : 'null';

    // Check if the selected answer is correct and update the scores array
    scores[i - 1] = selectedValue && selectedValue.value === correctAnswers[i - 1] ? 1 : 0;
  }

  // Store the updated arrays in local storage
  localStorage.setItem('sub4', JSON.stringify(answers));
  localStorage.setItem('scores4', JSON.stringify(scores));

  // Redirect to ending.php
  document.location.href = 'ending.php';
}

  document.getElementById('form4').onsubmit = function () {
   myFun();


  };

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
        myFun(); 
    }
   }, 1000);
  }

  const countdownDuration = 150;
  countdownTimer(countdownDuration, countdownElement);

 </script>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
  crossorigin="anonymous"></script>
 <!-- Sweet Alert -->

</body>

</html>