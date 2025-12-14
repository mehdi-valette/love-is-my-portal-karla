<!DOCTYPE html>

<head>
  <link href="https://fonts.cdnfonts.com/css/shalimar" rel="stylesheet">
  <base href="/A/">

  <style>
    :root {
      --ff-default: "Times new roman";
      --text-default-color: black;
      --fs-default: 1.2rem;
      --color-primary: #FFEBCD;
      --background-color: #f6eced;
      --background-primary-start: #ddc5c5;
      --background-primary-end: #dfc2c4;
      --background-secondary-start: #dddddb;
      --background-secondary-end: #ebeae8;
      --color-lightdark: hsl(from var(--color-primary) h s calc(l - 10));
      --input-border-color: hsl(from var(--color-primary) h s calc(l - 50));
    }

    html {
      overflow: hidden;
      height: 100vh;
      padding: 0;
    }

    body {
      background-color: var(--background-color);
      height: 100%;
      margin: 0;
      font-size: 1.1rem;
      overflow: auto;
      font-family: var(--ff-default);
      color: var(--text-default-color);
      font-size: var(--fs-default);
      display: flex;
      flex-direction: column;
      gap: 10rem;
      box-sizing: border-box;
      scroll-behavior: smooth;
      text-align: justify;
    }

    .button {
      display: inline-block;
      background-color: hsl(351, 100%, 80%);
      border-radius: .5rem;
      border: 2px hsl(351, 100%, 10%) solid;
      color: black;
      cursor: pointer;
      font-size: calc(var(--fs-default) * 1.1);
      padding: .8rem;
      text-decoration: none;
      transform: scale(1, 1);
      transition-property: transform background-color;
      transition: .5s linear;

      &:hover {
        background-color: hsl(351, 100%, 90%);
        transform: scale(1.1, 1.1);
      }
    }

    .contact {
      display: flex;
      flex-direction: column;

      .button {
        margin: auto;
        margin-top: 1rem;
        width: fit-content;
      }

      fieldset {
        display: grid;
        grid-template-rows: auto;
        margin-top: 2rem;
        padding: 1rem;
        justify-content: center;

        legend {
          text-align: left;
        }

        label {
          text-align: left;
          margin-top: 1rem;

          input {
            background-color: var(--background-color);
            border-color: var(--input-border-color);
            border-radius: .2rem;
            border-width: 1px;
            display: block;
            width: calc(var(--fs-default) * 20);
            padding: .3rem;
            font-size: var(--fs-default);
          }
        }
      }
    }

    img {
      width: 20rem;
      border-radius: 100%;
      box-shadow: 0 0 60px white;
    }

    h2 {
      margin: 0;
      font-family: 'shalimar', cursive;
      font-size: calc(var(--fs-default) * 3);
      color: hsl(351, 100%, 40%);
      text-wrap: nowrap;
      text-align: left;
      text-shadow: 3px 3px 0px rgba(0, 0, 0, 0.2);

      .author {
        display: block;
        font-size: calc(var(--fs-default) * 1.2);
        text-wrap: nowrap;
        font-family: var(--ff-default);
        color: var(--text-default-color);
        font-weight: normal;
        text-align: left;
        text-shadow: none;

        &::before {
          content: "- ";
        }
      }
    }

    section {
      border-radius: 1rem;
      border: 1px solid hsl(from var(--background-secondary-start) h s calc(l - 20));
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 5rem 1rem;
      background-image: linear-gradient(45deg, var(--background-secondary-start), var(--background-secondary-end));
      margin-left: 1rem;
      margin-right: 1rem;

      &:nth-of-type(1) {
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        border-top: none;
      }

      &:nth-last-of-type(1) {
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
        border-bottom: none;
      }

      img {
        width: 20rem;
        border-radius: 100%;
        box-shadow: 0 0 60px white;
      }
    }

    @media screen and (min-width: 800px) {
      body {
        background-image: linear-gradient(45deg, var(--background-primary-start), var(--background-primary-end));
      }

      section.card {
        width: 80%;
        max-width: 60rem;
        margin: 0 auto;
        gap: 2rem;
        padding: 1rem;
        transform: translateX(-3rem);
        box-shadow: 10px 10px 20px hsl(from var(--background-primary-start) h s calc(l - 10));

        &:nth-of-type(even) {
          transform: translateX(3rem);
        }

        display: grid;
        grid-template-areas: 'image description'
        'title button';

        a {
          grid-area: button;
          align-self: center;
          justify-self: center;
        }

        img {
          grid-area: image;
        }

        h2 {
          grid-area: title;
        }

        p {
          grid-area: description;
        }
      }
    }
  </style>
</head>

<body>
  <section class="card">
    <img src="karla.png">

    <h2>
      L'amour est ton portail
      <span class="author">Karla Alves</span>
    </h2>

    <p>
      Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
      dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
      clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
      consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
      diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
      takimata sanctus est Lorem ipsum dolor sit amet.
    </p>
    <a href="#command-form" class="button">Commander</a>
  </section>

  <section class="card">
    <img src="karla.png">

    <h2>
      À propos de l'autrice
    </h2>
    <p>
      consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
      diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
      takimata sanctus est Lorem ipsum dolor sit amet.
    </p>
  </section>

  <section id="command-form">
    <h2>Commander</h2>
    <form class="contact">
      <fieldset>
        <legend>Adresse de livraison</legend>
        <label>
          Prénom
          <input type="text">
        </label>
        <label>
          Nom
          <input type="text">
        </label>
        <label>
          Adresse ligne 1
          <input type="text">
        </label>
        <label>
          Adresse ligne 2
          <input type="text">
        </label>
        <label>
          Code postal et localité
          <input type="text">
        </label>
        <label>
          Pays
          <input type="text">
        </label>
      </fieldset>
      <input type="submit" class="button" value="Commander">
    </form>
  </section>
</body>