// check cart items
if (document.querySelectorAll(".cart-item").length == 0) {
  document.querySelector("#empty-cart").innerHTML = "Your cart is empty";
} else {
  document.querySelector("#empty-cart").innerHTML =
    "You currently have these items in your cart";
}

// navbar
const showMenu = () => {
  document
    .querySelector("#navbar-menu")
    .classList.toggle("translate-y-[-100%]");
  document.querySelector("#menu-icon").classList.toggle("hidden");
  document.querySelector("#x-icon").classList.toggle("hidden");
};

// update cart
const updateCart = () => {
  if (document.querySelectorAll(".cart-item").length == 0) {
    document.querySelector("#empty-cart").innerHTML = "Your cart is empty";
  } else {
    document.querySelector("#empty-cart").innerHTML =
      "You currently have these items in your cart";
  }
};

// add and minus item
let addItem = (btn) => {
  let counter = parseInt(btn.previousElementSibling.innerHTML);
  btn.previousElementSibling.innerHTML = counter + 1;
};
let minusItem = (btn) => {
  let counter = parseInt(btn.nextElementSibling.innerHTML);
  if (counter == 1) {
    btn.parentElement.parentElement.parentElement.parentElement.remove();
  }
  btn.nextElementSibling.innerHTML = counter - 1;
  updateCart();
};

// validate payment
const validatePayment = (element, e) => {
  // hrs upload file baru form akan ke submit
  if (document.querySelector("#payment-proof").files.length != 0) {
    element.submit();
  } else {
    document.querySelector("#payment-validation").innerHTML =
      "Upload your proof of payment";
    e.preventDefault();
  }
};

// toggle payment
const togglePayment = (e) => {
  // kalo cart kosong form ga muncul
  if (document.querySelectorAll(".cart-item").length == 0) {
    e.preventDefault();
  } else {
    document.querySelector("#payment").classList.toggle("hidden");
    document.querySelector("#payment-form").reset();
  }
};
