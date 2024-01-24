function limitFunc() {
  let all = document.querySelectorAll(".kol1");
  let selected = 0;

  for (let count = 0; count < all.length; count++) {
    if (all[count].checked == true) {
      selected += 1;
    }
  }
  if (selected > 2) {
    return false;
  }
}
function limitFunct() {
  let all = document.querySelectorAll(".kol2");
  let selected = 0;

  for (let count = 0; count < all.length; count++) {
    if (all[count].checked == true) {
      selected += 1;
    }
  }
  if (selected > 2) {
    return false;
  }
}
function limitFuncti() {
  let all = document.querySelectorAll(".kol3");
  let selected = 0;

  for (let count = 0; count < all.length; count++) {
    if (all[count].checked == true) {
      selected += 1;
    }
  }
  if (selected > 2) {
    return false;
  }
}
function limitFunctio() {
  let all = document.querySelectorAll(".kol4");
  let selected = 0;

  for (let count = 0; count < all.length; count++) {
    if (all[count].checked == true) {
      selected += 1;
    }
  }
  if (selected > 2) {
    return false;
  }
}
function limitFunction() {
  let all = document.querySelectorAll(".kol5");
  let selected = 0;

  for (let count = 0; count < all.length; count++) {
    if (all[count].checked == true) {
      selected += 1;
    }
  }
  if (selected > 2) {
    return false;
  }
}
function limitFunctione() {
  let all = document.querySelectorAll(".kol6");
  let selected = 0;

  for (let count = 0; count < all.length; count++) {
    if (all[count].checked == true) {
      selected += 1;
    }
  }
  if (selected > 2) {
    return false;
  }
}
function limitFunctioner() {
  let all = document.querySelectorAll(".kol7");
  let selected = 0;

  for (let count = 0; count < all.length; count++) {
    if (all[count].checked == true) {
      selected += 1;
    }
  }
  if (selected > 2) {
    return false;
  }
}
function limitF() {
  let all = document.querySelectorAll(".kol8");
  let selected = 0;

  for (let count = 0; count < all.length; count++) {
    if (all[count].checked == true) {
      selected += 1;
    }
  }
  if (selected > 2) {
    return false;
  }
}
function limitFunctir() {
  let all = document.querySelectorAll(".kol9");
  let selected = 0;

  for (let count = 0; count < all.length; count++) {
    if (all[count].checked == true) {
      selected += 1;
    }
  }
  if (selected > 2) {
    return false;
  }
}
function limitt() {
  let all = document.querySelectorAll(".kol10");
  let selected = 0;

  for (let count = 0; count < all.length; count++) {
    if (all[count].checked == true) {
      selected += 1;
    }
  }
  if (selected > 2) {
    return false;
  }
}
function limitFunctitin() {
  let all = document.querySelectorAll(".kol11");
  let selected = 0;

  for (let count = 0; count < all.length; count++) {
    if (all[count].checked == true) {
      selected += 1;
    }
  }
  if (selected > 2) {
    return false;
  }
}
function limitFunctib() {
  let all = document.querySelectorAll(".kol12");
  let selected = 0;

  for (let count = 0; count < all.length; count++) {
    if (all[count].checked == true) {
      selected += 1;
    }
  }
  if (selected > 2) {
    return false;
  }
}
function limitFunctin() {
  let all = document.querySelectorAll(".kol13");
  let selected = 0;

  for (let count = 0; count < all.length; count++) {
    if (all[count].checked == true) {
      selected += 1;
    }
  }
  if (selected > 2) {
    return false;
  }
}
function limit() {
  let all = document.querySelectorAll(".kol14");
  let selected = 0;

  for (let count = 0; count < all.length; count++) {
    if (all[count].checked == true) {
      selected += 1;
    }
  }
  if (selected > 2) {
    return false;
  }
}


const countdownElement = document.getElementById("countdown");

function countdownTimer(duration, displayElement) {
  let timer = duration;
  let minutes, seconds;

  setInterval(function () {
    minutes = parseInt(timer / 60, 10);
    second = parseInt(timer % 60, 10);

    minutes = minutes < 10 ? "0" + minutes : minutes;
    second = second = 60 ? +second : seconds;

    displayElement.textContent = minutes + ":" + second;
    --timer;
    if (timer == -1) {
      alert("Waktu habis");
      myFuncti();
    }
  }, 1000);
}
const countdownDuration = 240;
countdownTimer(countdownDuration, countdownElement);
setInterval(() => {
  document.location.href = "instruksi3.php";
}, 240000);
