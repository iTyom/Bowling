<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="styles/styleBowling.css"/>
    <title>Laser Blast</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="jquery.animateNumber.js"></script>

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
        <!--Bloc de gauche-->

        <!--/Bloc de gauche-->
        <!--Bloc central-->
        <div class="col-sm-12 text-center">
           <!--Création bandeau image -->
          <table width=30% color=white align= "center">
              <tr>
                <div class="col-sm-4"><td align= "center" class="ligne_tab"><img src="images/laser1.jpg" align = "left" width = "450" height = "450"/></td></div>
                <div class="col-sm-4"><td align= "top" class="ligne_tab"><img src="images/laser2.jpg" align = "left" width = "338" height = "450"/></td></div>
                <div class="col-sm-4"><td align= "center" class="ligne_tab"><img src="images/laser3.jpg" align = "left" width = "338" height = "450"/></td></div>
              </tr>
          </table>
            <br />
   <!--Création tableau prix laser-->
              <table border= 4 width=100% color=white>
              <tr height=25>
                <td align= "center" class="ligne_tab"></td>
                <td align= "center" class="ligne_tab">13H30 À FERMETURE</td>
              </tr>
              <tr height=25>
                <td align= "center" class="ligne_tab">1 PARTIE</td>
                <td align= "center" class="ligne_tab">9,00€</td>
              </tr>
              <tr height=25>
                <td align= "center" class="ligne_tab">2 PARTIES</td>
                <td align= "center" class="ligne_tab">16,00€</td>
              </tr>
            </table>
          <br>

     <!--Tableau bandeau info-->

        <table bgcolor= "#FE0188" width=100% color=white>
              <tr height=40 bgcolor= #FE014D>
                <td align= "top" class="ligne_tab"></td>
                <td align= "center" class="ligne_tab"></td>
                <td align= "center" class="ligne_tab"></td>
                <td align= "center" class="ligne_tab"></td>
              </tr>
              <tr height=40 bgcolor= "#FE014D">
                <td align= "center" class="ligne_tab"><span id="compteur4">2</span> SALLES</td>
                <td align= "center" class="ligne_tab"><span id="compteur3">20</span > JOUEURS</td>
                <td align= "center" class="ligne_tab"><span id="compteur">150</span>m<sup>2</sup></td>
                <td align= "center" class="ligne_tab"><span id="compteur2">250</span>m<sup>2</sup></td>
              </tr>
              <tr height=45 bgcolor= "#FE014D">
                <td align= "center" class="ligne_tab"></td>
                <td align= "center" class="ligne_tab"></td>
                <td align= "center" class="ligne_tab"></td>
                <td align= "center" class="ligne_tab"></td>
              </tr>
            </table>
            <script>$('#compteur').prop('number', 0).animateNumber({ number: 150 }, 3000);</script>
            <script>$('#compteur2').prop('number', 0).animateNumber({ number: 250 }, 3000);</script>
            <script>$('#compteur3').prop('number', 0).animateNumber({ number: 20 }, 5000);</script>
            <script>$('#compteur4').prop('number', 0).animateNumber({ number: 2 }, 5000);</script>
          <br>
       <table  width=100% color=white>
              <tr height=25>
                <td class="ligne_tab"><img src= "images/laser1.jpg" align = "left" width = "400" height = "350"/></td>
                <td class="ligne_tab" color= #FE014D align="center"><H3>Une aventure aux confins de la galaxie ...</H3>
                <br>
                <p>Venez défier vos amis dans un vaisseau spatial de 400 m<sup>2</sup>!<p> Grâce à notre nouvelle génération de Laser vivez une expérience intense et unique. Votre gilet est plus léger et votre laser plus précis pour un meilleur confort de jeu. Vous pourrez suivre l'évolution des scores en temps réel sur votre pistolet et à l'accueil.</p>
              </tr>
            </table>
         <p><H4>Votre équipement</H4></p>
          Votre pistolet laser : la grande précision de votre laser vous permettra de toucher vos adversaires de très loin. 1 zone de capteur présente sur votre pistolet.
          <p>Votre gilet : sa légèreté vous permettra des mouvements plus fluides. 4 zones de capteurs présentes sur le devant , le dos et les épaules.
        </div>
        <!--/bloc central-->
        <!--Bloc de droite-->

        <!--/Bloc de droite-->
      </div>
    </div>
<!--/Corps du site-->
<!--Pied de page-->
    <footer class="container-fluid text-center">
      <ul id="footer" class="nav navbar-nav">
        <li ><a href="#">Contact</a></li>
        <li><a href="#">Mentions légales</a></li>
      </ul>
    </footer>
<!--/Pied de page-->
  </body>
</html>
