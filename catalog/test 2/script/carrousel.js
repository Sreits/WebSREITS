var myCarousel = document.querySelector('#carouselExampleControls')
var carousel = new bootstrap.Carousel(myCarousel, {
  interval: false,
  wrap: true
})

var myCarousel1 = document.querySelector('#scarouselExampleControlss')
var carousel1 = new bootstrap.Carousel(myCarousel1, {
  interval: 100,
  wrap: true
})



var slideIndex = [1,1,1,1];
/* Class the members of each slideshow group with different CSS classes */
var slideId = ["mySlides-1", "mySlides-2","mySlides-3","mySlides-4"]
showSlides(1, 0);
showSlides(1, 1);
showSlides(1, 2);
showSlides(1, 3);



function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex[no]-1].style.display = "block";
}