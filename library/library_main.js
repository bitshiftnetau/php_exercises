$(document).ready(function(){

  // jQuery methods go here...
  // console.log("test test test");

  /*
  if(currentFileName() == "index.php#"){
    $(document.body).addClass('test');
  }
  */

  switch(currentFileName()) {
    case "index.php": bodyBackGroundFadeIn('home');
      break;
    case "library.php": bodyBackGroundFadeIn('library');
      break;
    case "store_library.php": bodyBackGroundFadeIn('store_library');
      break;
    case "book.php": bodyBackGroundFadeIn('book');
      break;
    case "store_book.php": bodyBackGroundFadeIn('store_book');
      break;
  }
  
 /*
  $(".fade-out").click(function() {
    bodyBackGroundFadeOut();
  });
*/

});

/* End Main */


/* Functions*/

function currentFileName(){
    var href = document.location.href;
    return href.substr(href.lastIndexOf("/") + 1);
}

function bodyBackGroundFadeOut(){

  $(document.body).css({
    opacity: 1.0, 
    visibility: "visible"
  }).animate({opacity: 0.0},'300');
 
  return 0;
}

function bodyBackGroundFadeIn(class_name){


  $(document.body).addClass(class_name);

  /*$('#yourdiv').animate({opacity: 0}, 0).css("background-image", "url(image.jpeg)").animate({opacity: 1}, 2500);
*/

  $(document.body).css({
    opacity: 0.0, 
    visibility: "visible"
  }).animate({opacity: 1.0},'600');
 
/*  
 $(document.body).css({
    opacity: 0.0, 
    visibility: "visible"
  }).animate({opacity: 1.0},'600');
 */

  return 0;
}
