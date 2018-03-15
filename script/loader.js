$(function(){

  setTimeout(function(){
    $('body').addClass('loaded');
  }, 3000);

  var modal = $('.modal-container');
  var btn = $('.btn');

  btn.each(function(){
    $(this).on("click", function(){

        console.log('dsa');
        modal.css("display", "none");
    })
  });




});
//
//
//
//
// window.onclick = function(event) {
//     if (event.target == modal) {
//
//     }
// }
