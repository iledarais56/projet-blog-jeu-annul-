var slide = new Array("app/public/Front/images/jeux-slide1.jpg", "app/public/Front/images/jeux-slide2.jpg", "app/public/Front/images/jeux-slide3.jpg", "app/public/Front/images/jeux-slide4.jpg");
var numero = 0;

function ChangeSlide(sens) {
    numero = numero + sens;
    if (numero < 0)
        numero = slide.length - 1;
    if (numero > slide.length - 1)
        numero = 0;
    document.getElementById("slide").src = slide[numero];
}
// autoplay
setInterval("ChangeSlide(1)", 5000);