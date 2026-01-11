<?php
$otherLang = match ($lang) {
  "pt" => "fr",
  "fr" => "pt",
}
  ?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>
    <?= _("L'amour est ton portail") ?>
  </title>

  <style>
    :root {
      --header-top-color-light: #d7afb7;
      --header-top-color-dark: #c27f90;
      --header-bottom-color-dark: #a44a5c;
      --header-bottom-color-light: #a54e61;
      --blurer-height: 3rem;
      --button-bg-color: hsl(351, 100%, 90%);
      --button-hover-bg-color: hsl(351, 100%, 80%);
      --button-transform: scale(1, 1);
      --button-hover-transform: scale(1.01, 1.1);
    }

    .about-author {
      .content {
        align-items: center;
        display: flex;
        justify-content: center;
        gap: 3rem;
        flex-wrap: wrap;

        section {
          width: 30rem;
        }
      }
    }

    .blurer {
      position: sticky;
      height: var(--blurer-height);
      background-color: rgb(255 255 255 / 0.3);
      top: calc(100vh - var(--blurer-height));
      width: 100%;
      z-index: 10;
      backdrop-filter: blur(3px);
    }

    body {
      padding: 0;
      margin: 0;
      background-color: var(--header-top-color-dark);
      margin-top: calc(var(--blurer-height) * -1);
    }

    body>section {
      padding: 3rem 1rem;
      background-color: var(--header-top-color-dark);

      &:nth-child(odd) {
        background-color: var(--header-top-color-light);
      }
    }

    .book-content {
      .topics {
        display: flex;
        flex-wrap: wrap;
        gap: 3rem;
        padding: 0 3rem;
        justify-content: center;

        .topic {
          width: 30rem;
          justify-self: center;
        }
      }
    }

    .book-preview {
      .pages {
        display: flex;
        gap: 3rem;
        overflow: auto;

        .page {
          min-width: 60rem;

          h3 {
            padding-left: 1rem;
          }

          .content {
            padding: 1rem;
            border-radius: 1rem;
            background-color: rgb(from var(--header-top-color-light) r g b / 0.7);
          }
        }
      }
    }

    .button {
      display: inline-block;
      box-sizing: border-box;
      text-transform: uppercase;
      font-weight: bold;
      background-color: var(--button-bg-color);
      border-radius: .5rem;
      border: none;
      color: black;
      cursor: pointer;
      font-size: 1rem;
      padding: .8rem;
      text-decoration: none;
      transform: var(--button-transform);
      transition-property: transform background-color;
      transition: .5s linear;
      width: 100%;
      margin: 3rem 0;
      text-align: center;

      &:hover {
        background-color: var(--button-hover-bg-color);
        transform: var(--button-hover-transform);
      }
    }

    .buy {
      .content {
        margin: auto;
        display: flex;
        flex-wrap: wrap;
        align-items: end;
        justify-content: center;
        gap: 3rem;

        .description {
          width: 30rem;
        }
      }
    }

    h2 {
      text-align: center;
      margin-bottom: 3rem;
      text-transform: uppercase;
    }

    .header {
      background-image: radial-gradient(ellipse at top, var(--header-top-color-dark) 50%, var(--header-top-color-light) 75%);
      padding-top: 10rem;
      position: relative;

      .language {
        position: absolute;
        top: 1rem;
        justify-self: center;
        left: 50%;
        transform: translateX(-50%);
        color: black;
        text-decoration: none;
      }

      .bottom {
        position: absolute;
        height: 50%;
        width: 100%;
        bottom: 0;
        background-image: linear-gradient(rgb(from var(--header-top-color-dark) r g b / 0),
            rgb(from var(--header-top-color-dark) r g b / 1));
      }

      .content {
        position: relative;
        padding: 0 5rem;
        display: flex;
        flex-wrap: wrap;
        gap: 3rem;
        align-items: start;
        justify-content: center;
      }

      h1 {
        margin-top: 0;
        text-transform: uppercase;
      }

      h2 {
        text-align: left;
        font-size: 1.1rem;
        margin-bottom: 0;
      }

      section {
        width: 30rem;

        .author {
          display: block;
          font-size: 1rem;
        }
      }

      ul {
        li {
          list-style-type: circle;
        }
      }
    }

    html {
      padding: 0;
    }

    img {
      width: 400px;

      &.boxed {
        width: 300px;
        border-radius: 0.5rem;
        box-shadow: 0 0 5px white;
      }
    }

    p {
      text-align: justify;
    }

    .readers-reviews {
      .reviews {
        display: flex;
        gap: 5rem;
        padding-bottom: 1rem;
        overflow: auto;

        .review {
          min-width: 20rem;

          p,
          textarea {
            margin: 1rem 0;
            padding: 1rem;
            border-radius: .5rem;
            background-color: var(--header-top-color-dark);
            height: 10rem;
            overflow: auto;
            width: 100%;
          }

          .author,
          input {
            display: flex;
            align-items: center;
            gap: 1rem;
          }

          input {
            padding: .3rem;
            background-color: var(--header-top-color-dark);
            display: inline-block;
            vertical-align: middle;
          }

          button {
            margin-left: 1rem;
            background-color: var(--button-bg-color);
            transform: var(--button-transform);
            border-radius: .5rem;
            border: none;
            color: black;
            cursor: pointer;
            text-decoration: none;
            transform: var(--button-transform);
            transition-property: transform background-color;
            transition: .5s linear;
            text-align: center;
            padding: .3rem;
            font-size: 1.1rem;
            vertical-align: middle;

            &:hover {
              background-color: var(--button-hover-bg-color);
              transform: var(--button-hover-transform);
            }
          }
        }
      }
    }

    @media all and (max-width: 1000px) and (orientation: portrait) {
      .about-author {
        .content {
          section {
            width: 90%;
          }
        }
      }

      .book-content {
        .topics {
          width: 90%;
          margin: auto;
          padding: 0;

          .topic {
            width: 100%;
          }
        }
      }

      .buy {
        .content {
          .description {
            width: 90%;
          }
        }
      }

      .header {
        .content {
          flex-direction: column;
          align-items: center;
          padding: 0;
          margin: 0;
        }

        section {
          width: 90%;
        }
      }

      img {
        width: 90%;
      }

      .readers-reviews {
        .reviews {
          .review {
            min-width: 90%;
          }
        }
      }
    }
  </style>

