<?php

require_once ('figuur.class.php');
require_once ('cilinder.class.php');
require_once ('vierkant.class.php');
require_once ('mijnvierkant.class.php');
require_once ('mijnrechthoek.class.php');

$cilinder = new cilinder(10,3);
$vierkant = new vierkant(5, 5);
$mijn_vierkant = new mijnvierkant(10,10);
$mijn_rechthoek = new mijnrechthoek(10,8);

echo $vierkant->berekenOppervlakte();
"<br>";
echo $cilinder->berekenOppervlakte();
"<br>";
echo $mijn_vierkant->berekenOppervlakte();
"<br>";
echo $mijn_rechthoek->berekenOppervlakte();

?>
