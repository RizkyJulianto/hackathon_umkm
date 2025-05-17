const passwordField = document.getElementById("password_field");
const iconEye = document.querySelector(".eye-icon i");

iconEye.addEventListener("click", function () {
  if (passwordField.type == "password") {
    passwordField.type = "text";
    iconEye.classList.remove("fa-eye-slash");
    iconEye.classList.add("fa-eye");
  } else {
    passwordField.type = "password";
    iconEye.classList.add("fa-eye-slash");
    iconEye.classList.remove("fa-eye");
  }
});
