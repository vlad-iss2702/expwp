$(document).ready(function() {
	$(function() {
  var $menu_popup = $('.menu-popup');
  $(".menu-triger, .menu-close").click(function(){
    $menu_popup.slideToggle(300, function(){
      if ($menu_popup.is(':hidden')) {
        $('body').removeClass('body_pointer');
      } else {
        $('body').addClass('body_pointer');
      }         
    });  
    return false;
  });     
  $(document).on('click', function(e){
    if (!$(e.target).closest('.menu').length){
      $('body').removeClass('body_pointer');
      $menu_popup.slideUp(300);
    }
  });
});
$('.main-carousel').owlCarousel({
    margin: 10,
    nav: true,
    dots: true,
    autoplayTimeout: 7000,
    loop: true,
    smartSpeed:1000,
    navText : ["<img src=\"https://www.rcmz49.ru/wp-content/themes/rcmz49/assets/img/icon/prev-white.svg\"> ", "<img src=\"https://www.rcmz49.ru/wp-content/themes/rcmz49/assets/img/icon/next-white.svg\">"],
    items: 1
})
$('.gallery-carousel').owlCarousel({
    margin: 10,
    nav: true,
    dots: true,
    autoplayTimeout: 7000,
    loop: true,
    smartSpeed:1000,
    navText : ["<img src=\"https://www.rcmz49.ru/wp-content/themes/rcmz49/assets/img/icon/prev-white.svg\"> ", "<img src=\"https://www.rcmz49.ru/wp-content/themes/rcmz49/assets/img/icon/next-white.svg\">"],
    items: 1
})
$('.partner-carousel').owlCarousel({
    margin: 25,
    nav: true,
    dots: false,
    autoplayTimeout: 7000,
    loop: true,
    smartSpeed:1000,
    navText : ["<img src=\"https://www.rcmz49.ru/wp-content/themes/rcmz49/assets/img/icon/prev-white.svg\"> ", "<img src=\"https://www.rcmz49.ru/wp-content/themes/rcmz49/assets/img/icon/next-white.svg\">"],
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:2,
        },
        900:{
            items:3,
        },
    }
})
$('.resource-carousel').owlCarousel({
    margin: 25,
    nav: true,
    dots: false,
    autoplayTimeout: 7000,
    loop: true,
    smartSpeed:1000,
    navText : ["<img src=\"https://www.rcmz49.ru/wp-content/themes/rcmz49/assets/img/icon/prev-white.svg\"> ", "<img src=\"https://www.rcmz49.ru/wp-content/themes/rcmz49/assets/img/icon/next-white.svg\">"],
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:2,
        },
        900:{
            items:3,
        },
    }
})
/*Idtabs*/
$("#usual1 ul").idTabs(function(id,list,set){ 
    $("a",set).removeClass("selected") 
    .filter("[href='"+id+"']",set).addClass("selected"); 
    for(i in list) 
      $(list[i]).hide(); 
    $(id).fadeIn(); 
    return false; 
    change: true
  }); 
/*-Loader*/
window.onload = function () {
    document.body.classList.add('loaded_hiding');
    window.setTimeout(function () {
      document.body.classList.add('loaded');
      document.body.classList.remove('loaded_hiding');
    }, 500);
  }
// Lightbox
    $(document).on('click', '#galleryBlock, .gallery-init, *[rel=zoom]', function (event) {
        app.blueimp(this, event);
    });

    app = {
    blueimp: function(e, event){
        event = event || window.event;
        if (
            event.target.nodeName == 'IMG' ||
            event.target.nodeName == 'SPAN' ||
            event.target.nodeName == 'A'){
            var target = event.target || event.srcElement;
            var index = (event.target.nodeName == 'A') ? target : target.parentNode;
            var	options = {
                index: index,
                event: event
            };
            links = e.getElementsByTagName('a');
            if ($(e).attr('rel') == 'zoom'){
                links = $(e);
            }
            blueimp.Gallery(links, options);
        }
        return false;
    }
};


});
