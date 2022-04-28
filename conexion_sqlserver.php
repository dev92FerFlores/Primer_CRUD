<?php

//configuracion de os datos de acceso a la DB
$dbuser = "FLOWERSK\SQLEXPRESS";
$userpass = "California";

$dsn = "sqlsrv:Server=FLOWERSK\\SQLEXPRESS;Database=notas_php"; $dbuser; $userpass;

try{
    //crear conexion a sql server
    $conn = new PDO($dsn);
//Mostrar mensajesi la conexion es correcta
if($conn){
    echo "Conectado a la DB correctamente";
}

} catch (PDOException $e){
//Si hay error en la conexion mostrar mensaje 
echo $e->getMessage();

}