document.querySelector('input[type=email]').oninvalid = function() {

// remove mensagens de erros antigas
this.setCustomValidity("");

//reexecuta validacao
if (!this.validity.valid) {

//se invalido, coloca mensagem de erro
this.setCustomValidity("Email inválido");

}
};



