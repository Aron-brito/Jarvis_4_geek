// Evento do eye icon para mostrar a senha na tela de login
const togglePassword = document.getElementById('eye');
const password = document.getElementById('form_with_toggle');
togglePassword.addEventListener('click', function(e){
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');

})
