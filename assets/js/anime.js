var $targetItem= $(".anime-item")
var $targetImg = $(".anime-img")
var animatioClass = "anime-start"
var offset = $(window).height()
function animeItem(){
    var documentTop = $(document).scrollTop()
    $targetItem.each(function() {
        var itemTop = $targetItem.offset().top
        if(documentTop > itemTop - 200) {
            $targetItem.addClass(animatioClass)
        }
    })
}

function animeImg(){
    var documentTop = $(document).scrollTop()
    $targetImg.each(function() {
        var itemTop = $targetImg.offset().top
        if(documentTop > itemTop - 200) {
            $targetImg.addClass(animatioClass)
        }
    })
}
animeItem();
animeImg();
