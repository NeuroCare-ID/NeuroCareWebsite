function openLoginModal() {
  document.getElementById('loginModal').classList.add('active');
  document.getElementById('pageTitle').textContent = 'Login Page';
  document.body.classList.add('modal-open');
}

function openSignupModal() {
  document.getElementById('signupModal').classList.add('active');
  document.getElementById('pageTitle').textContent = 'Sign Up Page';
  document.body.classList.add('modal-open');
}

function closeModal(modalId) {
  document.getElementById(modalId).classList.remove('active');
  document.body.classList.remove('modal-open');
  document.getElementById('pageTitle').textContent = 'Login Page';
}

function switchToSignup() {
  closeModal('loginModal');
  setTimeout(() => openSignupModal(), 100);
}

function switchToLogin() {
  closeModal('signupModal');
  setTimeout(() => openLoginModal(), 100);
}

document.getElementById('loginModal').addEventListener('click', function(e) {
  if (e.target === this) closeModal('loginModal');
});

document.getElementById('signupModal').addEventListener('click', function(e) {
  if (e.target === this) closeModal('signupModal');
});

document.getElementById('loginForm').addEventListener('submit', function(e) {
  e.preventDefault();
  alert('Login functionality would be implemented here');
});

document.getElementById('signupForm').addEventListener('submit', function(e) {
  e.preventDefault();
  alert('Registration functionality would be implemented here');
});

function loginWithGoogle() {
  alert('Google login functionality would be implemented here');
}

document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') {
    closeModal('loginModal');
    closeModal('signupModal');
  }
});

window.addEventListener('load', function() {
  setTimeout(() => openLoginModal(), 500);
});

window.NeuroCareAuth = {
  openLogin: openLoginModal,
  openSignup: openSignupModal,
  closeLogin: () => closeModal('loginModal'),
  closeSignup: () => closeModal('signupModal')
};
