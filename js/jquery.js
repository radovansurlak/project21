$(window).scroll(function() {
    if ($(window).scrollTop() > 100) {
        $("#logo").css("height","11vw");
        $("#menu").delay("300ms").css("background-color","rgba(0,0,0,1)");
    }
    else {
        $("#menu").css("background-color","unset");
        $("#logo").delay("300ms").css("height","17vw");

    }
});
