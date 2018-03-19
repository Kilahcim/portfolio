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

  $('.popup').mouseenter('click', function() {

  $('#myPopup').addClass("show");
  });
  $('.popup').mouseleave('click', function() {

  $('#myPopup').removeClass("show");
  });
  // console.log(popup);



});
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
