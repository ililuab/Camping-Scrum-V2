const loginButton = document.querySelector("#login");
const signupButton = document.querySelector("#signup");
const divlogin = document.querySelector("#logindiv");
const divsignup = document.querySelector("#signupdiv");

const loginSignup = document.querySelector("#login-signup");

loginButton.addEventListener("click", (event) => {
  event.preventDefault();
  divsignup.style.display = "none";
  divlogin.style.display = "flex";
  loginSignup.style.height = "260px";
});

signupButton.addEventListener("click", (event) => {
  event.preventDefault();
  divsignup.style.display = "flex";
  divlogin.style.display = "none";
  loginSignup.style.height = "350px";
});

function validateForm() {
  let x = document.forms["form"]["wachtwoord"].value;
  if (x == "") {
    alert("vul eerst je Wachtwoord in om verder te gaan!");
    return false;
  }
}