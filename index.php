<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PathFinder | Trouve ta voie</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="assets/style.css">
  <!-- Include JQuery 3.4.1 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
  <nav class="navbar">
    <div id="PathFinder" class="nav-item">
      <a href="#home" class="nav-link">PathFinder</a>
    </div>
    <div class="nav-list">
      <div class="nav-item">
        <a href="#home" class="nav-link">Accueil</a>
      </div>
      <div class="nav-item">
        <a href="#projects" class="nav-link">Commandes</a>
      </div>
      <div class="nav-item">
        <a href="#game" class="nav-link">Jeu</a>
      </div>
      <div class="nav-item">
        <a href="#equipe" class="nav-link">Equipe</a>
      </div>
      <div class="nav-item">
        <a href="#contact" class="nav-link">Nous contacter</a>
      </div>
  </nav>

  <section id="home" class="home">
    <div class="main">
      <section class="bail">
        <div class="explication">
          <h1 class="header-text">Bienvenue sur PathFinder !</h1>
          <p>
            PathFinder est un jeu interactif qui te permettra de t'éclairer sur les métiers post-MMI, et si possible
            t'aider à trouver celui qui te correspond.<strong> Si tu souhaites te lancer dans l'aventure pense à remplir le questionnaire sur ta droite avant !</strong>
          </p>
          <a href="#projects" class="btn">En savoir plus !</a>
        </div>

        <div class="form">
          <div class="header">
            <h1>Qui es-tu ?</h1>
          </div>
          <div class="login-box">
            <h4>Remplir ce petit formulaire te permettra de vivre pleinement ton aventure, et de la rendre un peu
              plus personnelle. ;)</h4>

            <div class="choice">
              <div class="textbox">
                <i class="fas fa-user"></i>
                <input id="pseudo" type="text" placeholder="Pseudo">
              </div>

              <div class="radio">
                <h4>Je souhaite contrôler un personnage :</h6>
                  <p class="margel">
                    <input type="radio" value="madame" id="md" name="civil">
                    <label for="md">Masuclin</label>
                    <input type="radio" value="monsieur" id="ms" name="civil">
                    <label for="ms">Feminin</label>
                  </p>
              </div>
            </div>
          </div>
          <div class="footer">
            <input type="button" class="buton" value="Valider">
          </div>
        </div>
      </section>
    </div>

    <div class="scroll-down"></div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,64L34.3,74.7C68.6,85,137,107,206,133.3C274.3,160,343,192,411,202.7C480,213,549,203,617,186.7C685.7,171,754,149,823,133.3C891.4,117,960,107,1029,101.3C1097.1,96,1166,96,1234,90.7C1302.9,85,1371,75,1406,69.3L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
  </section>

  <section id="projects" class="projet">
    <div class="main">
      <h1 class="header-projects">Comment jouer ?</h1>
    </div>

    <section class="division">
      <div class="wrapper">
        <div class="wrap test1">
          <div class="instructions">
            <div class="chiffre">
              <div class="num">
                <h2>1</h2>
                <div class="bar"></div>
              </div>
            </div>
            <div class="bloc-instructions">
              <h1>DÉPLACE TOI</h1>
              <p>
                La courte aventure que tu t’apprêtes de commencer est sur un jeu de plateformes, utilise les flèches directionnelles de ton clavier pour te déplacer au sein du jeux, et ta barre espace pour sauter sur les plateformes.
              </p>
            </div>
          </div>
        </div>
        <div class="wrap test2">
          <div class="instructions">
            <div class="chiffre">
              <div class="num">
                <h2>2</h2>
                <div class="bar"></div>
              </div>
            </div>
            <div class="bloc-instructions">
              <h1>EXPLORE</h1>
              <p>
                Pour accéder aux niveaux, utilise les portes ! Elles t'y amèneront directement. Lors de ton exploration, tu en trouveras plein d'autres, n'hésite surtout pas à les utiliser car elle te serviront à accéder aux informations des différents métiers !!
              </p>
            </div>
          </div>
        </div>
        <div class="wrap test3">
          <div class="instructions">
            <div class="chiffre">
              <div class="num">
                <h2>3</h2>
                <div class="bar"></div>
              </div>
            </div>
            <div class="bloc-instructions">
              <h1>INTÉRAGIT</h1>
              <p>
                Celles-ci t'emmèneront dans une maison ou un professionnel t'attendra, clique sur le bouton pour interagir avec lui ! Il t'expliquera en quoi consiste son métiers, et tu pourras ensuite lui demander les infos qui t'intéresse.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <div class="slide">

      <a class="fa fa-angle-left" aria-hidden="true"><img src="images/prev.png" alt="" class="nav-left"></a>

      <div class="all">
        <div class="border" id="prod1">
          <section class="content">
          </section>
        </div>
        <div class="border" id="prod2">
          <section class="content">
          </section>
        </div>
        <div class="border" id="prod3">
          <section class="content">
          </section>
        </div>
      </div>

      <a class="af fa-angle-right" aria-hidden="true"><img src="images/next.png" alt="" class="nav-rigth"></a>

    </div>

    <p class="touches">
      Les plateformes sur lesquelles tu pourras te déplacer sont visibles ainsi tu n'auras pas de problèmes a te déplacer, cependant ne te méprends pas, certain nuages ne sont pas que décoratif mais sont bien de réelles plateformes ! Lorsque tu arriveras devant une porte utilise la flèche "haut" de ton clavier pour entrer dans la maison, utilise cette même touche pour afficher les textes des pnj qui t'attendent à l'intérieur. Enfin si tu souhaites descendre d'une plateforme, utilise la flèche "bas" de ton clavier.
    </p>
  </section>

  <section id="game">
    <div class="middle">
      <span class="container">
        <div class="text" data-text="Effect">LE JEU</div>
      </span>
    </div>

    <p>
      En cliquant sur le bouton ci-dessous PathFInder se lancera, tu seras alors téléporter dans un "HUB" où chaque portes représente un domaine d'activité. Une fois après avoir choisi une portes, déplace toi de plateformes en plateformes et utilise les portes des maisons afin de rencontrer des PNJ qui incarnent les métiers du domaine d'activités que tu as choisi. En fonction de là où tu as commencé, il se pourrait que tu n'accèdes plus à aucune portes au bout d'un temps, c'est que tu as finis de consulter les métiers relatif à un domaine d'activité, recharge donc la page pour découvrir les autres !
    </p>

    <div class="boite">
      <div class="info">
        <div class="petite-boite">
          <a href="Jeu/game.php">
            <div id="START">COMMENCER !</div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section id="equipe">
    <div class="main">

      <div class="middle">
        <span class="container">
          <div class="we" data-text="Effect">QUI SOMMES-NOUS ?</div>
        </span>
      </div>

      <div id="team">
        <div class="card">
          <div class="card-image">
            <img src="images/Ulysse.png" alt="" class="pdp">
          </div>
          <div class="card-text">
            <span class="role">Développeur Full Stack</span>
            <h2>Ulysse</h2>
            <p>Ulysse s’occupe principalement de la partie back du projet, c'est à dire permettre aux données d'être
              bien stockées et utilisables sur la plateforme. Il s'est également occupé du cod du développement Front du projet.
            </p>
          </div>
          <div class="card-social">
            <a href="#projects" class="btn-cv">Mon CV</a>
          </div>
        </div>

        <div class="card">
          <div class="card-image">
            <img src="images/Emma.png" alt="" class="pdp">
          </div>
          <div class="card-text">
            <span class="role">Graphiste</span>
            <h2>Emma</h2>
            <p>Emma s’est quant à elle occupé du design du jeu et de son identité graphique, elle a dessiné et
              conceptualisé le design de l’ensemble des niveaux. Elle a également écrit les textes explicatif de chaque métier.</p>
          </div>
          <div class="card-social">
            <a href="#projects" class="btn-cv">Mon CV</a>
          </div>
        </div>

        <div class="card">
          <div class="card-image">
            <img src="images/Dany.png" alt="" class="pdp">
          </div>
          <div class="card-text">
            <span class="role">Développeur Web</span>
            <h2>Dany</h2>
            <p>Dany, le chef de projet, s’est notamment occupé du game design, et de l’élaboration des niveaux. La
              programmation du jeu en JavaScript à été fait en binôme par lui et Robin.</p>
          </div>
          <div class="card-social">
            <a href="#projects" class="btn-cv">Mon CV</a>
          </div>
        </div>

        <div class="card">
          <div class="card-image">
            <img src="images/Robin.png" alt="" class="pdp">
          </div>
          <div class="card-text">
            <span class="role">Graphiste/Développeur Web</span>
            <h2>Robin</h2>
            <p>Robin était ambivalent, son rôle était aussi bien de s'occuper du design de PathFinder avec Emma et de la
              programmation du jeu en JavaScript avec Dany.</p>
          </div>
          <div class="card-social">
            <a href="#projects" class="btn-cv">Mon CV</a>
          </div>
        </div>

      </div>
  </section>

  <section id="contact">
    <div class="form-contact">

    <?php if (isset($_GET['success'])): ?>
        <div class="alert alert-success" role="alert">
            Votre message a été envoyé avec succès !
        </div>
    <?php endif; ?>


      <h1 class="header-contact">Nous contacter</h1>
      <p>Si tu le souhaite, tu peux nous contacter avec ce formulaire, nous essaierons de répondre dans les plus brefs
        délais ! Les champs marqués d'une astérisque sont obligatoires.</p>

      <div class="formulaire">
        <form class="demandeInfos" action="controllers/contact_form.php" method="POST">
          <div class="informations">
            <div class="civils">
              <!-- <label for="nom">Nom :</label><br> -->
            <input class="civil" type="text" placeholder="NOM" id="nom" name="name"><br><br>

            <!-- <label for="prenom">Prénom :</label><br> -->
            <input class="civil" type="text" placeholder="Prénom*" id="prenom" name="surname" required
              data-validation-required-message="Merci d'entrer votre prénom."><br><br>
            </div>

            <!-- <label for="email">Mail :</label><br> -->
            <input class="adresse" type="email" placeholder="Email*" id="email" name="email" required=""
             data-validation-required-message="Merci d'entrer votre adresse de courriel."><br><br>
          </div>

          <div class="text-form">
            <!-- <label for="precisions">Votre message :</label><br> -->
            <textarea class="msg" name="comment" placeholder="Votre message" id="precisions" cols="70"></textarea><br><br>
          </div>

          <input type="submit" id="envoi" value="Envoyer">
        </form>
      </div>
    </div>
  </section>

  <script src="assets/app.js"></script>
  <script type="text/javascript" src="controllers/formulaire.js"></script>
</body>

</html>