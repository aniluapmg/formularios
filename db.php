<?php
// Configuraión necesaria para acceder a la base.
$hostname = "localhost";
$usuariodb = "root";
$passworddb = "andes1989?";
$dbname = "fondas";

try{

    $conn = new PDO("mysql:host=$hostname;dbname=$dbname", $usuariodb, $passworddb);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conexion exitosa";

} catch(PDOException $e) {
    echo "Connection failed" .$e->getMessage();
}





// function conn(){
//     $hostname = "localhost";
//     $usuariodb = "root";
//     $passworddb = "andes1989?";
//     $dbname = "fondas";

//     // Conexión con el servidor.
//     $conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);
//     return $conectar;
// }

?>