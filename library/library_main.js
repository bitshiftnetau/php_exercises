$(document).ready(function(){

  // jQuery methods go here...
  // console.log("test test test");

  /*
  if(currentFileName() == "index.php#"){
    $(document.body).addClass('test');
  }
  */

  /*
  $(".nav-item").click(function(){
    var menuItem = $(".nav-item");
    var downMenuShow = $("div.dropdown-menu.show");
    var downMenuHidden = $("div.dropdown-menu");

    downMenuHidden.animate({visibility: "visible"}, "slow");
    downMenuShow.animate({height: '100%', opacity: '1.0'}, "slow");
    menuItem.animate({height: '100%', opacity: '1.0'}, "slow");

  }); 
  */

/*
  $("li#books-dropdown.nav-item.dropdown.mr-auto.show").click(function(){

    console.log("testing 1 2 3");
  });
*/

 
  $("a#navbarDropdownMenuLink1.nav-link.dropdown-toggle").click(function(){

    var menuItem = $(".dropdown-menu");

    var dropMenu = $("a#navbarDropdownMenuLink1.nav-link.dropdown-toggle");
    
    if(dropMenu[0].attributes[6].nodeValue === "true"){
      menuItem.animate({opacity: '0.0'}, "slow");
    } else if(dropMenu[0].attributes[6].nodeValue === "false"){
      menuItem.animate({opacity: '1.0'}, "slow");
    }
  });

  $("a#navbarDropdownMenuLink2.nav-link.dropdown-toggle").click(function(){

    var menuItem = $(".dropdown-menu");

    var dropMenu = $("a#navbarDropdownMenuLink2.nav-link.dropdown-toggle");
    
    if(dropMenu[0].attributes[6].nodeValue === "true"){
      menuItem.animate({opacity: '0.0'}, "slow");
    } else if(dropMenu[0].attributes[6].nodeValue === "false"){
      menuItem.animate({opacity: '1.0'}, "slow");
    }
  });



 
//  $(".dropdown-menu").click(function(){ 
 //   var menuItem = $("#books-dropdown");
    
    //menuItem.css({opacity: '0.0'});

    /* menuItem.animate({opacity: '1.0'}, "slow"); */
    
    /*
    var dropMenu = document.querySelectorAll("a#navbarDropdownMenuLink1.nav-link.dropdown-toggle");

    if(dropMenu[0].attributes[6].nodeValue === "true"){
      menuItem.animate({opacity: '1.0'}, "slow");
    } else if(dropMenu[0].attributes[6].nodeValue === "false"){
      menuItem.animate({opacity: '0.0'}, "slow");
    }
    */



    /*
    setTimeout(function(){
    
      var dropMenu = document.querySelectorAll("a#navbarDropdownMenuLink1.nav-link.dropdown-toggle")[0].attributes[6].nodeValue;

        if(dropMenu === "true"){
          menuItem.animate({opacity: '1.0'}, "quick");
        } else if(dropMenu === "false"){
          menuItem.animate({opacity: '0.0'}, "quick");
          menuItem.css({opacity: '0.0'});
        }
    }, 50); 
   */
 
    /*setTimeout(function(){

    if($("div.dropdown-menu.show").length){
       menuItem.animate({opacity: '1.0'}, "quick");
    } else {
       menuItem.animate({opacity: '0.0'}, "quick");
       menuItem.css({opacity: '0.0'});
    }

 }, 50); 
  */
/*
  var dropMenu = document.querySelectorAll("a#navbarDropdownMenuLink1.nav-link.dropdown-toggle")[0].attributes[6].nodeValue;
  
    if(dropMenu === "false"){
      console.log("testing testing testing 1 2 3");
     //menuItem.css({opacity: '0.0'});
    }
  */
 
  
//});



  
  /*
$('.collapse').on('shown.bs.collapse', function() {
   alert('shown'); 
 });

 $('.collapse').on('hidden.bs.collapse', function() {
   alert('hidden'); 
 });
*/

  /*
  $("button").click(function(){
    var div = $("div");
    div.animate({height: '300px', opacity: '0.4'}, "slow");
  });
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
    return window.location.pathname.split("/").pop();
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
  $(document.body).animate({opacity: 1.0},'600');

}
