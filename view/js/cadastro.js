// Evento do eye icon para mostrar a senha na tela de registro
const togglePasswordcadastro = document.getElementById("togglePassword");
const passwordRegister = document.getElementById("senha");

togglePasswordcadastro.addEventListener('click', function(e){
    // toggle the type attribute  - Senha
    const type = passwordRegister.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordRegister.setAttribute('type', type);
    
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');

})
//end senha tela de registro


// Evento do eye icon para mostrar a confirmação da senha na tela de registro
const togglePasswordconfirm = document.getElementById("eye2");
const passwordConfirm = document.getElementById("confirma_senha");

togglePasswordconfirm.addEventListener('click', function(e){
    // toggle the type attribute  - Senha
    const type = passwordConfirm.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordConfirm.setAttribute('type', type);
    
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');

})
// end confirmação senha tela de registro

// inicio funcao de validacao do registro
function validateForm() {
    var senha;
    var confirma_senha;
    var accept_checkbox; 
    
    senha = document.getElementById("senha").value;
    confirma_senha = document.getElementById("confirma_senha").value;
    accept_checkbox = document.getElementById("accept_terms");

    if (senha != confirma_senha){
        alert("Senhas não conferem");
        return false;
    }
    if (!(accept_checkbox.checked)){
        alert("Você não aceitou os termos");
        return false;
    }    
    
}