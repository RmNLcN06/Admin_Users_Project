<?php 
    // $host = "localhost";
    // $port = 3306;
    // // $dbname = "role_bdd";
    $username = "root";
    $password = "";

    try 
    {
        $conn = new PDO("mysql:host=localhost;dbname=role_bdd;charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
        die();
    }

?>