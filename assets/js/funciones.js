const arrows=document.querySelectorAll(".fa-chevron-right");
const menu_option=document.querySelectorAll(".menu__option");
const menu_options=document.querySelectorAll(".menu__options");

arrows.forEach((arrow, index)=>{
    arrow.addEventListener("click",()=>{
        arrows[index].classList.toggle('rotate_arrow');
        menu_options[index].classList.toggle('none');
       
    })
})

menu_option.forEach((option,index)=>{
    option.addEventListener("click",()=>{
        arrows[index].classList.toggle('rotate_arrow');
        menu_options[index].classList.toggle('none');
    })
})

