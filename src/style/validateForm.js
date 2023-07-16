const email = document.getElementById("email");
const password = document.getElementById("password");
const validasi = document.getElementById("validasi");
const button = document.getElementById("button");

button.addEventListener("click", (e) => {
  console.log(email.value, password.value);
  if (email.value == "mallexibra@gmail.com" && password.value == "123") {
    validasi.innerText = "Login berhasil!";
    validasi.classList.add("valid");
    validasi.classList.replace("error", "valid");
    setTimeout(() => {
      window.location = "todo.html";
    }, 1000);
  } else if (
    email.value !== "mallexibra@gmail.com" &&
    password.value == "123"
  ) {
    validasi.innerText = "Email yang anda inputkan salah!";
    validasi.classList.add("error");
    validasi.classList.replace("valid", "error");
  } else if (
    email.value == "mallexibra@gmail.com" &&
    password.value !== "123"
  ) {
    validasi.innerText = "Password yang anda inputkan salah!";
    validasi.classList.add("error");
    validasi.classList.replace("valid", "error");
  } else {
    validasi.innerText = "Email dan Password yang anda inputkan salah!";
    validasi.classList.add("error");
    validasi.classList.replace("valid", "error");
  }
  e.preventDefault();
});

email.addEventListener("keyup", () => {
  validasi.innerText = "";
  validasi.classList.remove("error");
  validasi.classList.remove("valid");
});

password.addEventListener("keyup", () => {
  validasi.innerText = "";
  validasi.classList.remove("error");
  validasi.classList.remove("valid");
});
