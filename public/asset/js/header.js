
function showDropdown(element) 
{
    
    if(element.nextElementSibling.classList.contains("hide_dropdown"))
        element.nextElementSibling.classList.remove("hide_dropdown");
    else
        element.nextElementSibling.classList.add("hide_dropdown");
        
    console.log(element)

    if(document.getElementById('picture_dropdown_target') === element.nextElementSibling)
    {
        document.getElementById('hamburger_dropdown_target').classList.add("hide_dropdown")
    }
    else if(document.getElementById('hamburger_dropdown_target') === element.nextElementSibling)
    {
        document.getElementById('picture_dropdown_target').classList.add("hide_dropdown")
    }
}

