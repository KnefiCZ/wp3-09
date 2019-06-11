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
     if ($myPC->addCPU(1)) {
      echo "CPU bylo úspěšně naisntalováno." . "<br>"; //CPUčko ::)
    } else {
      echo "nebylo možné nainstalovat CPU." . "<br>";
   }
   if ($myPC->addGPU(8)) {
     echo "GPU úspěšně naisntalována." . "<br>"; //GPUčko ::)
   } else {
     echo "nebylo možné nainstalovat GPU." . "<br>";
   }
   if ($myPC->addRAM(16)) {
     echo "paměť RAM úspěšně naisntalován." . "<br>"; //RAMky:)))
   } else {
     echo "nebylo možné nainstalovat paměť RAM." . "<br>";
   }
   if ($myPC->addHDD(1024)) {
     echo "HDD bylo úspěšně naisntalováno." . "<br>"; //HDDčko ::)
   } else {
     echo "nebylo možné nainstalovat HDD." . "<br>";
   }
    echo "<br>";   
    $myPC->summary();
    echo "<br>";

   if ($myPC->checkLoL()) {
     echo "Rozjedes LoLko pichusi :D ";
   }
   else {
     echo "Lolko nerozjedes :DDDDDDDDDD Upgrejdni si to ty kokos :DDDDDDDDDDDDDDDD";
   }

  echo "<br>";

   if ($myPC->checkCS()) {
    echo "Rozjedes ceesko pichusi :D:D ";
  }
  else {
    echo "Ani Ceesko nerozjedes :DDDDDDDDDDDDDDDD Upgrejdni si to ty kokos :DDDDDDDDDDDDDDDD";
  }

 ?>

</body>
</html>
