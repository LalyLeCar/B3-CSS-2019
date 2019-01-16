<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>titre</title>
  </head>
  <body>
    <?php
      function displayDat() {
      $jour = date('d');
      $mois = date('M');
      $annee = date('Y');
      echo "<p>Nous sommes le:'.$jour.'/'.$mois'/'$annee'";
      return($jour);
      }

    //appel de la fonction
    displayDate();
    echo "jour:"$jour

    ?>
  </body>
</html>
