<?php

include "Aerolineas.php";
include "Vuelos.php";
include "Aeropuerto.php";
include "Persona.php";

$aerolinea1 = new Aerolinea("JS", "Jet Smart");
$aerolinea2 = new Aerolinea("AA", "Aerolineas Argentina");

$persona1 = new Persona("Dana", "Garcia", "Juan b justo 34", "Dana@gmail.com", 2994851235);
$persona2 = new Persona("Jose", "Fito", "Ceferino Namuncura 1133", "jose1133@gmail.com", 2996902894);

$vuelo1 = new Vuelo("1", 50000, "2025-05-05", "Neuquen", "13:55", "12:40", 130, 10, $persona1);
$vuelo2 = new Vuelo("2", 75000, "2025-05-12", "Buenos aires", "14:00", "11:00", 200, 50, $persona1);
$vuelo3 = new Vuelo("3", 125999, "2025-04-29", "Lima", "22:00", "13:00", 300, 25, $persona2);
$vuelo4 = new Vuelo("4", 500293, "2025-07-22", "Miami", "01:00", "10:00", 400, 100, $persona2);

$aerolinea1->setColeccionVuelos([$vuelo1, $vuelo2]);
$aerolinea2->setColeccionVuelos([$vuelo3, $vuelo4]);

$aeropuerto = new Aeropuerto("Aeropuerto Ezeiza", "Fiumbala 35",[$aerolinea1, $aerolinea2]);

$venta = $aeropuerto->ventaAutomatica(3, "2025-05-12", "Buenos aires");
echo $venta;

$promedio = $aeropuerto->promedioRecaudadoXAerolinea($aerolinea1);
echo $promedio;