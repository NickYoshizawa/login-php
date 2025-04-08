<?php 
    include_once "php/script.php";
    
    verifyLogged();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleHome.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <title>HOME</title>
</head>
<body>
    <main>
        <div class="header">
            <ul>
            <?php 
            echo "<li class='acesso'>" . "Nivel de Acesso: " . $_SESSION["nivel"] . "</li>";
            ?>
            <a href="php/logout.php"><li>Logoff</li></a>
            </ul>
        </div>
        <div class="welcome">
            <h1>WELCOME</h1>
            <?php 
            echo "<h2>" . $_SESSION["nome"] . "!" . "</h2>";
            ?>
        </div>
        <div class="textLorem">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id porro cumque hic, quam dignissimos ipsam nesciunt tenetur culpa velit. Minus, dolores veniam neque ipsa magni inventore, repudiandae officiis consectetur quis sit magnam cupiditate aliquid, et impedit nostrum corporis. Error pariatur quos a officiis culpa soluta natus aut eaque, consequatur ipsa?</p>
        </div>

    </main>

</body>
</html>