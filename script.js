// Show a success message without redirect (optional UX boost)
const form = document.querySelector("form");
const successMessage = document.getElementById("success-message");

form.addEventListener("submit", function () {
  setTimeout(() => {
    form.style.display = "none";
    successMessage.style.display = "block";
  }, 500);
});
