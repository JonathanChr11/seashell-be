let validUsername = false;
let validEmail = false;
let validAddress = false;
let validPassword = false;
let validReTypePassword = false;

const validateUsername = (element) => {
  if (element.value == "") {
    element.nextElementSibling.innerHTML = "Field cannot be empty";
    element.classList.add("border-2");
  } else {
    element.nextElementSibling.innerHTML = "";
    element.classList.remove("border-2");
    validUsername = true;
  }
};

const validateEmail = (element) => {
  const reEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (element.value == "") {
    element.nextElementSibling.innerHTML = "Field cannot be empty";
    element.classList.add("border-2");
  } else if (!element.value.match(reEmail)) {
    element.nextElementSibling.innerHTML = "Invalid email";
    element.classList.add("border-2");
  } else {
    element.nextElementSibling.innerHTML = "";
    element.classList.remove("border-2");
    validEmail = true;
  }
};

const validateAddress = (element) => {
  if (element.value == "") {
    element.nextElementSibling.innerHTML = "Field cannot be empty";
    element.classList.add("border-2");
  } else {
    element.nextElementSibling.innerHTML = "";
    element.classList.remove("border-2");
    validAddress = true;
  }
};

const validatePassword = (element) => {
  const rePass =
    /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\~.\/<>?;:"'`!@#$%^&*()\[\]{}_+=|\\-])[A-Za-z\d\~.\/<>?;:"'`!@#$%^&*()\[\]{}_+=|\\-]{8,}$/;
  if (element.value == "") {
    element.nextElementSibling.innerHTML = "Field cannot be empty";
    element.classList.add("border-2");
  } else if (!element.value.match(rePass)) {
    element.nextElementSibling.innerHTML =
      "Invalid password (Must contain 1 uppercase, 1 lowercase, 1 number, 1 symbol, and minimal 8 characters)";
    element.classList.add("border-2");
  } else {
    element.nextElementSibling.innerHTML = "";
    element.classList.remove("border-2");
    validPassword = true;
  }
};

const validateReTypePassword = (element) => {
  if (element.value == "") {
    element.nextElementSibling.innerHTML = "Field cannot be empty";
    element.classList.add("border-2");
  } else if (element.value != document.querySelector("#password").value) {
    element.nextElementSibling.innerHTML = "Passwords do not match";
    element.classList.add("border-2");
  } else {
    element.nextElementSibling.innerHTML = "";
    element.classList.remove("border-2");
    validReTypePassword = true;
  }
};

const nextLogin = () => {
  validateUsername(document.querySelector("#username"));
  validateEmail(document.querySelector("#email"));
  validateAddress(document.querySelector("#address"));

  if (validAddress == true && validUsername == true && validEmail == true) {
    document.querySelector("#register-form-1").classList.add("hidden");
    document.querySelector("#register-form-2").classList.remove("hidden");
  }
};

const backLogin = () => {
  document.querySelector("#register-form-1").classList.remove("hidden");
  document.querySelector("#register-form-2").classList.add("hidden");
};

const validateRegister = (element, e) => {
  validateUsername(document.querySelector("#username"));
  validateEmail(document.querySelector("#email"));
  validateAddress(document.querySelector("#address"));
  validatePassword(document.querySelector("#password"));
  validateReTypePassword(document.querySelector("#confirm-password"));

  if (
    validAddress == true &&
    validUsername == true &&
    validEmail == true &&
    validPassword == true &&
    validReTypePassword == true
  ) {
    element.submit();
  } else {
    e.preventDefault();
  }
};
