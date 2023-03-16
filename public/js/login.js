let validUsername = false;
let validPassword = false;

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

const validatePassword = (element) => {
  if (element.value == "") {
    element.nextElementSibling.innerHTML = "Field cannot be empty";
    element.classList.add("border-2");
  } else {
    element.nextElementSibling.innerHTML = "";
    element.classList.remove("border-2");
    validPassword = true;
  }
};

const validateLogin = (element, e) => {
  validateUsername(document.querySelector("#username"));
  validatePassword(document.querySelector("#password"));

  if (validUsername == true && validPassword == true) {
    element.submit();
  } else {
    e.preventDefault();
  }
};
