// script.js
document.addEventListener("scroll", function() {
    const header = document.getElementById("header");
    const topo = document.querySelector(".topo");

    if (window.scrollY > 200) {
        topo.classList.add("hidden");
        header.style.padding = "100px 200px";
    } else {
        topo.classList.remove("hidden");
        header.style.padding = "100px 100px";
    }
});

const handlePhone = (event) => {
    let input = event.target
    input.value = phoneMask(input.value)
  }
  
  const phoneMask = (value) => {
    if (!value) return ""
    value = value.replace(/\D/g,'')
    value = value.replace(/(\d{2})(\d)/,"($1) $2")
    value = value.replace(/(\d)(\d{4})$/,"$1-$2")
    return value
  }


let btnMenu = document.getElementById('btn-menu')
let menuMobile = document.getElementById('menu-mobile')
let overlay =document.getElementById('overlay-menu"')

btnMenu.addEventListener('click', ()=>{
    menuMobile.classList.add('abir-menu')
})

menuMobile.addEventListener('click', ()=>{
    menuMobile.classList.remove('abir-menu')
})

overlay.addEventListener('click', ()=>{
    menuMobile.classList.remove('abir-menu')
})