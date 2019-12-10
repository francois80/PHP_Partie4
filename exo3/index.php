<?php
  $exercice ='Exercice 3';
  include '../header.php';
  $chaine = '';
  function returnChaine($param1, $param2){
    $chaine = $param1. ' '. $param2;
    return $chaine;
  }
?>
  <h3>
    Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation
    de ces deux chaines
  </h3>
  <p>$param1 = 'Bonjour à tous'</p>
  <p>$param1 = 'et bienvenue'</p>
  <p>fonction returnChaine = returnChaine('Bonjour à tous','et bienvenue');</p>
  <p><?= returnChaine('Bonjour à tous','et bienvenue'); ?></p>
</body>
</html>
