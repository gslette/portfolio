$(function() {
    $('.links').hover(function(){
        var text = (this).text();
        $(this).text = "{ " + text + " }";
    });
});