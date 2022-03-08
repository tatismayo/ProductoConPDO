<?php
require_once "config.php";

try {
    $mbd = new PDO('mysql:host=localhost;dbname=productos', USER_DB,PASSWORD_DB);
    foreach($mbd->query('SELECT * from producto') as $fila) {
        print_r($fila);
    }
    $mbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>