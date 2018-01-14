<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="styles/style.css"/>
    <title>Accueil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php
         /* try {
            $bdd = new PDO('mysql:host=localhost;dbname=bowling;charset=utf8', 'root', 'root');
        }
        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        } */
    ?>
  </head>
  <body class="body">
    <!--Barre du haut-->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="index.php"><img src="logo_BleuRose.png" class="navbar-brand imgnav"/></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li ><a href="pagebowling.php">Bowling</a></li>
            <li><a href="pagelaser.php">laser blast</a></li>
            <li><a href="AutreActivite.html">Autres Activités</a></li>
            <li><a href="NosFormules.html">Nos Formules</a></li>
            <li><a href="#">Reservations</a></li>
            <li><a href="#">Boutique</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!--/Barre du haut-->
<br /><br /><br />
    <!--Corps du site-->
    <div class="container-fluid text-center">
      <div class="row content">
        <!--Bloc de gauche-->

        <!--/Bloc de gauche-->
        <!--Bloc central-->
        <div class="col-sm-8 text-left">
          <img src="devanture_bowling.png" width=870/>
          <center>
            <h3>Horaires</h3>
            <br />
            <?php
              /*  $reqSemaine = $bdd->query("SELECT * FROM Horaire WHERE Libelle_Horaire = 'Semaine'");
                $reqVacance = $bdd->query("SELECT * FROM Horaire WHERE Libelle_Horaire = 'Semaine vacances'");
                $reqSamedi = $bdd->query("SELECT * FROM Horaire WHERE Libelle_Horaire = 'Samedi'");
                $reqSamediVacance = $bdd->query("SELECT * FROM Horaire WHERE Libelle_Horaire = 'Samedi vacances'");
                $reqDimanche = $bdd->query("SELECT * FROM Horaire WHERE Libelle_Horaire = 'Dimanche'");
                $reqDimancheVacance = $bdd->query("SELECT * FROM Horaire WHERE Libelle_Horaire = 'Dimanche vacances'"); */
            ?>
                    <table width=60% color=white>
                      <th>
                        <td class="ligne_tab">Toute l'année</td>
                        <td class="ligne_tab">Vacances scolaires</td>
                      </th>
                      <tr>
                        <td class="ligne_tab">Du mardi au vendredi</td>
                        <td class="ligne_tab">h - h</td>
                        <td class="ligne_tab">h - h</td>
                      </tr>
                      <tr>
                        <td class="ligne_tab">Samedi</td>
                        <td class="ligne_tab">h - h</td>
                        <td class="ligne_tab">h - h</td>
                      </tr>
                      <tr>
                        <td class="ligne_tab">Dimanche</td>
                        <td class="ligne_tab">h - h</td>
                        <td class="ligne_tab">h - h</td>
                      </tr>
                    </table>
                  </center>
              <hr>
              <h3>Test</h3>
              <p>Lorem ipsum...</p>
            </div>
        <!--/bloc central-->
        <!--Bloc de droite-->

        <!--/Bloc de droite-->
      </div>
    </div>
<!--/Corps du site-->
<!--Pied de page-->
    <footer class="container-fluid text-center">
      <ul class="nav navbar-nav">
        <li ><a href="#">Contact</a></li>
        <li><a href="#">Mention légal</a></li>
      </ul>
    </footer>
<!--/Pied de page-->
  </body>
</html>
