<?php 
    require_once ('connection.php');
    session_start();
    $messageName = $_POST["name"];
    $messageData = $_POST["text"];

    if(empty($messageName)){
        $_SESSION['msgNameErr'] = true;
    }elseif(empty($messageData)){
        $_SESSION['msgDataErr'] = true;
    }
    else{
        $_POST['time'] = time();
        $sql = "INSERT INTO comments (name, text,time) VALUES (:name, :text , :time)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute($_POST);
        $_SESSION['oneuser'] = "ready";
    }
    Location: header('Location: index.php');
?>