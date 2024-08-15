<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Shetty Tech</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="responsive.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="Favicon/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="Favicon/favicon-16x16.png"
    />
    <link rel="manifest" href="Favicon/site.webmanifest" />
    <link
      rel="mask-icon"
      href="Favicon/safari-pinned-tab.svg"
      color="#5bbad5"
    />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="theme-color" content="#ffffff" />
    <script src="   https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <style>
      @import url("https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&display=swap");

      @import url("https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap");
      @import url("https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap");

      * {
        font-family: "Mukta", sans-serif !important;
        /* font-family: "Roboto", sans-serif !important; */
      }

      body {
        box-sizing: border-box;
        background-image: linear-gradient(to right, #169aff, #a5feef);
        color: white !important;
        font-family: "Mukta", sans-serif !important;
      }

      .darkModer {
        background: black !important;
      }
      .darkModer2 {
        background: white !important;
        color: black !important;
        font-weight: 600;
      }

      .moders {
        margin-left: 50% !important;
      }

      .navlinks1 {
        font-size: 22px;
        font-weight: 500;
        color: white !important;
      }
      .navbar ul li {
        letter-spacing: 2px;
        padding: 0px 10px !important;
      }

      .navbar ul li a {
        color: white !important;
        padding: 0px 30px !important;
      }

      .navbar ul li a:hover {
        color: yellow !important;
      }
      .navbar-brand img {
        width: 50px;
      }
      .last-nav {
        justify-content: end;
      }

      .main-div {
        height: 100vh;
        color: white;
      }

      .main-div .main-container {
        height: 100%;
      }

      .main-row {
        height: 100%;
      }
      .main-div .main-container .right-section {
        height: 100%;
      }

      .left-section {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        height: 100%;
        /* padding: 0px 100px */
        padding: 0px 50px;
      }

      .left-top {
        /* margin-top: -500px; */
        padding-bottom: 50px;
      }

      .left-top h1 {
        font-size: 70px;
        font-weight: 700;

        letter-spacing: 3px;
        /* background-color: red; */
        margin: 0;
        padding: 0;
      }

      .left-middle {
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .border-topss {
        border-top: 5px solid white !important;
        width: 70px;
        margin-right: 15px !important;
        margin-top: -5%;
        margin-left: 15%;
        border-radius: 15px;
      }

      .left-middle p {
        /* padding-top :100px; */
        width: 70%;
        text-align: start;
        justify-content: center;
        align-items: center;
        letter-spacing: 3px;
      }

      .left-btn a {
        letter-spacing: 2px;
        font-size: 20px;

        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2),
          0 6px 20px 0 rgba(0, 0, 0, 0.19);
        margin-left: 20%;
      }
      .left-btn button:hover {
        color: yellow !important;
      }

      .img-div {
        margin-top: -5%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .img-sec img {
        width: 80%;
        height: 60%;
      }

      footer {
        letter-spacing: 3px;
        text-align: center;
        /* font-family: "Mukta", sans-serif  !important; */
        font-family: monospace !important;
      }

      /* Contact Us page css */

      .top-section h1 {
        letter-spacing: 3px;
        font-size: 50px;
        word-spacing: 5px;
        font-weight: 800;
      }

      .top-section p {
        letter-spacing: 1px;
        font-size: 17px;
        font-weight: lighter;
      }

      .mid-section {
        padding: 0px 170px !important;
      }

      .mid-section-left {
        padding-right: 70px !important;
      }

      .mid-section h5 {
        letter-spacing: 2px;
        font-weight: 700;
      }

      .mail-p {
        line-height: 10px;
      }

      .mid-section p {
        letter-spacing: 1px;
        font-size: 15px;
        font-weight: 300;
      }

      .mid-section label {
        letter-spacing: 3px;
      }

      .btn-form button {
        letter-spacing: 1px;

        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2),
          0 6px 20px 0 rgba(0, 0, 0, 0.19);
      }

      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }

      /* Firefox */
      /* input[type=number] {
  -moz-appearance: textfield;
} */

      /* About us page css */

      .main-about {
        padding: 50px 100px 0px 50px;
      }

      .left-about {
        padding-right: 140px !important;
      }

      .left-about h1 {
        letter-spacing: 5px;
        font-weight: 800;
        font-family: "Roboto", sans-serif !important;
      }
      .left-about h3 {
        letter-spacing: 5px;
        font-weight: 700;
        font-family: "Roboto", sans-serif !important;
      }

      .left-about p {
        letter-spacing: 2px;
        font-size: 15px;
        font-weight: 300;
        /* font-family: "Roboto", sans-serif !important; */
        font-family: "Montserrat", sans-serif !important;
      }

      .img-div-about {
        /* margin-top: 5px; */
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .img-div-about img {
        width: 100%;
        height: 100%;
      }

      /* Services page css */

      .top-services h1 {
        letter-spacing: 3px;
        font-weight: 800;
        font-size: 45px;
        word-spacing: 7px;
      }

      .top-services p {
        letter-spacing: 2px;
        font-size: 15px;
        font-weight: 300;
      }

      .img-div-services {
        height: 60px;
        width: 60px;
        border-radius: 50%;
        background-color: black;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .img-div-services i {
        color: black;
        font-size: 35px;
      }

      .services-list {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        /* border: 1px solid black; */
        border-radius: 20px;
        width: 80%;
        padding: 20px 0px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      }

      .services-list p {
        max-width: 70%;
        font-size: 13px;
        font-weight: 300;
        letter-spacing: 2px;
        line-height: 25px;
      }
    </style>
  </head>
  <body class="lightModer">
    <header>
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand ps-3" href="index.php">
            <img src="ImagesHome/logo1.png" alt="" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav px-5 navlinks1 py-2">
              <li class="nav-item px-5">
                <a class="nav-link active" aria-current="page" href="index.php"
                  >Home</a
                >
              </li>
              <li class="nav-item px-5">
                <a class="nav-link" href="services.php">Service</a>
              </li>
              <li class="nav-item px-5">
                <a class="nav-link" href="about.php">About</a>
              </li>

              <li class="nav-item px-5">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
            </ul>
            <div class="moders">
              <button class="btn btn-dark darkmoding fw-bold rounded-5">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-moon"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278M4.858 1.311A7.27 7.27 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.32 7.32 0 0 0 5.205-2.162q-.506.063-1.029.063c-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286"
                  />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <section>
      <div class="container-fluid main-div">
        <div class="row main-row">
          <div class="col-lg-6">
            <div class="left-section">
              <div class="left-top">
                <h1><span class="auto-typers"></span></h1>
              </div>
              <div class="left-middle pb-3">
                <div class="border-topss"></div>
                <p>
                  Web designing is the process of planning, conceptualizing,
                  implementing the plan for designing a website in a way.
                </p>
              </div>

              <div class="left-btn">
                <a
                  class="btn btn-info rounded-pill btn-lg px-5 fw-semibold text-light"
                  href="Resume/portfolio.php"
                  >Portfolio</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-6 right-section">
            <div class="img-sec img-div">
              <img src="ImagesHome/pngegg.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <p>Made with ❤️ by Sanket</p>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

    <script>
      let typed = new Typed(".auto-typers", {
        strings: [
          " Simple Web Design",
          "Simple Website",
          " Simple Stylish Design",
        ],
        typeSpeed: 150,
        backSpeed: 150,
        loop: true,
      });
    </script>

    <script>
      $(document).ready(function () {
        $(".darkmoding").click(function () {
          $("body").toggleClass("darkModer");
          $(".darkmoding").toggleClass("darkModer2");
        });
      });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  </body>
</html>
