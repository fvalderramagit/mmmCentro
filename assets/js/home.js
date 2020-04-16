//----------------------------------------------------------------------------//
//--- Codigo para cambiar el color de la barra de navegacion al dar scrool ---//
 $(window).scroll(function() {
      if ($("#menu").offset().top > 56) {
          $("#menu").addClass("bg-cambio","nav-link");
          $(".dropdown-menu").addClass("bg-cambio");
          $(".nav-link").css("color", "black");
          $(".dropdown-menu a").css("color", "black");
      } else {
          $("#menu").removeClass("bg-cambio");
          $(".dropdown-menu").removeClass("bg-cambio");
          $(".nav-link").css("color", "black");
          $(".dropdown-menu a").css("color", "black");
      }
});


//----------------------------------------------------------------------------//
//------------------ Codigo para cargar los videos en un modal ---------------//
jQuery(document).ready(function($) {
		$('a[data-rel^=lightcase]').lightcase();
	});