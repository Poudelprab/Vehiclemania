const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});

document.getElementById('next-1').addEventListener('click', function() {
  document.getElementById('step-1').classList.add('hidden');
  document.getElementById('step-2').classList.remove('hidden');
});

document.getElementById('prev-1').addEventListener('click', function() {
  document.getElementById('step-2').classList.add('hidden');
  document.getElementById('step-1').classList.remove('hidden');
});

document.getElementById('next-2').addEventListener('click', function() {
  document.getElementById('step-2').classList.add('hidden');
  document.getElementById('step-3').classList.remove('hidden');
});

document.getElementById('prev-2').addEventListener('click', function() {
  document.getElementById('step-3').classList.add('hidden');
  document.getElementById('step-2').classList.remove('hidden');
});

document.getElementById('upload-btn').addEventListener('click', function() {
  document.getElementById('file-upload').click();;
});