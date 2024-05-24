
var $j = jQuery.noConflict();

$j(document).ready(function() {
	"use strict";

	$j("button").click(function() {
    $j('html,body').animate({
        scrollTop: $j(".second").offset().top},
        'slow');
});



  window.fbAsyncInit = function() {
    FB.init({
      appId      : 1314158219495857,
      cookie     : true,
      xfbml      : true,
      version    : 1
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
});
