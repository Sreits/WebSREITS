const sreInsightArticles = [
  {
    src: "/img/home.png",
    caption:
      "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, voluptatem1",
  },
  {
    src: "/img/home.png",
    caption:
      "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, voluptatem1",
  },
  {
    src: "/img/home.png",
    caption:
      "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, voluptatem1",
  },
];

const renderSreInsight = () => {
  const container = document
    .createElement("div")
    .classList.add("carousel-inner");
  sreInsightArticles.forEach((element) => {
    const article = document.createElement("div");
    article.classList.add("carousel-item", "active", "d-lg-block");
    article.append(document.createElement("article").setAttribute("class", "card").setAttribute("style", "width=24ch;"));
    article.innerHTML = `
    <article class="card" style="width: 24ch;">
        <img class="card-img-top" src="/img/home.png" alt="" />
        <div class="card-body">
            <p class="card-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, voluptatem1
            </p>
        </div>
    </article>`;
    const body = document.createElement("div");
    const caption = document.createElement()
    //container.append(article);
  });
  return container;
};

function render() {
  const parent = document.getElementById("sre-insight-container");
  parent.innerHTML = renderSreInsight();
}

render();
