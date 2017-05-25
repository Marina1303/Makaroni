// JavaScript Document
// Скролл 
$(function () {
    $(window).scroll(function () {
if ($(this).scrollTop() > 240) {
          $('.move_top').show();
              $('.move_top').fadeIn().css({'opacity':'0.5'});
} else {
        $('.move_top').hide();
             $('.move_top').fadeOut();
     }
});
$('.move_top').click(function () {
							
        $('body,html').animate({
             scrollTop: 0
         }, 800);
            return false;
        });
    });// запрет действий по умолчанию
 $(document).ready(function(){
$('.url-nav').click(function(event){
        event.preventDefault();                   
          });
     });
$('#main').show();

$('.url-nav').on('click',function () {
var id = $(this).attr('id');

if(id == 'main-str') {
$('.box-contener').hide();
$('#main').fadeIn();
$('.conteiner-news').fadeIn();
} else if (id == 'contact-str') {
$('.box-contener').hide();
$('#contact').fadeIn();	
$('.conteiner-news').hide();
	
} else if (id == 'compani-str') {
$('.box-contener').hide();
$('#company').fadeIn();
$('.conteiner-news').fadeIn();
	
}
								   
	});

