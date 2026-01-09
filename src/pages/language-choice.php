<!DOCTYPE html>

<html lang="fr">

<head>
  <meta charset=" utf-8">
  <title>L'amour est Ton Portail</title>

  <style>
    :root {
      --background-color-light: #d7afb7;
      --background-color-dark: #c27f90;
      --language-color: #a44a5c;
    }

    body {
      min-height: 100vh;
      padding: 0;
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      background-image: radial-gradient(ellipse at top, var(--background-color-dark) 50%, var(--background-color-light) 75%);
    }

    .languages {
      display: flex;
      gap: 5rem;
      flex-wrap: wrap;
      justify-content: center;
      margin-top: 5rem;

      .language {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-decoration: none;
        font-size: 2rem;
        gap: 1rem;
        color: var(--language-color);

        img {
          width: 300px;
          transition: transform .3s linear;
        }

        &:hover {
          img {
            transform: scale(1.1);
          }
        }
      }
    }

    h1 {
      text-align: center;
    }

    html {
      padding: 0;
      margin: 0;
    }

    @media all and (max-width: 1000px) and (orientation: portrait) {
      .languages {
        flex-direction: column;

        .language {
          img {
            height: 600px;
            width: auto;
          }
        }
      }
    }
  </style>
</head>

<body>
  <div role="main">
    <h1 lang="pt">Escolha seu idioma</h1>
    <h1 lang="fr">Choisis ta langue</h1>

    <nav class="languages">
      <a lang="pt" class="language" href="/pt">
        <img fetchpriority="high" src="/image/book-pt.webp" alt="Capa do livro em português" />
        Português
      </a>

      <a lang="fr" class="language" href="/fr">
        <img fetchpriority="high" src="/image/book-fr.webp" alt="couverture du livre en version française" />
        Français
      </a>
    </nav>
  </div>
</body>

</html>