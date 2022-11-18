
var oldScrollHeader = 0;
var oldScrollNav = 0;

window.onscroll = function() {
    $header = $(".container-header");
    oldScrollHeader = stickyScroll($header, oldScrollHeader, "0px");
    $navbar = $(".container-navbar");
    oldScrollNav = stickyScroll($navbar, oldScrollNav, "70px");

};

function stickyScroll(eleref, oldScroll, top) {
    let currentScroll = window.scrollY;
    if(currentScroll <= 200){
        eleref.removeClass("scroll-up");
        eleref.css("position","static");
    }
    if(oldScroll < currentScroll && !eleref.hasClass("scroll-down")){
        eleref.removeClass("scroll-up");
        eleref.addClass("scroll-down");
        eleref.css("position","static");
    }
    if(oldScroll > currentScroll && eleref.hasClass("scroll-down")){
        eleref.removeClass("scroll-down");
        eleref.addClass("scroll-up"); 
        eleref.css("position", "fixed");
        eleref.css("top", top).css("left",0);
        eleref.css("z-index", 999);

    } 
    oldScroll = currentScroll;
    return oldScroll;
}