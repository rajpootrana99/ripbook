

window.onresize = resizer;
window.onload = resizer; 

function resizer() {
    document.getElementsByClassName("hero_gradient")[0].style.height = (document.getElementsByClassName("hero_image")[0].height) +"px";
}