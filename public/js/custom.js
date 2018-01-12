$(function(){
	var $sidenav = $('#sidenav_1');
    var $topnav = $('nav.navbar.navbar-default.center.stroke');
    var $nac_items = $('.navbar-nav>li>a');

//console.log($sidenav.top);
$(document).on('scroll', function(){
var doc = $(document);
var $scrolltop = doc.scrollTop();
if($scrolltop>=350 && $scrolltop <= (getHeight() - 850)){

	$sidenav.addClass('sidenav');
	
}else {
	$sidenav.removeClass('sidenav');
	
}

if($scrolltop>=30){
    $topnav.addClass('navbar-fixed-top');
    $topnav.addClass('white');
    $nac_items.addClass('orange');
}else{
    $topnav.removeClass('navbar-fixed-top');
    $topnav.removeClass('white');
    $nac_items.removeClass('orange');


}




});





function getHeight(){
	var body = document.body,
    html = document.documentElement;

var height = Math.max( body.scrollHeight, body.offsetHeight, 
                       html.clientHeight, html.scrollHeight, html.offsetHeight );

return height;
}

//722.3399658203125






});

$(document).ready(function() {

    // page is now ready, initialize the calendar...

    $('#calendar').fullCalendar({
        googleCalendarApiKey: 'AIzaSyDiYniqvtC3JCpgCzSphzE6NgdP9-a7WT0',
        events: {
            googleCalendarId: 'ibhconroe@gmail.com'
        }
    });

});

$(function() {
    $(".scroll").click(function() {
        return $("#top, html").animate({
            scrollTop: 0
        }, 800),
        !1
    })
});
/*
$(function() {
    $(".arrow").click(function() {
        return $("#middle").animate({
            scrollTop: 0
        }, 800),
        !1
    })
});
*/
$(function() {
    $(".arrow").click(function() {
        return $("#top, html").animate({
            scrollTop: 370
        }, 800),
        !1
    })
});




