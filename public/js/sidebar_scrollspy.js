/* activate sidebar */
/*$('#sidebar').affix({
  offset: {
    top: 235
  }
});
*/
/* activate scrollspy menu */
/*var $body   = $(document.body);
var navHeight = $('.navbar').outerHeight(true) + 1000;

$body.scrollspy({
	target: '#leftCol',
	offset: navHeight
});
*/
/* smooth scrolling sections */
/*$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top 
        }, 1000);
        return false;
      }
    }
});*/


$('#myNav').affix({
    offset: {
        top: $('#myNav').offset().top
    }
});


$('body').scrollspy({ target: '#mySidebar' });

$('#mySidebar ul.nav li a').bind('click', function(e) {
  e.preventDefault();
  $('html,body').animate({scrollTop: $(this.hash).offset().top});
});


