/*Back to Top*/

function scrollToTop(){
var timerHandle = setInterval(function() {
  if (document.body.scrollTop != 0 || document.documentElement.scrollTop != 0)
  window.scrollBy(0,-50); else clearInterval(timerHandle); },15);
}


/*Fade out on scroll*/
// $(document).ready(function() {
// $(window).scroll(function() {
//   if ($(window).scrollTop() > 200) {
//     $("#background").stop().fadeOut();
//   } else {
//     $("#background").stop().fadeIn();
//   }
// });
// });
// /*Burger Icon*/
