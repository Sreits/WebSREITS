document.addEventListener("scroll", ()=>{
    let nav = document.querySelector('.navbar');
    if(window.scrollY > nav.style.height) {
        nav.classList.add('scrolled');
    } else {
        nav.classList.remove('scrolled');
    }
})

// $(function () {
//     $(document).scroll(function () {
//       let $nav = $('.navbar')
//       $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height())
//     })
//   })