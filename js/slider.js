
//petshop



const $slider = document.getElementById("slider");
let sliderSection = document.querySelectorAll(".slider_img");
let sliderSectionLast = sliderSection[sliderSection.length -1];

const $btnRight = document.getElementById("btn-right");
const $btnLeft = document.getElementById("btn-left");

function next() {
    let $sliderSectionFirst = document.querySelectorAll(".slider_img")[0];

    $slider.style.marginLeft = "-200%";
    $slider.style.transition = "margin-left 1s";
    setTimeout(() => {
        $slider.style.transition = "none";
        $slider.insertAdjacentElement("beforeend", $sliderSectionFirst)
        $slider.style.marginLeft = "-100%"
    }, 1000);
}

function prev() {
    let sliderSection = document.querySelectorAll(".slider_img");
    let sliderSectionLast = sliderSection[sliderSection.length -1];
    $slider.style.marginLeft = "0";
    $slider.style.transition = "margin-left 1s";
    setTimeout(() => {
        $slider.style.transition = "none";
        $slider.insertAdjacentElement("afterbegin", sliderSectionLast)
        $slider.style.marginLeft = "-100%"
    }, 1000);

}

$btnRight.addEventListener("click", function () {
    next()
})

$btnLeft.addEventListener("click", function () {
    prev()
})

setInterval(() => {
    next()
}, 4000);



function validar_formulario(){

var nombre=document.getElementById('nombre');
var telefono=document.getElementById('telefono');
var correo=document.getElementById('correo');
var mensaje=document.getElementById('mensaje');

    if (nombre.value===null || nombre.value==='') {
        alert('Ingrese su nombre')
        return;
    }

    if (telefono.value===null || telefono.value==='') {
        alert('Ingrese su telefono')
        return;
    }

    if (correo.value===null || correo.value==='') {
        alert('Ingrese su correo')
        return;
    }

    if (mensaje.value===null || mensaje.value==='') {
        alert('Ingrese su mensaje')
        return;
    }


}

