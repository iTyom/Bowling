  <!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="styles/styleFormule.css"/>
    <title>Nos Formules</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body class="body">
    <!--Barre du haut-->
    <?php
      include 'nav.php';
    ?>
    <!--/Barre du haut-->
<br /><br /><br />
    <!--Corps du site-->
    <div class="container-fluid text-center">
      <div class="row content">
        <!--Bloc Anniversaire-->
        <div class="col-sm-12">
        <!--Bloc gauche-->
        <div class="col-sm-4 text-center">

          <div class="cadre_droite">
            <img src="images/anniversaireFormule.jpg" width=600/>
          </div>
        </div>
          <div class="col-sm-8 text-left">
            <h1 id="titreAnniversaire">Formule anniversaire à 15€</h1>
            <p>Vous avez le choix entre<br>
            - 2 parties de Bowling<br>
            - 2 parties de Laser Blast<br>
            - 1 partie de Bowling et 1 partie de Laser Blast</p>
            <p>- A votre arrivée, votre table est réservé et préparée.<br>
            - Les enfants sont enregistrés immédiatement pour la partie de jeu dont la durée est varible selon la formule choisie.</p>
            <p>Pour profiter pleinement de votre créneau, vous devez vous présenter à l'heure précise de votre réservation.<br>
            Les enfants des anniversaires participants au Laser Blast seront mixés avec d'autres enfants.<br>
            Le tarif de la privatisation de Laser est de 20€ par enfants au lieu de 15€.</p>
            <p>Le Bowling Laser Blast de Saint Maximin agence des créneaux horaires pour garantir votre table pour une durée maximale de 2 heures. Si une réservation fait suite à la votre, vous devez libérer votre table dans les délais impartis et ceci par correction pour l'anniversaire suivant. Nous vous remercions pour votre compréhension.<br>
            6 enfants minimum, 1,5l de sodas et 1l de jus de fruits</p>

          </div>
          <!--Bloc de droite-->

      </div>
        <!--Bloc Entreprise-->
      <div id="blocEntreprise" class="col-sm-12">
        <!--Bloc de gauche-->


        <!--Bloc de droite-->
        <div id="txtEntreprise" class="col-sm-8 text-center">

          <h1 id="titreEntreprise">Soirées entreprises</h1>
          <p>Vous pouvez effectuer vos soirées entreprise dans notre établissement, en choisissant une formule "sur mesure" (Soirée de fin d'année, Arbre de noël, Séminaire, ...).<br>
          Vous souhaitez rassembler vos collaborateurs:<br>
          - Pour une journée de travail<br>
          - Une opération événementielle<br>
          - Un lancement de produit<br>
          - Une réunion commerciale<br>
          Contactez-nous au plus vite et définissons ensemble la formule "all-inclusive" pour un moment exceptionnel qui vous conviendra le mieux.</p>

        </div>
        <div class="col-sm-4 text-center">

          <div class="cadre_droite">
            <img id="imgEntreprise" src="images/entrepriseOffre.jpg" width=600/>
          </div>
        </div>
      </div>
      <!--Bloc Pizza-->
      <div id="blocPizza" class="col-sm-12">
        <!--Bloc de gauche-->
        <div class="col-sm-4 cadre_droite">
          <img src="images/pizzaOffre.jpg" width="600">
        </div>
        <div class="col-sm-4 text-left">
          <h1 id="titrePizza">Soirée pizzas</h1>
          <p>4 personnes minimum<br>
            (Réservation au préalable)<br><br>
            Table réservée<br>
            Pizza (1/2 par pers.)<br>
            Vin rosé (pour les adultes), 1 bouteill pour 4<br>
            Jus d'orange ou Soda (pour les ados)<br>
            <br>
          (L'abus d'alcool est dangereux pour la santé, à consommer avec modération)</p>
        </div>
        <!--Bloc de droite-->
        <div class="col-sm-4 text-left">
          <h4>Formule PIZZA à 16€</h4>
          <p>1 Partie au choix : BOWLING ou LASER BLAST</p>
          <h4>Formule PIZZA à 22€</h4>
          <p>2 Parties au choix : BOWLING et/ou LASER BLAST</p>
          <h4>Formule PIZZA à 31€</h4>
          <p>3 Parties au choix : BOWLING et/ou LASER BLAST</p>

        </div>

      </div>
    </div>
  </div>
<!--/Corps du site-->
<!--Pied de page-->
    <footer id="footer" class="container-fluid text-center">
      <ul class="nav navbar-nav">
        <li ><a href="#">Contact</a></li>
        <li><a href="#">Mention légal</a></li>
      </ul>
    </footer>
<!--/Pied de page-->
  </body>
</html>
