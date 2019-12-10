<?php
  $exercice ='Exercice 5';
  include '../header.php';
  $chaine = '';
  function returnStringNumber($ch1,$nb1){
    $chaine1 = $ch1;
    $nombre1 = $nb1;
    $chaine = $chaine1. ' '. $nb1;
    return $chaine;
  }
?>
  <h4>
    Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit
    la concaténation de ces deux paramètres.
  </h4>
  <p>returnStringNumber('Ceci est une chaine de caractères',30) = <?= returnStringNumber('Ceci est une chaine de caractères',30); ?></p>
</body>
</html>
