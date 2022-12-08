$(document).ready(function(){
  $("ul.ul-style li a").on("click", function(){
    $(this)
        .addClass("activate")
        .parent()
        .siblings()
        .find("a")
        .removeClass("activate");
  })
})
// $(document).ready(function(){
//   $("ul.navbar-nav li a").on("click", function(){
//     $(this)
//         .addClass("activate-nav")
//         .parent()
//         .siblings()
//         .find("a")
//         .removeClass("activate-nav");
//   })
// })

/* scroll down button and Fixed navbar *****/

  // Get the button
  let mybutton = document.getElementById("myBtn");
  
  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    $('html,body').animate({ scrollTop: 0 }, 'slow');
    document.documentElement.scrollTop = 0;
  }

  var mynavbar = document.getElementById("mynav");
  var mymenu = document.getElementById("mymenu");
  
  window.onscroll = function(){
    if(window.scrollY >= mymenu.offsetTop){
      mybutton.style.display = "block";
      mynavbar.classList.add("navbar-fixed");
    }
    else{
      mybutton.style.display = "none";
      mynavbar.classList.remove("navbar-fixed");
    }
  }




  
