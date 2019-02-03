$(document).ready(
  function() {
    $('.menu-toggle').click(function() {
      $('nav').toggleClass('active')
    })

    $('ul li').click(function() {
      $(this).siblings().removeClass('active');
      $(this).toggleClass('active');
    })
  }
)

function toggleClass(el) {
  if (el.className == "fa fa-bars") {
    el.className = "fas fa-times";
  } else {
    el.className = "fa fa-bars";
  }
}
