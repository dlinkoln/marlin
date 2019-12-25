<?php 
    require_once ('connection.php');
    
    
    echo $messageName = $_POST["name"];
    echo $messageData = $_POST["text"];

    $commentsArr = array($messageName,$messageData);
    $sql = "INSERT INTO comments (name, text) VALUES (:name, :text)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($_POST);
    Location: header('Location: index.php');
?>