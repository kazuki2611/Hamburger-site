// $(function() {
//     //(header)//c-button--global-menu
//     $(".p-hamburger_button").click(function() {
//        $(".hamburger_btn").addClass("is-open");
//        $("body").addClass("is-open");
//    })
//     $(".is-hamburger").click(function() {
//        $(".hamburger_btn").removeClass("is-open")
//        $("body").removeClass("is-open")
//     })
//  });
$(function() {
    //(header)//c-button--global-menu
    $(".p-hamburger_button").click(function() {
       $("body").addClass("is-open");
       $(".p-hamburger").addClass("is-open");
       $(".p-global-nav ").addClass("is-open");
   })
    $(".is-hamburger").click(function() {
       $("body").removeClass("is-open")
       $(".p-hamburger").removeClass("is-open")
       $(".p-global-nav").removeClass("is-open")
    })
    $(window).resize(function() {
      $("body,.p-global-nav,.p-hamburger").removeClass("is-open");
  });
 });

 
  
   
   
   
   
   
   
   
   
   
   
 
 
//  $(window).resize(function() {
//    $(".p-nav__list").css('display','');
// });