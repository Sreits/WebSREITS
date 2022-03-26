import renderHeaderImg from "./header-img.js";
import renderSreInsight from "./Sre-insight.js";

document.addEventListener("scroll", ()=>{
    let nav = document.querySelector('.navbar');
    if(window.scrollY > nav.style.height) {
        nav.classList.add('scrolled');
    } else {
        nav.classList.remove('scrolled');
    }
})

renderHeaderImg();
renderSreInsight();