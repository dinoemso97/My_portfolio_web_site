$(function(){


          $(window).scroll(function(){

            var scroll = $(window).scrollTop();

            if(scroll > 80) {

              $('#navbar').removeClass("header-cont1").addClass("header-cont2");
			  

            }
            else {

             $('#navbar').removeClass("header-cont2").addClass("header-cont1");
             
            }


          });
		  
		  
		


});
/*			  
  var getHeaderHeight = $(".header-no-session").outerHeight();
  
  var shadowAmount = 30; 
  
  var borderAmount = 2; 
  
  var lastScrollPosition = 0; 
  
  $(".header-no-session").css('top','-' + getHeaderHeight + 'px');
  
  $(window).scroll(function() {
	  
	  var currentScrollPosition = $(window).scrollTop();
	 
	 if($(window).scrollTop() > 2 * (getHeaderHeight + shadowAmount + borderAmount)) {
		  
		  
		  $('body').addClass('activeScroll').css('padding-top', getHeaderHeight);
		  $('.header-no-session').css('top', 0);
		  
		  if(currentScrollPosition < lastScrollPosition) {
			  
			  $('.header-no-session').css('top','-' + getHeaderHeight + 'px');
			  
		  }
		  lastScrollPosition = currentScrollPosition; 
		  
	  }
	  else {
		  $('body').removeClass('activeScroll').css('padding-top', 0);
	  }
	  
  });
			  
*/	  
			  
			  
		 
/*
  var getHeaderHeight = $(".header-no-session").outerHeight();
  
  var lastScrollPosition = 0; 
  
  $(".header-no-session").css('top','-' + getHeaderHeight + 'px');
  
  $(window).scroll(function() {
	  
	  var currentScrollPosition = $(window).scrollTop();
	 
	 if($(window).scrollTop() > getHeaderHeight) {
		  
		  
		  $('body').addClass('activeScroll').css('padding-top', getHeaderHeight);
		  $('.header-no-session').css('top', 0);
		  
		  if(currentScrollPosition < lastScrollPosition) {
			  
			  $('.header-no-session').css('top','-' + getHeaderHeight + 'px');
			  
		  }
		  lastScrollPosition = currentScrollPosition; 
		  
	  }
	  else {
		  $('body').removeClass('activeScroll').css('padding-top', 0);
	  }
	  
  });
*/



$(function(){


          $(window).scroll(function(){

            var scroll = $(window).scrollTop();

            if(scroll > 100) {

              $('#navbar1').removeClass("responsive-header").addClass("responsive-header1");

            }
            else {

             $('#navbar1').removeClass("responsive-header1").addClass("responsive-header");

            }


          });
		  
		  
		


}); 
