<?php

function connect_db() {
    $mysqli = new mysqli("localhost", "user", "password", "database");
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL";
    }
    
    return $mysqli;
}

?>
