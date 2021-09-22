var $ = jQuery;


$(document).ready(function(){

    var myCarousel = document.querySelector('#myCarousel');
    var carousel = new bootstrap.Carousel(myCarousel);

    $('#page').prepend("<div id='slider-container'></div>");
    $("#slider-container").load("wp-content/plugins/slider-plugin/template.php") ;
  });