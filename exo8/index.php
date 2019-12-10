<?php
  $exercice ='Exercice 8';
  include '../header.php';
  $result = '';
  $param1 = 100;
  $param2 = 200;
  $param3 = 300;
  function returnCalcul($nb1,$nb2,$nb3){
    $nombre1 = $nb1;
    $nombre2 = $nb2;
    $nombre3 = $nb3;
    $result = $nombre1 + $nombre2 + $nombre3;
    return $result;
  }
?>
  <h4>
    Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.<br>
    Tous les paramètres doivent avoir une valeur par défaut.
  </h4>
  <p>$param1 = 100  // $param2 = 200  // $param3 = 300</p>
  <p>returnCalcul($param1,$param2,$param3) = <?= returnCalcul($param1,$param2,$param3); ?></p>
</body>
</html>
