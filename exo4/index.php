<?php
  $exercice ='Exercice 4';
  include '../header.php';
  $chaine = '';
  function returnString($nb1,$nb2){
    $nombre1 = $nb1;
    $nombre2 = $nb2;
    if($nombre1 == $nombre2){
      $chaine = 'Les deux nombres sont identiques';
    }
    else if($nombre1 > $nombre2){
      $chaine = 'Le premier nombre est plus grand';
    }
    else{
      $chaine = 'Le premier nombre est plus petit';
    }
    return $chaine;
  }
?>
  <h4>
    Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :<br>
    Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième<br>
    Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième<br>
    Les deux nombres sont identiques si les deux nombres sont égaux
  </h4>
  <p>returnString(10,30) = <?= returnString(10,30); ?></p>
  <p>returnString(40,30) = <?= returnString(40,30); ?></p>
  <p>returnString(30,30) = <?= returnString(30,30); ?></p>
</body>
</html>
