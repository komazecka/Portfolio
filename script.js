
const form = document.querySelector("form");

form.addEventListener("submit", (e) => {
  e.preventDefault();
  alert("Poruka je poslata! Hvala!");
  form.reset();
});
