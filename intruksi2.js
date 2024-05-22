function limitt() {
  let all = document.querySelectorAll(".kol");
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
  let all = document.querySelectorAll(".koll");
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
