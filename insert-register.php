

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



//    insert 

        $sql = "INSERT INTO users(Full_name, Phone, Email, password) VALUES (:Full_name, :Phone, :Email, :password);";

        $data= [
                ':Full_name' => $_POST['name'],
                ':Phone' => $_POST['tel'],
                ':Email' => $_POST['mail'],
                'password'=> $_POST['pw']
        ];

        $stmt = $pdo->prepare($sql);
        if ($stmt->execute($data)){
                echo "<p> <script>alert('Ajout Effectue avec success')</script>";
        }
        else{
                echo "<p> <script>alert('Ajout Echoue')</script>";
                
        }
  
    ?>


