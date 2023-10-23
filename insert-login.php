
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






// Login Verification

    $mail = $_POST['mail'];
    $password = $_POST['pw'];

    $sql = "SELECT * FROM users WHERE Email ='$mail' AND password ='$password' ";
    $reponse = $pdo->query($sql);
    if ($donnees = $reponse->fetch()) {
            header('Location: index.html');
            echo "alert(Welcome to our page )";
       exit();
        }
     else {
        echo "
        <script>
        alert('login or Password is False')
        </script>";
    }

 

?>