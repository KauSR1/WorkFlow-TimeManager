const logOut = document.getElementById('btnLog');

logOut.addEventListener('click', () => {
  if (confirm('Deseja sair?')) {
    localStorage.clear();
    sessionStorage.clear();
    window.location.href = 'auth.html';
  }
});