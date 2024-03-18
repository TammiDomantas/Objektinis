<?php
include'Skaicius.php';
$vienas = $_GET["vienas"];
$intpirmas = $_GET["intpirmas"];
$intgalinis = $_GET["intgalinis"];
$pirmprog = $_GET["pirmprog"];
$skirtumas= $_GET["skirtumas"];
$n = $_GET["n"];
$skaicius1 = new Skaicius();
$skaicius1->set($vienas,$intpirmas,$intgalinis,$pirmprog,$n,$skirtumas);
echo "Vienas skaicius: ";
echo $skaicius1->get_vienas();
echo "</br>";
$skaicius1->iteraciju_skaicius();
echo "Vieno skaiciaus iteracijos:";
echo $skaicius1->iteraciju_isvedimas();
echo "</br>";
echo "-----------------------------------------";
echo "</br>";
echo "Intervalo:";
echo "</br>";
$skaicius1->intervalo_skaiciavimas();
$skaicius1->intervalo_isvedimas();
echo "</br>";
echo"Aritmetines progresijos galinis skaicius: ";
$skaicius1->progresija();
$skaicius1->progresija_isvedimas();
?>