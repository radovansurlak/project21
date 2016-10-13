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
        $("#logo").css({height:"4.5vw",top:"0.6vw"});
        $("#menu").delay("300ms").css("height","5vw");
    }
    else {
        $("#menu").css("height","0vw");
        $("#logo").delay("300ms").css({height:"7vw",top:"2vw"});

    }
});
