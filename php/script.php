<?php 
    session_start();

    $acounts = array(
        array(  "email" => "joao@abc.com", 
                "senha" => "12456", 
                "nivel" => "admin",
                "nome" => "João"
            ),

        array(  "email" => "nicolas@abc.com", 
                "senha" => "123456", 
                "nivel" => "admin",
                "nome" => "Nicolas"
            ),

        array(  "email" => "juliano@abc.com", 
                "senha" => "89745", 
                "nivel" => "user",
                "nome" => "Juliano"
            ),
            
        array(  "email" => "margarida@abc.com", 
                "senha" => "1245Aef", 
                "nivel" => "user",
                "nome" => "Margarida"
            ),

        array(  "email" => "Biazikinha@hotmail", 
                "senha" => "puro", 
                "nivel" => "user",
                "nome" => "Beatriz"
            )
    );

    function verifyLogged(){
        if (!isset($_SESSION["logged"]) || $_SESSION["logged"] != true) {
            header("location:../index.html");
        }
    }
?>