// Form
const form = document.getElementById('form');
const fname = document.getElementById('name');
const phone = document.getElementById('phone');
const email = document.getElementById('email');
const message = document.getElementById('message');


form.addEventListener('submit', (e) => {
    e.preventDefault();

    checkInputs();
});

function checkInputs() {
    const nameValue = fname.value.trim();
    const phoneValue = phone.value.trim();
    const emailValue = email.value.trim();
    const messageValue = message.value.trim();

    const validateEmail = (email) => {
        return email.match(
          /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        );
      };
      

    if (nameValue === '') {
        setErrorFor(fname, 'Name cannot be blank');
    } else {
        setSuccessFor(fname);
    }

    if (emailValue === '') {
        setErrorFor(email, 'Email cannot be blank');
    }else if (validateEmail(emailValue)) {
          setSuccessFor(email);
    } else {
            setErrorFor(email, 'Email is invalid!');
    }

    if (phoneValue === '') {
        setErrorFor(phone, 'Phone Number cannot be blank');
    } else if (phoneValue.length < 10){
        setErrorFor(phone, 'Phone Number is not valid!');
    }else if (phoneValue.length > 12){
        setErrorFor(phone, 'Phone Number is not valid!');
    }else {
        setSuccessFor(phone);
    }

    if (messageValue === '') {
        setErrorFor(message, 'Message cannot be blank');
    } else if (messageValue.length < 5) {
        setErrorFor(message, 'Minimum Message must be at least 5 words!');
    } else {
        setSuccessFor(message);
    }
}

function setErrorFor(input, message){
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');

    small.innerText = message;

    formControl.className = 'form-control error';
}

function setSuccessFor(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-control success';
}