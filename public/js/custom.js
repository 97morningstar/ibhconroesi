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


    $(function(){
        $('#slider').rbtSlider({
            height: '400px', 
            'dots': true,
            'arrows': true,
            'auto': 3
        });
    });

var p;
$(document).ready(function(e) {
   
    // live handler
    lc_lightbox('.elem', {
        wrap_class: 'lcl_fade_oc',
        gallery : true, 
        thumb_attr: 'data-lcl-thumb', 
        
        skin: 'minimal',
        radius: 0,
        padding : 0,
        border_w: 0,
        fullscreen    : true,
         socials     : true,
    }); 



    $('.alb').click(function(event){

      

            var $id = $(this).attr("id");
       p=$id;
            var $a = $('a.pho');



            for(var i = 0; i < $a.length; i++){
                if($a[i].getAttribute('album')===$id){
                    $a[i].setAttribute('class', 'pho elem');
             }
          }
    });

    function changeClass(){
        
    }





});


