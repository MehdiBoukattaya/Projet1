<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link  rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
  <?php require('inc/links.php'); ?>
  <title>InkHaven - A PROPOS</title>
  <style>
    .box{
      border-top-color: var(--teal) !important;
    }
  </style>
</head>
<body class="bg-light">

  <?php require('inc/header.php'); ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">A PROPOS</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
    Chez InkHaven, nous sommes fiers de vous offrir une expérience de réservation de tatouage fluide, adaptée aux besoins des passionnés d'art corporel du monde entier.
    </p>
  </div>

  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
        <h3 class="mb-3">Exprimez votre style unique : Des réservations de tatouage sans effort avec InkHaven.</h3>
        <p>
        Notre plateforme intuitive vous permet de rechercher, comparer et réserver facilement parmi une vaste sélection de créations artistiques uniques dans notre studio de tatouage. Faites confiance à notre équipe dévouée pour vous offrir une expérience inoubliable et sans stress alors que vous vous apprêtez à vous faire tatouer chez nous.
        </p>
      </div>
      <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
        <img src="images/about/about.jpg" class="w-100">
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/customers.png" width="70px">
          <h4 class="mt-3">200+ CUSTOMERS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/reviews.svg" width="70px">
          <h4 class="mt-3">80+ REVIEWS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/staff.svg" width="70px">
          <h4 class="mt-3">20+ STAFFS</h4>
        </div>
      </div>
    </div>
  </div>

  <h3 class="my-5 fw-bold h-font text-center">ARTISTES</h3>

  <div class="container px-4">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
      
            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
              <img src="images/artists/1.jpg" class="w-100">
              <h5 class="mt-2">Artist 1</h5>
            </div>
            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
              <img src="images/artists/2.jpg" class="w-100">
              <h5 class="mt-2">Artist 2</h5>
            </div>
            
            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
              <img src="images/artists/3.jpg" class="w-100">
              <h5 class="mt-2">Artist 3</h5>
            </div>
            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
              <img src="images/artists/4.jpg" class="w-100">
              <h5 class="mt-2">Artist 4</h5>
            </div>

      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>


  <?php require('inc/footer.php'); ?>

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 40,
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>


</body>
</html>