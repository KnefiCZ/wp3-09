<?php
require_once("Computer.php");
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komptrtr</title>
</head>

<body>
  <h1>Komprtr</h1>
  <?php
   $myPC = new Computer("EuroCase Master C5");//kejska ::)
   if ($myPC->addMB("Asus gT")) {
     echo "MB úspěšně naisntalován." . "<br>";
   } else {
     echo "nebylo možné nainstalovat MB." . "<br>";
   }
   if ($myPC->addGPU("NvidijA666 ")) {
     echo "GPU úspěšně naisntalována." . "<br>";
   } else {
     echo "nebylo možné nainstalovat GPU." . "<br>";
   }
   if ($myPC->addRAM("gSkill 8gb")) {
     echo "paměť RAM úspěšně naisntalován." . "<br>";
   } else {
     echo "nebylo možné nainstalovat paměť RAM." . "<br>";
   }
   if ($myPC->addHDD("seaGate 1TB")) {
     echo "HDD bylo úspěšně naisntalováno." . "<br>";
   } else {
     echo "nebylo možné nainstalovat HDD." . "<br>";
   }


 ?>
</body>
</html>
<!-- Dik mateheweee-->
