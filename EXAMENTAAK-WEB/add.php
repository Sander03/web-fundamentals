<?php
    include "database.php";

    $database = new Database();
    $database->createConnection();

    
    $Firstname = $_GET["firstname"];
    $Lastname = $_GET["lastname"]; 
    $Gender = $_GET["gender"];
    $Description = $_GET["description"];

    $sqlGet = "select * from students;";
    $User = $database->getQuery($sqlGet);

    $sqlInsert = "insert into students (firstname, lastname, gender, description) values ('$Firstname', '$Lastname', '$Gender');";
    $database->InsertQuery($sqlInsert);
?>