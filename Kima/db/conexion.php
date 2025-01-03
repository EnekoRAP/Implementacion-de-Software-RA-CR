<?php

class Conexion {

    function conDB {
        $host = 'localhost';
        $db = 'Kima';
        $user = 'db_connect';
        $psswd = 'KeebleMayen26';
        $port = 1433;

        try {
            $conn = new PDO("sqlsrv:Server=$host,$port;Database=$db", $user, $psswd);
            echo "Conexión a base de datos realizada correctamente. ";
        } catch (PDOException $exp) {
            echo ("No se pudo realizar la conexión con la base de datos: $db, ERROR: $exp");
        }

        return $conn;
    }

}

?>