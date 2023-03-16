// navbar
const showMenu = () => {
  document
    .querySelector("#navbar-menu")
    .classList.toggle("translate-y-[-100%]");
  document.querySelector("#menu-icon").classList.toggle("hidden");
  document.querySelector("#x-icon").classList.toggle("hidden");
};

// countdown timer
const second = 1000,
  minute = second * 60,
  hour = minute * 60,
  day = hour * 24;

// ganti countdown timer
const countdownDate = "2022-09-10T00:00:00Z";

const countDown = new Date(countdownDate).getTime();
const x = setInterval(function () {
  const now = new Date().getTime();
  const distance = countDown - now;

  Math.floor(distance / day) >= 10
    ? (document.getElementById("days").innerText = Math.floor(distance / day))
    : (document.getElementById("days").innerText =
        "0" + Math.floor(distance / day));

  Math.floor((distance % day) / hour) >= 10
    ? (document.getElementById("hours").innerText = Math.floor(
        (distance % day) / hour
      ))
    : (document.getElementById("hours").innerText =
        "0" + Math.floor((distance % day) / hour));

  Math.floor((distance % hour) / minute) >= 10
    ? (document.getElementById("minutes").innerText = Math.floor(
        (distance % hour) / minute
      ))
    : (document.getElementById("minutes").innerText =
        "0" + Math.floor((distance % hour) / minute));

  Math.floor((distance % minute) / second) >= 10
    ? (document.getElementById("seconds").innerText = Math.floor(
        (distance % minute) / second
      ))
    : (document.getElementById("seconds").innerText =
        "0" + Math.floor((distance % minute) / second));

  //jika timer habis
  if (distance < 0) {
    document.querySelector("#promotion").classList.add("hidden");
    clearInterval(x);
  }
}, 0);

// add and minus item
let addItem = (btn) => {
  let counter = parseInt(btn.previousElementSibling.innerHTML);
  btn.previousElementSibling.innerHTML = counter + 1;
};
let minusItem = (btn) => {
  let counter = parseInt(btn.nextElementSibling.innerHTML);
  if (counter == 0) {
    return;
  }
  btn.nextElementSibling.innerHTML = counter - 1;
};
