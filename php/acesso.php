<?php 
    
    include_once "script.php";
    session_start();
    
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_SPECIAL_CHARS);

    foreach ($acounts as $acount) {
        if ($acount["email"] == $email && $acount["senha"] == $senha) {
            $_SESSION["logged"] = true;
            $_SESSION["nome"] = $acount["nome"];
            $_SESSION["nivel"] = $acount["nivel"];
            header("location:../home.php");
            die();
        }
    }

    session_destroy();
    header("location:../index.php?msg=Usuario ou Senha Inválidos!");

?>