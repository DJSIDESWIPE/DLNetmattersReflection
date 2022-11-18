let $cookiecontainer = $("#Cookie-Container");
let $acceptBTN = $("#Accept-Cookie");

$acceptBTN.on("load", acceptCookie());
function acceptCookie() {
    //i used number values instead of true/false so that it was easier to debug an issue as i had a problem with the if statement
    if (sessionStorage.acceptedcookie > 0) {
        $cookiecontainer.hide();
        // function below lets me reset the cookies for testing purposes
        // resetCookie();
    } else {
        $cookiecontainer.show();
        $acceptBTN.on("click", function(){
            sessionStorage.acceptedcookie = 1;
            $cookiecontainer.hide();
        }); 
    }
  }

function resetCookie(){
    sessionStorage.acceptedcookie = Number(sessionStorage.acceptedcookie) - 1;
}

$(".cookie-settings-btn").on("click",function(){
    $(".cookie-settings").show();
    $(".cookie-container").hide();
    $(".container-body").hide();
});
$(".cookie-accept-btn").on("click", function(){
    sessionStorage.acceptedcookie = 1;
    $cookiecontainer.hide();
    $(".cookie-settings").hide();
    $(".container-body").show();
});
$(".cookie-cancel-btn").on("click",function(){
    $(".cookie-settings").hide();
    $(".cookie-container").show();
    $(".container-body").show();
});
$(".cookie-enable-btn").on("click",function(e){
    $enablebtn = $(e.target);
    if(!$enablebtn.hasClass("isactive")){
        $enablebtn.addClass("isactive");
        $enablebtn.prev().removeClass("isactive");
    } else {

    }
});
$(".cookie-disable-btn").on("click", function(e){
    disablebtn = $(e.target);
    if(!disablebtn.hasClass("isactive")){
        disablebtn.addClass("isactive");
        disablebtn.next().removeClass("isactive");
    } else {

    }
});
$(".preference-btn").on("click", function(e){
    $cookiepreferences = $(".detailed-preferences");
    if($cookiepreferences.is(":hidden")){
        $cookiepreferences.show();
        $(e.target).html("hide detailed preferences");
    } else {
        $(e.target).html("show detailed preferences");
        $cookiepreferences.hide()

    }
    
});



