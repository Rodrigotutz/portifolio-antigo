function loading(){
    document.getElementsByClassName("pre-load")[0].style.display = "none"
}

var maskBehavior = function (val) {
    return val.replace(/\D/g, '').length === 11 ? '(00) 00000 - 0000' : '(00) 0000 - 00009';
   },
   options = {onKeyPress: function(val, e, field, options) {
    field.mask(maskBehavior.apply({}, arguments), options);
    }
   };
   
   $('#telefone').mask(maskBehavior, options);


const mensagemSucesso = document.getElementById("mensagem-sucesso")
const closeMensagemSucesso = document.getElementById("close-mensagem-sucesso")

if(mensagemSucesso){
    closeMensagemSucesso.addEventListener("click", function(){
        mensagemSucesso.style.display = "none"
    })
}