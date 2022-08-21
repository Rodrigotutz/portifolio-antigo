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

var $targetItem= $(".anime-item")
var $targetImg = $(".anime-img")
var targetAbout = $(".sobre-content")
var card1 = $(".card-item-1")
var card2 = $(".card-item-2")
var card3 = $(".card-item-3")

var animationClass = "anime-start"

var offset = $(window).height()

function animeItem(){
    var documentTop = $(document).scrollTop()
    var itemTop = $targetItem.offset().top
    if(documentTop > itemTop - 200) {
        $targetItem.addClass(animationClass)
    }
}

function animeImg(){
    var documentTop = $(document).scrollTop()
    var itemTop = $targetImg.offset().top
    if(documentTop > itemTop - 200) {
        $targetImg.addClass(animationClass)
    }
}

function animeAbout(){
    var documentTop = $(document).scrollTop()

    targetAbout.each(function(){
        var itemTop = targetAbout.offset().top
        if(documentTop > itemTop - 300) {
            targetAbout.addClass(animationClass)
        }
    })
    
}

function animeCard1(){
    var documentTop = $(document).scrollTop()

    card1.each(function(){
        var itemTop = card1.offset().top
        if(documentTop > itemTop - 300) {
            card1.addClass(animationClass)
        }
    })
}

function animeCard2(){
    var documentTop = $(document).scrollTop()

    card2.each(function(){
        var itemTop = card2.offset().top
        if(documentTop > itemTop - 300) {
            card2.addClass(animationClass)
        }
    })
}

function animeCard3(){
    var documentTop = $(document).scrollTop()

    card3.each(function(){
        var itemTop = card3.offset().top
        if(documentTop > itemTop - 300) {
            card3.addClass(animationClass)
        }
    })
}

animeItem();
animeImg();

$(document).scroll(function(){
    animeAbout();
    animeCard1();
    animeCard2();
    animeCard3();
})

var btnVerMais = document.getElementById("ver-mais-btn")
var verMaisDiv = document.getElementById('ver-mais')

btnVerMais.addEventListener("click", function(){
    btnVerMais.style.display = "none";
    verMaisDiv.classList.remove('ver-mais')
    verMaisDiv.classList.add('show-ver-mais')
})
