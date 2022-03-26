const sreInsightArticles = [
  {
    src: "assets/home/img/SRE-Insight/SRE-Insight_1.png",
    caption:
      "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, voluptatem1",
  },
  {
    src: "assets/home/img/SRE-Insight/SRE-Insight_2.png",
    caption:
      "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, voluptatem2",
  },
  {
    src: "assets/home/img/SRE-Insight/SRE-Insight_3.png",
    caption:
      "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, voluptatem3",
  },
];

const renderSreInsightInner = () => {
  const container = document.createElement("div");  
  container.className = "carousel-inner shadow rounded-corners";
  container.setAttribute("id", "sre-insight-container");

  let isFirst = true;
  sreInsightArticles.forEach((element) => {
    const article = document.createElement("div");
    article.className = "carousel-item";
    if(isFirst){
      article.classList.add("active");
      isFirst = false;
    }
    article.innerHTML = `<img
    src="${element.src}"
    class=""
    alt="..."
    />`
    container.appendChild(article);
  });
  return container;
};

const renderSreInsight = () => {
  const parent = document.getElementById("sre-insight-carousel");
  parent.prepend(renderSreInsightInner());
}

export { renderSreInsight as default };