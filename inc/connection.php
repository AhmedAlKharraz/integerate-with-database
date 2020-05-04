<?php

try {   
    // Create a new object of a class to connect to db
    $db = new PDO("sqlite:".__DIR__."/database.db");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    var_dump($db);
} catch(Exception $e){
    //echo("Unable to connect to DB");
    echo $e -> getMessage();
    exit;
}


?>