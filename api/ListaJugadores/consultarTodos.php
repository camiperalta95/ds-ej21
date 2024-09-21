<?php

header('Content-Type: application/json');

require_once 'modelosRespuestas/consultarTodosRespuesta.php';
require_once '../../modelo/Club.php';
require_once '../../modelo/Jugador.php';


$resp= new ConsultarTodosRespuesta();

$c1= New Club();
$c1-> Nombre= 'Paris Saint-Germain Football Club';
$c1-> Fundacion= '2 de agosto de 1970 (52 años)';
$c1-> Presidente= 'Nasser Al-Khelaifi';

$c2= New Club();
$c2-> Nombre = 'Manchester United Football Club';
$c2-> Fundacion= '5 de marzo de 1878 (144 años)';
$c2-> Presidente= 'Joel Glazer';



$j1= New Jugador();
$j1->Id= '1';
$j1->Nombre= 'Liones Andres Messi';
$j1->Apodos= 'La pulga, El mesias, El d10s';
$j1->Altura= '1,70m';
$j1->Club=$c1;

$j2= New Jugador();
$j2->Id= '2';
$j2->Nombre= 'Lisandro Martinez';
$j2->Apodos= 'Licha';
$j2->Altura= '1,75';
$j2->Club=$c2;


$resp->ListaJugadores[]=$j1;
$resp->ListaJugadores[]=$j2;

echo json_encode ($resp);