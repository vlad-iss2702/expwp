$(document).ready(function() {
	let hamburger = {
  nav: document.querySelector('#nav'),
  navToggle: document.querySelector('.nav-toggle'),

  initialize() {
    this.navToggle.addEventListener('click', () => { this.toggle(); });
  },

  toggle() {
    this.navToggle.classList.toggle('expanded');
    this.nav.classList.toggle('expanded');
  },
};

hamburger.initialize();
/*-----Akkordeon-scripts-----*/
$('.list-product-nav .list-product-cat').click(function(e) {
  e.preventDefault();
  $('.list-product-nav .list-product-subnav').slideUp(), $(this).next().is(":visible") || $(this).next().slideDown(),
  e.stopPropagation();

  var span = $(this).find('.icoomon');
  span.toggleClass('icon-chevrons-down icon-chevrons-up');
});


$('.reviews-carousel').owlCarousel({
    margin: 40,
    nav: true,
    dots: true,
    autoplayTimeout: 10000,
    loop: true,
    smartSpeed: 1000,
    navText : ["<i class=\"icon-chevron-left\"></i> ", "<i class=\"icon-chevron-right\"></i>"],
    items: 1
})

AOS.init({
    easing: 'ease-out-back',
    duration: 1000
});
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
