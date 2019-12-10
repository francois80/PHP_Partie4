<?php
  $exercice ='Exercice 7';
  include '../header.php';
  $chaine = '';
  function returnStringNumber($year,$genre){
    $an = $year;
    $sexe = $genre;
    if($sexe != 'homme' && $an < 18){
        $chaine = 'Vous êtes une femme et vous êtes mineur !!';
    }
      else if($sexe != 'homme' && $an >= 18){
          $chaine = 'Vous êtes une femme et vous êtes majeur !!';
      }
      else if($an < 18){
        $chaine = 'Vous êtes un homme et vous êtes mineur !!';
      }
      else{
        $chaine = 'Vous êtes un homme et vous êtes majeur !!';
      }
    return $chaine;
  }
?>
  <h4>
    Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne.
    Le genre peut être :<br>
    Homme<br>
    Femme<br>
    La fonction doit renvoyer en fonction des paramètres :<br>
    Vous êtes un homme et vous êtes majeur<br>
    Vous êtes un homme et vous êtes mineur<br>
    Vous êtes une femme et vous êtes majeur<br>
    Vous êtes une femme et vous êtes mineur<br>
    Gérer tous les cas.
  </h4>
  <p>returnStringNumber(30,'femme') = <?= returnStringNumber(30,'femme'); ?></p>
  <p>returnStringNumber(17,'femme') = <?= returnStringNumber(17,'femme'); ?></p>
  <p>returnStringNumber(18,'homme') = <?= returnStringNumber(18,'homme'); ?></p>
  <p>returnStringNumber(7,'homme') = <?= returnStringNumber(7,'homme'); ?></p>
</body>
</html>
