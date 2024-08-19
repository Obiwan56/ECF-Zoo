const togglePasswordBtn = document.getElementById("togglePassword");
const passwordInput = document.getElementById("password");

togglePasswordBtn.addEventListener("click", function() {
    const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
    passwordInput.setAttribute("type", type);
});
