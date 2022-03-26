const imgList = [
    {
        src: 'assets/home/img/home.png',
        alt: ''
    },
    {
        src: 'assets/home/img/home.png',
        alt: ''
    },
    {
        src: 'assets/home/img/home.png',
        alt: ''
    }
]

const header_carousel_inner = () => {
    const carousel_inner = document.createElement("div");
    carousel_inner.className = "carousel-inner";
    carousel_inner.setAttribute("id", "header-carousel-inner");
    let first = true;
    for (const imgItem of imgList) {
        const img_container = document.createElement("div");
        img_container.className = "carousel-item bg-gradient-green-orange";
        img_container.setAttribute("id", "header-carousel-item");
        if(first){
            img_container.classList.add("active");
            first = false;
        }
        const img = document.createElement("img");
        img.className = "d-block blend-soft-light header-carousel-img";
        img.setAttribute("src", imgItem.src);
        img.setAttribute("alt", imgItem.alt);
        img_container.appendChild(img);
        carousel_inner.appendChild(img_container);
    }
    return carousel_inner;
}

const renderHeaderImg = () => {
    const sibling = document.getElementById("header-carousel-indicators");
    sibling.insertAdjacentElement('afterend', header_carousel_inner());
}



export { renderHeaderImg as default };