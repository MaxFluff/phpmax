<?php
require_once ('figuur.class.php');
require_once ('cilinder.class.php');
require_once ('vierkant.class.php');


$mijn_cilinder = new Cilinder(10, 5);
echo"<br>";
echo"<br>";
    $mijn_cilinder->setOmschrijving(' deze cilinder is 10 breed en 5 hoog');
    echo $mijn_cilinder->getOmschrijving();
    echo"<br>";
    echo "cilinder ".$mijn_cilinder->berekenOppervlakte();

    echo"<br>";
    echo"<br>";

$mijn_vierkant = new Vierkant(12);
    $mijn_vierkant->setOmschrijving(' vierkant is 12m lang');
    echo $mijn_vierkant->getOmschrijving();
    
    echo "vierkant ".$mijn_vierkant->berekenOppervlakte();
    