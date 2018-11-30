//SCROLL SUAVE PARA OS LINKS INTERNOS
$('nav a').click(function(e){
      e.preventDefault();
      var id = $(this).attr('href'),
                  menuHeight = $('nav').innerHeight(),
                  targetOffset = $(id).offset().top;
      $('html, body').animate({
            scrollTop: targetOffset - menuHeight
      }, 900);
});




      // ESCURECER NAVBAR AO DESCER A PAGINA

      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      })
//TONGLE NAVBAR
$(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });
//EFEITO DO HAMBURGER MENU

      function myFunction(x) {
    x.classList.toggle("change");
}
