const inputEmail = document.getElementById('email');
const inputSenha = document.getElementById('password');
const inputEnviar = document.getElementById('btnLogin'); 
const capturarUser = document.getElementById('userName');

inputEnviar.addEventListener('click', (event) => {
  event.preventDefault(); 
  logar();
});

function logar(){
  const emailDigitado = inputEmail.value;
  const senhaDigitada = inputSenha.value; 

  if(emailDigitado === "kauan@admin" && senhaDigitada === "kauan"){
    alert('Login aprovado! Redirecionando...');
    window.location.href = "dashboard.html";
  } else {
    alert('Login reprovado. Verifique suas credenciais.');
  }
}