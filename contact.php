<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require('inc/links.php'); ?>
  <title>InkHaven - CONTACT</title>
</head>
<body class="bg-light">

  <?php require('inc/header.php'); ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">CONTACT US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
    Votre satisfaction est notre priorité. N'hésitez pas à nous contacter pour toute question, préoccupation ou commentaire, notre équipe dévouée sera ravie de vous aider. Nous avons hâte de rendre votre expérience remarquable.
    </p>
  </div>

 

  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 mb-5 px-4">

        <div class="bg-white rounded shadow p-4">
        <iframe class="w-100" height="320 px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d719147.7210878761!2d-77.04727674006709!3d45.24433911764808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce05b25f5113af%3A0x8a6a51e131dd15ed!2sOttawa%2C%20ON!5e0!3m2!1sfr!2sca!4v1686530074649!5m2!1sfr!2sca" loading="lazy"></iframe>

          <h5>Address</h5>
          <a href="https://goo.gl/maps/FSUrxPUGfeqfFtfs9" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
            <i class="bi bi-geo-alt-fill"></i> Ottawa, Ontario
          </a>

          <h5 class="mt-4">Nous appeler</h5>
          <a href="tel:  +1 (819) 555-2232" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +1 (819) 555-2232
          </a>
          <br>

          <h5 class="mt-4">Email</h5>
          <a href="mailto: contact@inkhaven.ca" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-envelope-fill"></i> contact@inkhaven.ca
          </a>

          <h5 class="mt-4">Nous suivre</h5>
        
                <a href="https://www.twitter.com" class="d-inline-block text-dark fs-5 me-2">
                  <i class="bi bi-twitter me-1"></i>
                </a>

          <a href="https://www.facebook.com" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-facebook me-1"></i>
          </a>
          <a href="https://www.instagram.com" class="d-inline-block text-dark fs-5">
            <i class="bi bi-instagram me-1"></i>
          </a>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 px-4">
        <div class="bg-white rounded shadow p-4">
          <form method="POST">
            <h5>Envoyer un message</h5>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Nom et prénom</label>
              <input name="name" required type="text" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Email</label>
              <input name="email" required type="email" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Objet</label>
              <input name="subject" required type="text" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Message</label>
              <textarea name="message" required class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
            </div>
            <button type="submit" name="send" class="btn text-white custom-bg mt-3">ENVOYER</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php require('inc/footer.php'); ?>

</body>
</html>