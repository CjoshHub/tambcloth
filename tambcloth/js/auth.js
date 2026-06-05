function handleLogin(event) {
  event.preventDefault();

  const username = document.getElementById('username')?.value.trim() || '';
  const password = document.getElementById('password')?.value || '';

  // Demo credentials — replace with real server-side auth in production
  const validUsername = 'tambouriner';
  const validPassword = 'password123';

  if (username === validUsername && password === validPassword) {
    // Successful login (demo)
    alert('Login successful. Redirecting...');
    window.location.href = 'index.html';
  } else {
    // Failed login
    alert('Invalid username or password.');
  }
}

// Optional: attach handler if form uses addEventListener instead of inline onsubmit
document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('login-form');
  if (form) {
    form.addEventListener('submit', handleLogin);
  }
});

document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("login-form");
  const usernameInput = document.getElementById("username");
  const passwordInput = document.getElementById("password");

  form.addEventListener("submit", (event) => {
    event.preventDefault();

    const username = usernameInput.value.trim();
    const password = passwordInput.value;

    // Example hard-coded credentials
    const validUsername = "tambouriner";
    const validPassword = "password123";

    if (username === validUsername && password === validPassword) {
      // Login success
      window.location.href = "index.html"; // change to the page you want
    } else {
      alert("Invalid username or password.");
    }
  });
});