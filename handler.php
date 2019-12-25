<?php 
    require_once ('connection.php');
    
    
    $messageName = $_POST["name"];
    $messageData = $_POST["text"];

    $commentsArr = array($messageName,$messageData);
    $sql = "INSERT INTO comments (name, text) VALUES (:name, :text)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($_POST);
    Location: header('Location: index.php');
?>