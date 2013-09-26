<?php

$paises = array();
$paises["Mexico"]= array("Guadalajara,", "Monterrey,", "Chihuahua,", "Sonora,", "Cancun.");
$paises["Japon"]= array("Tokio,", "Osaka,", "Nagasaki,", "Odaiba,", "Hiroshima.");
$paises["EU"]= array("Nueva York,", "San Fransisco,", "Nashville,", "Ohio,", "Massachusets.");
$paises["España"]= array("Florencia,", "Guadalajara,", "Nueva Galicia,", "Madrid,", "Barcelona.");
$paises["Argentina"]= array("Buenos Aires,", "Santa Fe,", "Rosario,", "Pilar,", "Banfield.");
$paises["Australia"]= array("Perth,","Sidney,", "Townsville,", "Adelaide,", "Geelong.");
$paises["Brazil"]= array("Rio de Janeiro,", "Sao Paolo,", "Brazilia,", "Porto Alegre,", "Bagre."); 
$paises["Colombia"]= array("Bogota,", "Cucuta,", "Cartajena,", "Barranquilla,", "Armenia.");
$paises["Canada"]= array("Ottawa,", "Toronto,", "Quebec,", "Halifax,", "Victoria.");
$paises["Italia"]= array("Roma,", "Milan,", "Venecia,", "Bolonia,", "Napoles.");

echo"<ul>";
foreach($paises as $pais => $ciudades){
	echo"<li>".$pais."<ul>";
	foreach($ciudades as $ciudad){
		echo"<li>".$ciudad."</li>";
	}
echo "</li></ul>";
}


?>