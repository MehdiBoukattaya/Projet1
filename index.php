<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php'); ?>
    <title>
        InkHaven
    </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <style>
        * {
            font-family: 'Rubik', sans-serif;
        }

        .h-font {
            font-family: 'Rubik', sans-serif;
        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>

<body class="bg-light">

    <!-- Header -->
    <?php require('inc/header.php'); ?>

    <!-- Carousel -->
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/carousel/1.jpg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/2.jpg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/3.jpg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/4.jpg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/5.jpg" class="w-100 d-block" />
                </div>
            </div>
        </div>
    </div>

    <!-- Tattoo styles -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Styles de tatouage</h2>
    <div class="container">
        <div class="row">
        
            <div class="col-lg-4 col-md-6 my-3">  
            <div class="card border-0 shadow" style=" max-width: 350px; margin: auto;">
                <img src="images/tattoo_styles/1.jpg" class="card-img-top">
                <div class="card-body ">
                        <h5 class="fw-bold">Style 1</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus lectus orci, mattis sed auctor a, blandit in lorem. Donec bibendum metus non turpis malesuada, ut tempus sapien scelerisque. </p>
                        <div class="d-flex">
                            <a href="artists.php" class="btn btn-sm custom-bg text-white shadow-none">En savoir plus</a>
                        </div>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">  
            <div class="card border-0 shadow" style=" max-width: 350px; margin: auto;">
                <img src="images/tattoo_styles/1.jpg" class="card-img-top">
                <div class="card-body ">
                        <h5 class="fw-bold">Style 2</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus lectus orci, mattis sed auctor a, blandit in lorem. Donec bibendum metus non turpis malesuada, ut tempus sapien scelerisque. </p>
                        <div class="d-flex">
                            <a href="artists.php" class="btn btn-sm custom-bg text-white shadow-none">En savoir plus</a>
                        </div>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">  
            <div class="card border-0 shadow" style=" max-width: 350px; margin: auto;">
                <img src="images/tattoo_styles/1.jpg" class="card-img-top">
                <div class="card-body ">
                        <h5 class="fw-bold">Style 3</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus lectus orci, mattis sed auctor a, blandit in lorem. Donec bibendum metus non turpis malesuada, ut tempus sapien scelerisque. </p>
                        <div class="d-flex">
                            <a href="artists.php" class="btn btn-sm custom-bg text-white shadow-none">En savoir plus</a>
                        </div>
                </div>
            </div>
            </div>
            
            

        </div>
    </div>

    <!-- Reach Us -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">NOUS CONTACTER</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100" height="320 px" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d22403.56087992913!2d-75.698873!3d45.420528!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce0453fe0927e1:0x74f95f439b0f07b8!2sDelta Hotels by Marriott Ottawa City Centre!5e0!3m2!1sfr!2sca!4v1680567292256!5m2!1sfr!2sca" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Nous appeler</h5>
                    <a href="tel: (819) 123-4567" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +1
                        (819) 555-2232
                    </a>
                    <br>
                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: contact@inkhaven.ca"
                        class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i>
                        contact@inkhaven.ca
                    </a>
                    <br>
                </div>
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow Us</h5>
                <a href="https://www.twitter.com" class="d-inline-block mb-3">
                  <span class="badge bg-light text-dark fs-6 p-2"> 
                  <i class="bi bi-twitter me-1"></i> Twitter
                  </span>
                </a>
                <br>
                    <a href="https://www.facebook.com" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook me-1"></i> Facebook
                        </span>
                    </a>
                    <br>
                    <a href="https://www.instagram.com" class="d-inline-block">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram me-1"></i> Instagram
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <?php require('inc/footer.php') ?>


    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 1500,
                disableOnInteraction: false,
            }
        });
    </script>
</body>

</html>