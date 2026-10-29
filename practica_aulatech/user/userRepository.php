<?php
    require_once __DIR__ '/../connection.php';

    function getUser($userName){
        $statement = $db->prepare("SELECT * FROM users WHERE username LIKE :userName");
        $statement->bindParam(':userName', $userName, PDO::PARAM_INT); //el parámetro con el tipo no es obligatorio
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);
        return $user;
    };