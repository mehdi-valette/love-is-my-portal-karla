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
      min-height: 100vh;
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

    @media all and (max-width: 1000px) and (orientation: portrait) {
      .languages {
        flex-direction: column;
      }
    }
  </style>
</head>

<body>
  <div>
    <h1>Escolha seu idioma</h1>
    <h1>Choisis ta langue</h1>

    <div class="languages">
      <a class="language" href="pt">
        <img src="/image/book.png" />
        Português
      </a>

      <a class="language" href="fr">
        <img src="/image/book.png" />
        Français
      </a>
    </div>
  </div>
</body>


<!-- Collaborateur-trice technique en informatique et systèmes de communication

9663

Pas d'expérience pour gestion de parc serveur, mais très bonnes connaissances Linux et Kubernetes (formations Linux
Foundation)
Forte envie de m'orienter d'avantage vers l'administration système.

Entrée en fonction en Juillet, existe-t-il des formations/certificats que je puisse suivre d'ici là ? Conditionnelles à
l'emploi.

SLURM, libreNMS, Proxmox, OpenStack, Kubernetes

Tendance à mettre en place de nouvelles stack.

Passage à la retraite fin du mois d'août.

30-40 machines

"bac à sable"
Monter les clusters, les démonter, etc.
Machines à jour, mémoire, maintenues, logiciels compatibles.
VMWare, gérer cette infrastructure

"opérationnel"
Projets de recherche, GPU, entraînement modèles IA

Mutualiser l'utilisation de ces machines.

Jeremy varto
Code, présentation de code,

2026 - 5 janvier 15h30-15h00
8 janvier -->