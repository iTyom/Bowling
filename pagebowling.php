<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="styles/styleBowling.css"/>
    <title>Bowling</title>
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
        <!--Bloc de gauche-->

        <!--/Bloc de gauche-->
        <!--Bloc central-->
        <div>
          <img id="imgHeaderBowling" src= "images/headerAccueil.jpg" align = "bottom" />
        </div>
        <div class="col-sm-12 text-center">

          <center>
            <br />
   <!--Crréation tableau prix bowling -->
              <table border= 4 width=100% color=white>
              <tr height=25>
                <td align= "center" class="ligne_tab"></td>
                <td align= "center" class="ligne_tab">10H00 À 13H30</td>
                <td align= "center" class="ligne_tab">13H30 À 19H00</td>
                <td align= "center" class="ligne_tab">19H00 À FERMETURE</td>
              </tr>
              <tr height=25>
                <td align= "center" class="ligne_tab">Du Lundi au Vendredi</td>
                <td align= "center" class="ligne_tab">2,80€</td>
                <td align= "center" class="ligne_tab">4,80€</td>
                <td align= "center" class="ligne_tab">6,50€</td>
              </tr>
              <tr height=25>
                <td align= "center" class="ligne_tab">Samedi</td>
                <td align= "center" class="ligne_tab">2,80€</td>
                <td align= "center" class="ligne_tab">4,80€</td>
                <td align= "center" class="ligne_tab">6,80€</td>
              </tr>
              <tr height=25>
                <td align= "center" class="ligne_tab">Dimanche</td>
                <td align= "center" class="ligne_tab">2,80€</td>
                <td align= "center" class="ligne_tab">5,40€</td>
                <td align= "center" class="ligne_tab">6,50€</td>
              </tr>
            </table>
          </center>
          <br>
         <center>Location de chaussure : Ajoutez 2€ sur la première partie - Port de chaussure obligatoire </center>
         <center>Les Bumpers : matériel fragile, strictement réservé aux enfants de moins de 30Kg ou jusqu'à 10 ans </center>
          <br>
       <table  width=100% color=white>
              <tr height=25>
                <td class="ligne_tab"><img src= "images/toboggan.png" align = "left" width = "400" height = "350"/></td>
                <td class="ligne_tab" align="center"><H1>Toboggan</H1>
                <br>
                Du nouveau dans le bowling de Saint Maximim !!
                <br>
                <br>
                Pour tous les petits (3-6ans), Vous avez desormais 2 toboggans à votre disposition pour lancer la boule.
                Il suffit à l'enfant de poser la boule, diriger le toboggan, laisser ensuite glisser et... STRIKE!!!!
                </td>
              </tr>
            </table>
            <H1><center>LES RÈGLES</center></H1>

          <div>
             Lors d’une soirée bowling en famille ou entre amis, chacun y va de sa méthode pour prédire le score que ses adversaires vont faire en essayant de trouver une méthode de calcul des spares, strikes, split et rigole. <p>
                  Il n’y a bien évidemment qu’une seule méthode de calcul des points au bowling.<p>
                  Nombre de quilles tombées :<p>
                <p>Au premier lancer de chaque frame, vous obtenez un nombre de points en fonction du nombre de quilles que vous aurez fait tomber. Si vous faites tomber toutes les quilles dés le premier lancer, vous aurez 10 points et ceci sera appelé un strike.<p>
                S’il reste des quilles debout après le premier lancer, vous aurez le droit à un second lancer et le total des quilles qui tomberont sera ajouté à votre premier lancer. Si vous faites tomber le reste des quilles à ce deuxième lancer, vous aurez 10 points et ceci sera appelé un spare.<p>
                Au bout de 10 frames, si vous réussissez à faire un strike ou un spare, vous aurez le droit à 1 ou 2 lancer supplémentaires.<p>
                <br>
                <H4>Points supplémentaires :</H4>
                  En plus du nombre de quilles que vous aurez fait tomber, vous aurez le droit à des points de bonus en cas de strike ou de spare :<p>
                  -  Si vous faites un strike, vos deux prochains lancers seront additionnés aux 10 quilles déjà tombées.<p>
                  -  Si vous faites un spare, votre prochain lancer sera additionné aux 10 quilles déjà tombées. <p>
                  Il faut donc faire le plus gros score possible après un spare ou un strike pour marquer facilement des points. Le score maximal est de 300 et vous ne pourrez l’obtenir qu’en faisant 12 strikes à la suite.<p>
                  Enfin dans le tableau des scores, vous aurez surement remarqué que de temps en temps vous avez des chiffres du premier lancer qui sont surlignés ou entourés, cela signifie que vous avez fait tomber les quilles en configuration  "split" , c’est à dire que des quilles se retrouvent isolées à droite et à gauche et qu’il vous sera très difficile de faire un spare avec cette configuration.<p>
                </td>
          </div>

              </tr>
            </table>
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
        <li><a href="#">Contact</a></li>
        <li><a href="#">Mentions légales</a></li>
      </ul>
    </footer>
<!--/Pied de page-->
  </body>
</html>
