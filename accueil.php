<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Acceuil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="jquery.animateNumber.js"></script>
    <link rel="stylesheet" type="text/css" href="styles/style.css"/>
  </head>
  <?php
       try {
          $bdd = new PDO('mysql:host=localhost;dbname=bowling2;charset=utf8', 'root', 'root');
      }
      catch (Exception $e)
      {
          die('Erreur : ' . $e->getMessage());
      }
  ?>
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
        <!--Bloc central-->
        <div class="col-sm-12  text-center">
          <img src="images/devanture_bowling.png" width=870/>
          <center>
            <h3>Horaires</h3>
            <br />
            <?php
                $reqSemaine = $bdd->query("SELECT * FROM Horaire WHERE Libelle_Horaire = 'Semaine'");
                $reqVacance = $bdd->query("SELECT * FROM Horaire WHERE Libelle_Horaire = 'Semaine Vacances'");
                $reqSamedi = $bdd->query("SELECT * FROM Horaire WHERE Libelle_Horaire = 'Samedi'");
                $reqSamediVacance = $bdd->query("SELECT * FROM Horaire WHERE Libelle_Horaire = 'Samedi vacances'");
                $reqDimanche = $bdd->query("SELECT * FROM Horaire WHERE Libelle_Horaire = 'Dimanche'");
                $reqDimancheVacance = $bdd->query("SELECT * FROM Horaire WHERE Libelle_Horaire = 'Dimanche vacances'");
            ?>
                    <table bgcolor= "#FE0188" width=60% color=white>
                      <th>
                        <td class="ligne_tab">Toute l'année</td>
                        <td class="ligne_tab">Vacances scolaires</td>
                      </th>
                      <tr>
                        <td class="ligne_tab">Du mardi au vendredi</td>
                        <td class="ligne_tab"><?php while ($donnees = $reqSemaine->fetch()) { echo $donnees['Horaire_Debut']; ?>h - <?php echo $donnees['Horaire_Fin'];}?>h</td>
                        <td class="ligne_tab"><?php while($donneesVacance = $reqVacance->fetch()) { echo $donneesVacance['Horaire_Debut']; ?>h - <?php echo $donneesVacance['Horaire_Fin'];}?>h</td>
                      </tr>
                      <tr>
                        <td class="ligne_tab">Samedi</td>
                        <td class="ligne_tab"><?php while($donneesSamedi = $reqSamedi->fetch()) { echo $donneesSamedi['Horaire_Debut']; ?>h - <?php echo $donneesSamedi['Horaire_Fin'];}?>h</td>
                        <td class="ligne_tab"><?php while($donneesSamediVacance = $reqSamediVacance->fetch()) { echo $donneesSamediVacance['Horaire_Debut']; ?>h - <?php echo $donneesSamediVacance['Horaire_Fin'];}?>h</td>
                      </tr>
                      <tr>
                        <td class="ligne_tab">Dimanche</td>
                        <td class="ligne_tab"><?php while($donneesDimanche = $reqDimanche->fetch()) { echo $donneesDimanche['Horaire_Debut']; ?>h - <?php echo $donneesDimanche['Horaire_Fin'];}?>h</td>
                        <td class="ligne_tab"><?php while($donneesDimancheVacance = $reqDimancheVacance->fetch()) { echo $donneesDimancheVacance['Horaire_Debut']; ?>h - <?php echo $donneesDimancheVacance['Horaire_Fin'];}?>h</td>
                      </tr>
                    </table>
          </center>
          <br />
          <hr>
          <br />
          <center>
            <table bgcolor= "#FE0188" width=100% color=white>
              <tr height=40 bgcolor= #FE014D>
                <td align= "top" class="ligne_tab"></td>
                <td align= "center" class="ligne_tab"></td>
                <td align= "center" class="ligne_tab"></td>
                <td align= "center" class="ligne_tab"></td>
              </tr>
              <tr height=40 bgcolor= #FE014D>
                <td align= "center" class="ligne_tab"><span id="compteur">3</span> billards</td>
                <td align= "center" class="ligne_tab"><span id="compteur2">13</span> pistes de bowling</td>
                <td align= "center" class="ligne_tab"><span id="compteur3">3</span> jeux d'arcades</td>
              </tr>
              <tr height=45 bgcolor= "#FE014D">
                <td align= "center" class="ligne_tab"></td>
                <td align= "center" class="ligne_tab"></td>
                <td align= "center" class="ligne_tab"></td>
                <td align= "center" class="ligne_tab"></td>
              </tr>
            </table>

            <script>$('#compteur').prop('number', 0).animateNumber({ number: 3 }, 3000);</script>
            <script>$('#compteur2').prop('number', 0).animateNumber({ number: 13 }, 3000);</script>
            <script>$('#compteur3').prop('number', 0).animateNumber({ number: 3 }, 5000);</script>

            <br />
            <hr />
            <br />

            <p id="txtBowling">Le bowling Saint Maximin dans le Var (83) vous réserve des évènements de folie, comme des karaokés organisés régulièrement. Suivez-les actualités du bowling et de ses environs sur leur page Facebook.
Venez passer de bon moment en famille ou entre amis au bowling de Saint Maximin. Avec ses 13 pistes et sa salle de laser game de 250 m2 vous aurez de l’espace pour vous amuser.
Il y en a pour tous les âges, pour les petits comme  les grands,  les anniversaires de vos enfants au bowling – laser de Saint Maximin est possible avec notre formule anniversaire et pour les familles ou entre amis vous avez aussi notre formule pizza + bowling.</p>
            <br />
            <hr />
            <br />
            <h1>Bowling - Laser</h1>
            <img src="images/bar_rose.png" width=870/>
          </center>
        </div>
        <!--/bloc central-->
        <!--Bloc de droite-->

        <!--/Bloc de droite-->
      </div>
    </div>
<!--/Corps du site-->
<!--Pied de page-->
  <div class="container-fluid text-center pied">
    <ul class="nav navbar-nav">
      <li ><a href="#">Contact</a></li>
      <li><a href="#">Mentions légales</a></li>
    </ul>
  </div>
<!--/Pied de page-->
  </body>
</html>
