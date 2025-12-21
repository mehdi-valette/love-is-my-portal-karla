<!DOCTYPE html>

<head>
  <meta charset="utf-8">

  <style>
    :root {
      --background-color-light: #d7afb7;
      --background-color-dark: #c27f90;
      --language-color: #a44a5c;
    }

    body {
      height: 100vh;
      width: 100vw;
      padding: 3rem;
      font-size: 1.5rem;
      box-sizing: border-box;
      margin: 0;
      gap: 2rem;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      background-image: radial-gradient(ellipse at top, var(--background-color-dark) 50%, var(--background-color-light) 75%);
    }

    img {
      max-width: 50%;
      max-height: 50%;
    }
  </style>
</head>

<body>
  <img src="/image/check.svg">
  <?= _("Merci pour votre achat ! Nous nous occupons de votre commande !") ?>
  <a href="<?= "/$lang" ?>"><?= _("Retour au site") ?></a>
</body>