</head>

<body role="main">
  <div class="blurer">&nbsp;</div>

  <div class="header">

    <div class="bottom">&nbsp;</div>

    <a class="language" lang="<?= $otherLang ?>" href="/<?= $otherLang ?>"><?= _("Aceda ao site em português") ?></a>

    <div class="content">
      <img fetchpriority="high" src="/image/book-<?= $lang ?>.webp" alt="image du livre" />

      <section>
        <h1>
          <?= _("L'amour est ton portail") ?>
          <span class="author"><?= _("par Karla Alves") ?></span>
        </h1>

        <div>
          <h2><?= _("Toutes nous portons une histoire unique qui nous rend spéciales.") ?></h2>
          <p>
            <?= _("Ce livre est un témoignage de vie, de transformation et de renaissance.
              Avec délicatesse et authenticité, je partage mon parcours : d’une enfance marquée par la douleur à la
              reconnexion avec l’amour de soi.") ?>
          </p>
          <p>
            <?= _("Ce sont des pages vivantes, où défilent les amours qui m’ont façonnée, les blessures qui m’ont éveillée, et
              le portail sacré de la maternité – où je suis renaît femme et où j’ai enfin embrassé mon enfant intérieur.
              Je parle d’émotions profondes, de la danse entre le féminin et le masculin, de la spiritualité qui nourrit,
              et de la beauté de vivre dans la présence. La nutrition apparaît ici comme une médecine intuitive – une
              façon de nourrir le corps, le cœur et la vie, avec intention, affection et conscience.") ?>
          </p>
          <p>
            <?= _("J’inclus également des recettes simples et pleines d’âme, qui ont accompagné mon processus de guérison.") ?>
          </p>
          <p>
            <?= _("Ce livre est une invitation :") ?>
          </p>
          <ul>
            <li><?= _("À briser les cycles") ?>.</li>

            <li><?= _("À écouter ta voix intérieure.") ?>

            <li><?= _("À te guérir de l’intérieur vers l’extérieur.") ?></li>

            <li><?= _("À revenir à l’essence et à allumer ta propre lumière.") ?></li>
          </ul>
          <p>
            <?= _("Car la véritable transformation commence au moment où nous choisissons de nous aimer – entières,
              imparfaites,
              réelles.") ?>
          </p>
        </div>

        <a class="button" href="<?= $conf->get_payment_link($lang) ?>"><?= _("Commande maintenant") ?></a>
      </section>
    </div>
  </div>

  <section class="book-content">
    <h2><?= _("Contenu du livre") ?></h2>

    <div class="topics">
      <div class="topic">
        <h3>Mon histoire personnelle</h3>

        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
          est
          laborum.
        </p>
      </div>

      <div class="topic">
        <h3><?= _("Des recettes de cuisine saines : Nourrir est une forme d’amour.") ?></h3>

        <p>
          <?= _("C’est écouter le corps avec présence, prendre soin avec intention, offrir des aliments qui réconfortent non
            seulement l’estomac, mais aussi le cœur.") ?>
        </p>
        <p>
          <?= _("Dans ce chapitre, je t’ouvre la porte de ma cuisine, je t’invite à entrer et je partage avec toi quelques-unes
            de mes recettes préférées : simples, intuitives, préparées avec des ingrédients naturels et sans gluten ni
            lactose. Ce sont des plats nés de moments de soin, d’écoute et de reconnexion avec moi-même. Chaque recette
            est une invitation à ralentir, à revenir dans ta cuisine comme un espace sacré, où l’aliment se transforme en
            geste d’affection, en rituel de guérison et en expression d’amour propre. Cuisine avec calme. Ressens avec le
            cœur. Sers avec l’âme. Déguste avec amour.") ?>
        </p>
      </div>
    </div>
  </section>

  <section class="about-author">
    <h2>
      <?= _("À propos de l'autrice") ?>
    </h2>

    <section class="content">
      <img fetchpriority="high" src="/image/about.webp" alt="photo de Karla" class="boxed">
      <section>
        <h3>Karla Alves</h3>

        <p>
          <?= _("Diplômée en médecine dentaire, elle prend soin des sourires depuis plus d’une décennie. Mais c’est dans le
            silence du corps et l’écoute de l’âme qu’elle a appris à guérir ses blessures les plus anciennes. Après avoir
            vécu une enfance marquée par des défis, elle a choisi de briser les cycles et de créer des racines en
            elle-même. Son parcours allie corps, âme et esprit, avec des formations en Reiki, Ayurveda, nutrition
            intégrative et développement personnel.") ?>
        </p>
        <p>
          <?= _("Passionnée par la nature, par la nutrition consciente comme geste d’amour, par la beauté sous toutes ses
            formes et par les émotions qui nous habitent, elle a trouvé dans le chemin de la maternité son plus grand
            miroir et sa transformation la plus profonde. Elle croit que la guérison s’épanouit dans le jardin secret de
            l’amour de soi, où chaque femme est à la fois la fleur et la graine de sa propre transformation.") ?>
        </p>
      </section>
    </section>
  </section>

  <section class="readers-reviews">
    <h2><?= _("Avis des lectrices") ?></h2>

    <div class="reviews">
      <div class="review">
        <form>
          <textarea required placeholder="<?= _("Écrivez votre avis ici") ?>"></textarea>
          <input required placeholder="<?= _("Prénom nom") ?>">
          <button type="submit"><?= _("Envoyer") ?></button>
        </form>
      </div>
      <div class="review">
        <p>
          Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem
          placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar
          vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc posuere.
          Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos
          himenaeos.
        </p>
        <div class="author">
          <span>Tiago Silva</span>
        </div>
      </div>
      <div class="review">
        <p>
          Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem
          placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar
          vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc posuere.
          Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos
          himenaeos.
        </p>
        <div class="author">
          <span>Tiago Silva</span>
        </div>
      </div>
      <div class="review">
        <p>
          Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem
          placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar
          vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc posuere.
          Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos
          himenaeos.
        </p>
        <div class="author">
          <span>Tiago Silva</span>
        </div>
      </div>
      <div class="review">
        <p>
          Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem
          placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar
          vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc posuere.
          Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos
          himenaeos.
        </p>
        <div class="author">
          <span>Tiago Silva</span>
        </div>
      </div>
      <div class="review">
        <p>
          Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem
          placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar
          vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc posuere.
          Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos
          himenaeos.
        </p>
        <div class="author">
          <span>Tiago Silva</span>
        </div>
      </div>
      <div class="review">
        <p>
          Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem
          placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar
          vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc posuere.
          Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos
          himenaeos.
        </p>
        <div class="author">
          <span>Tiago Silva</span>
        </div>
      </div>
    </div>
  </section>

  <section class="book-preview">
    <h2>Aperçu du livre</h2>

    <div class="pages">
      <div class="page">
        <h3>Page 1</h3>
        <div class="content">
          <p> Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem
            placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar
            vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc
            posuere.
            Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos
            himenaeos.
          </p>

          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem
            placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar
            vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc
            posuere.
            Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos
            himenaeos.
          </p>

          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem
            placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar
            vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc
            posuere.
            Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos
            himenaeos.
          </p>

          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem
            placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar
            vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc
            posuere.
            Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos
            himenaeos.
          </p>

          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem
            placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar
            vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc
            posuere.
            Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos
            himenaeos.
          </p>

          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem
            placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar
            vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc
            posuere.
            Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos
            himenaeos.
          </p>

          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem
            placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar
            vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc
            posuere.
            Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos
            himenaeos.
          </p>

          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem
            placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar
            vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc
            posuere.
            Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos
            himenaeos.
          </p>

          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem
            placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar
            vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc
            posuere.
            Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos
            himenaeos.
          </p>

          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem
            placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar
            vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc
            posuere.
            Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos
            himenaeos.
          </p>
        </div>
      </div>

      <div class="page">
        <h3>Page 2</h3>
        <div class="content">
          <p> Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem
            placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar
            vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc
            posuere.
            Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos
            himenaeos.
          </p>

          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem
            placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar
            vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc
            posuere.
            Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos
            himenaeos.
          </p>

          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem
            placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar
            vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc
            posuere.
            Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos
            himenaeos.
          </p>

          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem
            placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar
            vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc
            posuere.
            Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos
            himenaeos.
          </p>

          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem
            placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar
            vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc
            posuere.
            Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos
            himenaeos.
          </p>

          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem
            placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar
            vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc
            posuere.
            Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos
            himenaeos.
          </p>

          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem
            placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar
            vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc
            posuere.
            Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos
            himenaeos.
          </p>

          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem
            placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar
            vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc
            posuere.
            Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos
            himenaeos.
          </p>

          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem
            placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar
            vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc
            posuere.
            Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos
            himenaeos.
          </p>

          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem
            placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar
            vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc
            posuere.
            Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos
            himenaeos.
          </p>
        </div>
      </div>

      <div class="page">
        <h3>Page 3</h3>
        <div class="content">
          <p> Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem
            placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar
            vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc
            posuere.
            Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos
            himenaeos.
          </p>

          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem
            placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar
            vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc
            posuere.
            Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos
            himenaeos.
          </p>

          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem
            placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar
            vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc
            posuere.
            Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos
            himenaeos.
          </p>

          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem
            placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar
            vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc
            posuere.
            Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos
            himenaeos.
          </p>

          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem
            placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar
            vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc
            posuere.
            Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos
            himenaeos.
          </p>

          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem
            placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar
            vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc
            posuere.
            Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos
            himenaeos.
          </p>

          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem
            placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar
            vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc
            posuere.
            Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos
            himenaeos.
          </p>

          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem
            placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar
            vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc
            posuere.
            Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos
            himenaeos.
          </p>

          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem
            placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar
            vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc
            posuere.
            Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos
            himenaeos.
          </p>

          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem
            placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar
            vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc
            posuere.
            Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos
            himenaeos.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="buy">
    <h2>Acheter le livre</h2>

    <div class="content">
      <img fetchpriority="high" src="/image/book-<?= $lang ?>.webp" alt="image du livre">
      <div class="description">
        <p>
          Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
          dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
          clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
          consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
          sed
          diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
          takimata sanctus est Lorem ipsum dolor sit amet.
        </p>

        <a class="button" href="<?= $conf->get_payment_link($lang) ?>"><?= _("Commande maintenant") ?></a>
      </div>
    </div>
  </section>
</body>

</html>