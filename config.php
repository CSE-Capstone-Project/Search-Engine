<?php

ob_start();

try {
    
    $con = new PDO("mysql:dbname=search-engine;host=localhost","root","password");
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage;
}

?>