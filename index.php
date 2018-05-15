<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exo 3 - PHP</title>
  </head>
  <body>
    <?php

    echo "<br />========> Exercice 1 <====== <br /><br />";

$chiffre = 0;

while ($chiffre <= 9)
{
    echo 'Exercice 1 - Les boucles.<br />';

    $chiffre++;
}
echo "<br />========> Exercice 2 <====== <br /><br />";

$nb1 = 0;
$nb2 = rand(1, 100);
 while ($nb1 <=20)
 {
   $nb3 = $nb1 * $nb2;
   echo " " .$nb3;
   $nb1++;
 }

 // Exercice 3

 echo "<br /><br />========> Exercice 3 <====== <br /><br />";

 $nb1 = 100;
 $nb2 = rand(1, 100);
  while ($nb1 >=10)
  {
    $nb3 = $nb1 * $nb2;
    echo " " .$nb3;
    $nb1--;
  }

  echo "<br /><br />========> Exercice 4 <====== <br /><br />";

  $nb1 = 1;
  while ($nb1 <= 10) {
    echo " " .$nb1;
    $nb1 = $nb1 + $nb1 / 2;
  }

  echo "<br /><br />========> Exercice 5 <====== <br /><br />";

  $nb3 = 1;

  while ($nb3 <= 15)
  {
      echo $nb3 ." " .'On y arrive presque.<br />';

      $nb3++;
  }

    echo "<br /><br />========> Exercice 6 <====== <br /><br />";

    for ($i=20; $i >-1 ; $i--)

    {
        echo $i ." " ."C'est presque bon !.<br />";
    }

      echo "<br /><br />========> Exercice 7 <====== <br /><br />";

      for ($pas=1; $pas <=100 ; $pas = $pas+15) {
        echo $pas ." " ."On tien le bon bout !! <br />";
      }

      echo "<br /><br />========> Exercice 8 <====== <br /><br />";

      for ($pas=200; $pas >-1 ; $pas = $pas-12) {
        echo $pas ." " ."Enfin !! <br />";
      }

?>
  </body>
</html>
