<?php
  $exercice ='Exercice 2';
  include '../header.php';
  $chaine = '';
  function returnChaine($param1){
    $chaine = $param1;
    return $chaine;
  }
?>
  <h3>
    Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.
  </h3>
  <p><?= returnChaine('Bonjour à tous'); ?></p>
</body>
</html>
