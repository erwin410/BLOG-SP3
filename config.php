<?php

function connect() {
    $mysqli = new mysqli("192.168.64.2", "user1", "", "social");
    if ($mysqli->connect_errno) {
        echo "Problème de connexion à la base de données !";
        return false;
    }
    return $mysqli;
}


