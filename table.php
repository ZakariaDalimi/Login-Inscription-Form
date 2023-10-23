<?php 

//Create Table

try{
    $sql= "CREATE TABLE users(
            id INT NOT NULL  PRIMARY KEY AUTO_INCREMENT,
            Full_name VARCHAR(50) NOT NULL,
            Phone INT(20) NOT NULL,
            Email VARCHAR(50) NOT NULL,
            password VARCHAR(15) NOT NULL
    )";

    $pdo->exec($sql);
    echo 'Table Created<br>';
}
catch(PDOException $e){
    die("error :" . $e-> getMessage());

}




?>