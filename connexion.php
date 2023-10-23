<?php 


$serverName= "localhost";
$userName= "root";
$password= "";
$dbName= "convert";

//Connect to database
try{
    $pdo = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);

    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection Success<br>";
}
catch(PDOException $e){
    echo 'Erroro In Connection' . $e -> getMessage();
};


?>
 





