<?php
  $exercice ='Exercice 6';
  include '../header.php';
  $chaine = '';
  function returnStringNumber($ch1,$ch2,$nb1){
    $chaine1 = $ch1;
    $chaine2 = $ch2;
    $nombre1 = $nb1;
    $chaine = 'Bonjour '. $chaine1. ' '. $chaine2. ' tu as '. $nb1. ' ans';
    return $chaine;
  }
?>
  <h4>
    Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne.<br>
    Elle doit renvoyer une chaine de la forme :<br>
    "Bonjour" + nom + prénom + ",tu as" + age + "ans".
  </h4>
  <p>returnStringNumber('DANIEL','Jack',30) = <?= returnStringNumber('DANIEL','Jack',30); ?></p>
</body>
</html>
