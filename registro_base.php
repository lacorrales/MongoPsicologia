<?php

//guardar registros de login
require_once __DIR__ . '/vendor/autoload.php';

$mat= $_POST["matricula"];
$nom= $_POST["nombre"];
$carr= $_POST["carrera"];
$grup= $_POST["grupo"];
$sex= $_POST["sexo"];
$edad= $_POST["edad"];
$civil= $_POST["edocivil"];
$tel= $_POST["telefono"];
$corr= $_POST["correo"];


$collection = (new MongoDB\Client)->PSICOLOGIA->solicitud;

$insertOneResult = $collection->insertOne([
    'Matricula' => $mat,
    'Nombre' => $nom,
    'Carrera' => $carr,
    'Sexo' => $sex,
    'Edad' => $edad,
    'Estado Civil' => $civil,
    'Telefono' => $tel,
    'Email' => $corr,
    
]);

header("location: registro.php?enviado=true");
//printf("Se insertó %d documento(s)\n", $insertOneResult->getInsertedCount());



//var_dump($insertOneResult->getInsertedId());


?>