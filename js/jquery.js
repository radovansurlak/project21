$("#menu").on('click', 'a', function(event){
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 750);
});

var $vid = $('video','#bg-cont');
var $msg = $('#vid-overlay');
$msg.css({top:($vid.height()/2)-$msg.height()/2});

$( window ).resize(function() {
  var $vid = $('video','#bg-cont');
  var $msg = $('#vid-overlay');
  $msg.css({top:($vid.height()/2)-$msg.height()/2});
});


$(window).scroll(function() {
    if ($(window).scrollTop() > 100) {
        $("#logo").css("height","11vw");
        $("#menu").delay("300ms").css("height","5vw");
        // $("#menu").delay("300ms").css("background-image","url(media/menu-bg.jpg)");

        // $("#menu").delay("300ms").css("background-color","rgba(0,0,0,1)");
    }
    else {
        $("#menu").css("height","0vw");
        $("#logo").delay("300ms").css("height","17vw");

    }
});
