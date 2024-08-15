<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="apple-touch-icon" sizes="180x180" href="Favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="Favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="Favicon/favicon-16x16.png">
<link rel="manifest" href="Favicon/site.webmanifest">
<link rel="mask-icon" href="Favicon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
<script src="   https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&display=swap');

@import url('https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

*{
    font-family: "Mukta", sans-serif  !important;
   /* font-family: "Roboto", sans-serif !important; */


}

 body{
    box-sizing: border-box;
    background-image: linear-gradient(to right, #169aff , #a5feef);
    color: white !important;
    font-family: "Mukta", sans-serif  !important;
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

 .navlinks1{
    font-size: 22px;
    font-weight: 500;
    color: white !important;
 }
 .navbar ul li{
   letter-spacing: 2px;
   padding: 0px 10px !important;
 }

 

 .navbar ul li a{
    color: white !important;
    padding: 0px 30px !important;
 }
/* 
 .navbar ul li a:hover{
   color: red;
   background-color: ;
   
 } */
 .navbar-brand img{
    width: 50px;
 }
 .last-nav{
    justify-content: end;
 }

 .main-div{
    height: 100vh;
    color: white;
 }

 .main-div .main-container{
    height: 100%;
 }


 .main-row{
    height: 100%;


 }
 .main-div .main-container .right-section{
    height: 100%;

 }

 .left-section{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    height: 100%;
padding: 0px 100px
 }

 .left-top h1{
    font-size: 50px;
    font-weight: 700;
    margin-bottom: -200px;
    margin-top: -50%;
 }

 .left-middle{
    display: flex;
    justify-content: center;
    align-items: center;
 }
 .border-topss{
    border-top: 5px solid white !important;
width: 70px;
margin-right: 15px !important;
margin-top: -10%;
margin-left: 15%;
border-radius: 15px;
 }

 .left-middle p{
    width: 70%;
    text-align: start;
    justify-content: center;
    align-items: center;
    letter-spacing: 1px;
 }



 .left-btn button{
    letter-spacing: 2px;
    font-size: 20px;
   
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    margin-left: 20%;
 }

 .img-div{
    margin-top: -5%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
 }

 .img-sec img{
width: 80%;
height: 60%;

 }

 footer{
   letter-spacing: 3px;
    text-align: center;
    /* font-family: "Mukta", sans-serif  !important; */
    font-family: monospace !important;
  
 }



 /* Contact Us page css */



 .top-section h1{
   letter-spacing: 3px;
   font-size: 50px;
   word-spacing: 5px;
   font-weight: 800;
 }

 .top-section p{
   letter-spacing: 1px;
   font-size: 17px;
   font-weight: lighter;
 }



 .mid-section{
   padding: 0px 170px !important;
 }

 .mid-section-left{
   padding-right: 70px !important;
 }

 .mid-section h5{
   letter-spacing: 2px;
   font-weight: 700;
 }
 
 .mail-p{
   line-height: 10px;
 }

 .mid-section p{
   letter-spacing: 1px;
   font-size: 15px;
   font-weight: 300;
 }

 .mid-section label{
   letter-spacing: 3px;

 }

 
 .btn-form button{
   letter-spacing: 1px;

   box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);

 }

 input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}


/* About us page css */


.main-about{
   padding: 50px 100px 0px 50px;
}

.left-about{
   padding-right: 140px !important;
}

.left-about h1{
   letter-spacing: 5px;
   font-weight: 800;
   font-family: "Roboto", sans-serif !important;

 }
.left-about h3{
   letter-spacing: 5px;
   font-weight: 700;
   font-family: "Roboto", sans-serif !important;

 }

 .left-about p{
   letter-spacing: 2px;
   font-size: 15px;
   font-weight: 300;
   /* font-family: "Roboto", sans-serif !important; */
   font-family: "Montserrat", sans-serif !important;
 }


.img-div-about{
   /* margin-top: 5px; */
   height: 100%;
   display: flex;
   align-items: center;
   justify-content: center;
}

.img-div-about img{
   width: 100%;
   height: 100%;
}


/* Services page css */


.top-services h1{
   letter-spacing: 3px;
   font-weight: 800;
   font-size: 45px ;
   word-spacing: 7px;
}

.top-services p{
   letter-spacing: 2px;
   font-size: 15px;
   font-weight: 300;
}

.img-div-services{
   height: 60px;
   width: 60px;
   border-radius: 50%;
   background-color: black;
   display: flex;
   justify-content: center;
   align-items: center;
}

.img-div-services i{
   color: black;
   font-size: 35px;
}



.services-list{
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

.services-list p{
   max-width: 70%;
   font-size: 13px;
   font-weight: 300;
   letter-spacing: 2px;
line-height: 25px;
}
</style>
  </head>
  <body >
  <header>
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid ">
              <a class="navbar-brand ps-3" href="index.php">
                <img src="ImagesHome/logo1.png" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav px-5 navlinks1 py-2 ">
                  <li class="nav-item px-5 ">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
                 
                  <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          -->
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
            
          </nav>
    </header>

    <section class="container-fluid">

        <div class="row main-about">
            <div class="col-lg-6 left-about">
                <div class="left-section2">
                    <h1 class="pb-2">ABOUT US</h1>
                    <p class="pb-4">Welcome to Shetty Tech – where innovation meets excellence!</p>
                    <h3 class="pb-2">OUR STORY</h3>
                    <p class="pb-4">At Shetty Tech, our journey began in a small garage with a big dream: to revolutionize the way technology enhances our daily lives. Founded in 2015 by Sanket Shetty, a visionary tech enthusiast with a knack for solving complex problems, Shetty Tech started as a modest software development firm with a mission to make cutting-edge technology accessible to everyone. <br> <br>

                        Sanket's passion for technology was evident from a young age. After years of working with top tech firms and honing his skills, he decided it was time to create something new, something that would push boundaries and redefine industry standards. With a small but dedicated team, Sanket launched Shetty Tech with a single goal – to bridge the gap between emerging technology and real-world applications.</p>

                    <h3 class="pb-2">OUR MISSION</h3>
                    <p>At Shetty Tech, our mission is simple: to deliver innovative technology solutions that drive progress and empower businesses. We specialize in developing custom software, mobile applications, and IT consulting services that are not only state-of-the-art but also tailored to meet the unique needs of our clients.</p>

                </div>
            </div>
            <div class="col-lg-6 right-section">
                <div class="img-sec img-div img-div-about ">

                    <img src="ImagesHome/sdev.png" alt="" >
                  </div>
            </div>
        </div>
    </section>



    <footer class="mt-5">
        <p class="mt-5">Made with ❤️ by Sanket</p>
      </footer>

      <script>
      $(document).ready(function () {
        $(".darkmoding").click(function () {
          $("body").toggleClass("darkModer");
          $(".darkmoding").toggleClass("darkModer2");
        });
      });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>