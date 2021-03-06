<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home | SRE ITS SC</title>
    <link
      rel="icon"
      type="image/x-icon"
      href="assets/home/img/SRE_ITS_Logo.png"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- External CSS -->
    <link rel="stylesheet" href="assets/home/style/home.css" />
    <link rel="stylesheet" href="kepaladankaki/navbar.css" />
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script>
      $(function addNavbar () {
        $('#header').load('kepaladankaki/header.html')
      })
      $(function () {
        $('#footer').load('kepaladankaki/footer.html');
      })
    </script>
  </head>
  <body>
    <script src="assets/home/script/home.js" type="module"></script>
    <!-- navbar -->
    <div id="header"></div>
    <!-- navbar end -->
    <!-- Jumbotron start -->
    <section
      class="d-flex flex-column flex-lg-row-reverse align-items-center min-vh-100"
      id="hero"
    >
      <!--Image caroussel-->
      <div
        id="header-img-carousel"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators" id="header-carousel-indicators">
          <button
            type="button"
            data-bs-target="#header-img-carousel"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#header-img-carousel"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#header-img-carousel"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <!-- carousel inner made with header-img.js -->
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#header-img-carousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#header-img-carousel"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- End of header img -->

      <div class="p-5">
        <h1 class="">
          Society of Renewable Energy
          <u>Institut Teknologi Sepuluh Nopember</u>
        </h1>
        <p>Empowering <b>#RenewableEnergy</b> for Indonesia brighter future</p>
        <div>
          More info
          <a href="index.html">
            <button type="button" class="btn btn-outline-dark more-button p-1">
              <img
                src="assets/home/img/arrow.svg"
                alt=""
                style="width: 100%;"
              />
            </button>
          </a>
        </div>
      </div>
    </section>
    <!-- Jumbotron end -->

    <!-- Sponsor Vision Mission section start -->
    <section
      id="sponsor-vision-mission"
      class="container justify-content-evenly justify-items-center w-75 p-5"
    >
      <!-- Sponsor -->
      <section class="sponsor d-flex flex-column justify-content-center">
        <h2 class="card-title pt-5 pb-2">Our Sponsor</h2>
        <div class="card border-0">
          <div class="card-body">
            <div class="d-flex justify-content-around">
              <img
                class="w-25 h-max-160px"
                src="assets/home/img/Sponsor/PT-Pembangunan-Perumahan.jpg"
                alt=""
              />
              <img
                class="w-25 h-max-160px"
                src="assets/home/img/Sponsor/Quarto.png"
                alt=""
              />
            </div>
          </div>
        </div>
      </section>
      <!-- Vision -->
      <section class="vision d-flex flex-column justify-content-center">
        <h2 class="card-title pt-5 pb-2">Our Vision</h2>
        <div class="card shadow border-0">
          <div
            class="card-body ps-5 pe-5 our-text-container d-flex flex-column justify-content-center"
          >
            <p class="card-text text-center">
              Enhance student???s <b>interest and insight</b> into
              <b>Renewable Energy</b> to be able to apply it.
            </p>
          </div>
        </div>
      </section>
      <!-- Mission -->
      <section class="mission d-flex flex-column justify-content-center">
        <h2 class="card-title pt-5 pb-2">Our Mission</h2>
        <div class="card shadow border-0">
          <div
            class="card-body ps-5 pe-5 our-text-container d-flex flex-column justify-content-center"
          >
            <p class="card-text text-center">
              Disseminate, accommodate, initiate, and become solution in
              <b>Renewable Energy</b>.
            </p>
          </div>
        </div>
      </section>
    </section>
    <!---->
    <section
      class="d-flex flex-column align-items-center flex-lg-row p-5"
      id="re-cast"
    >
      <section>
        <h2>Re-Cast</h2>
        <p class="text-center text-md-start">
          RE-Cast Podcast with several episodes that aims to educate and
          entertain all students in Indonesia. The themes raised in RE-Cast
          start from those related to ITS SRE or campus life
        </p>
      </section>
      <section class="" id="re-cast-articles">
        <!-- Embla carousel -->
        <div class="embla">
          <div class="embla__viewport">
            <div class="embla__container">
              <div class="embla__slide">
                <article class="card border-0" style="width: 24ch;">
                  <img
                    class="card-img-top"
                    src="assets/home/img/Re-Cast/re-cast-article.png"
                    alt=""
                  />
                  <div class="card-body">
                    <p class="card-text">
                      Re-Cast 1 :  Mahasiswa Harus Tau SRE!
                    </p>
                  </div>
                </article>
              </div>
              <div class="embla__slide">
                <article class="card border-0" style="width: 24ch;">
                  <img
                    class="card-img-top"
                    src="assets/home/img/Re-Cast/re-cast-article.png"
                    alt=""
                  />
                  <div class="card-body">
                    <p class="card-text">
                      Jangan ngaku siap kuliah offline kalau belum denger ini!! - Re-Cast: 2 ft. mas Gandhi Surya
                    </p>
                  </div>
                </article>
              </div>
              <div class="embla__slide">
                <article class="card border-0" style="width: 24ch;">
                  <img
                    class="card-img-top"
                    src="assets/home/img/Re-Cast/re-cast-article.png"
                    alt=""
                  />
                  <div class="card-body">
                    <p class="card-text">
                      Re-Cast 3 : Mau Mati Gara-Gara Karantina Di Kostan!
                    </p>
                  </div>
                </article>
              </div>
            </div>
          </div>
          <button class="embla__prev visually-hidden"><</button>
          <button class="embla__next visually-hidden">></button>
        </div>
        <!-- End of Embla Carousel -->
      </section>
    </section>

    <!-- Sponsor Vision Mission section end -->

    <!-- Our YouTube-->
    <section id="youtube" class="p-5 d-flex flex-column align-items-center">
      <h2>Our YouTube</h2>
      <section
        class="d-flex flex-column align-items-center flex-md-row mt-5 justify-content-md-center mr"
        id="video-articles"
      >
        <article class="card border-0 shadow mb-5 youtube-article me-md-5">
          <img
            class="card-img-top"
            src="assets/home/img/YouTube/YouTube_SRE-ITS-Goes-to-Jakarta.png"
            alt=""
          />
          <div class="card-body">
            <p class="card-text">
              SRE ITS Goes to Jakarta
            </p>
          </div>
        </article>
        <article class="card border-0 shadow mb-5 youtube-article ms-lg-5">
          <img
            class="card-img-top"
            src="assets/home/img/YouTube/YouTube_Carreer-Talk-1.png"
            alt=""
          />
          <div class="card-body">
            <p class="card-text">
              Career Talk 1
            </p>
          </div>
        </article>
      </section>
      <div>
        See more
        <a
          target="_blank"
          class="linkOut"
          href="https://www.youtube.com/channel/UCLypr7EhlB4YlPg5xSZ92nA"
        >
          <button type="button" class="btn btn-outline-dark more-button p-1">
            <img src="assets/home/img/arrow.svg" alt="" style="width: 100%;" />
          </button>
        </a>
      </div>
    </section>

    <!-- SRE Insight section start -->
    <section id="insight" class="p-5  d-flex flex-column align-items-center">
      <h2>SRE Insight</h2>
      <p class="pt-3 pb-3 ps-md-5 pe-md-5 text-center">
        Educational media initiated by the Competency Development Department of
        SRE ITS by publishing short readings about interesting information about
        climate and energy.
      </p>

      <section
        class="d-flex flex-column align-items-center bg-transparent pt-3 pb-3"
        id="sre-insight-articles"
      >
        <!-- Start of carousel -->
        <div
          id="sre-insight-carousel"
          class="carousel slide"
          data-bs-ride="carousel"
        >
          <!-- carousel inner made with Sre-insight.js -->
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#sre-insight-carousel"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#sre-insight-carousel"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <!-- End of carousel -->
      </section>
      <div class="more pt-3">
        <a href="#">See more</a>
        <button type="button" class="btn btn-outline-dark more-button p-1">
          <img src="assets/home/img/arrow.svg" alt="" style="width: 100%;" />
        </button>
      </div>
    </section>
    <!-- SRE Insight section end -->
    <!-- scroll top button -->
    <a href="#" class="scrollTop d-flex justify-content-end me-4 mb-4">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="32"
        height="32"
        fill="currentColor"
        class="bi bi-arrow-up-circle text-decoration-none text-dark"
        viewBox="0 0 16 16"
      >
        <path
          fill-rule="evenodd"
          d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"
        />
      </svg>
    </a>
    <!-- end scroll top button -->
    <!-- footer -->
    <div id="footer"></div>
    <!-- end footer -->
    <script src="kepaladankaki/navbar.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script src="assets/home/script/embla-carousel.umd.js"></script>
    <script src="assets/home/script/embla-carousel-autoplay.umd.js"></script>
    <script src="assets/home/script/carousel.js"></script>
  </body>
</html>
