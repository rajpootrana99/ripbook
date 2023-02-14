

// SLIDER CODE ONLY HERE 
var slides = document.getElementsByClassName("h_slide_buttons");
function showSlider(element, section_name)
{
    for (let i = 0; i < slides.length; i++) 
    {
        slides[i].classList.remove("h_slide_active");
        let t = "section_"+(i+3);
        console.log(t)
        document.getElementsByClassName(t)[0].classList.add("d-none")
    }
    element.classList.add("h_slide_active");
    document.getElementsByClassName(section_name)[0].classList.remove("d-none");

}