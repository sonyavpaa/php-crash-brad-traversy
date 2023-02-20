<?php

$host = "mysql";
$dbname = "php-website";
$charset = "utf8";
$port = "3306";



try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=$charset;port=$port",
       "root",
       getenv('DB_PASS'),
    );

    $persons = $pdo->query("SELECT * FROM Persons");

    echo '<pre>';
    foreach ($persons->fetchAll(PDO::FETCH_ASSOC) as $person) {
        print_r($person);
    }
    echo '</pre>';
}

catch (PDOException $e) {
    echo "DataBase Error: The user could not be added.<br>".$e->getMessage();
}