<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleIndex.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="formulario">
            <?php 
                $msg = isset($_GET["msg"])?$_GET["msg"]:"";
                
                if ($msg != "") {
                    echo '<p class="msgErro">'. $msg. '</p>';
                }
            ?>
            <h1>Sign In</h1>
            <form action="php/acesso.php" method="post">
                <div class="input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="nome@gmail.com">
                </div>
                <div class="input">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" placeholder="Password">
                    <div class="showPass">
                        <input type="checkbox" name="show" id="show">
                        <p>Mostrar Senha</p>
                    </div>
                </div>
                
                <input type="submit" value="Entrar">
            </form>
            <div class="social">
                <ul>
                    <a href="https://www.instagram.com/nick.yoshizawa/" target="_blank">
                        <li>
                            <img src="resources/instagram.png" alt="instagram">
                        </li>
                    </a>
                    <a href="https://github.com/NickYoshizawa" target="_blank">
                        <li>
                            <img src="resources/github.png" alt="github">
                        </li>
                    </a>
                    <a href="https://www.linkedin.com/in/nicolasyoshizawa" target="_blank">
                        <li>
                            <img src="resources/linkedin.png" alt="linkdin">
                        </li>
                    </a>
                    <a href="mailto:nicolas.yoshizawa2005@gmail.com" target="_blank">
                        <li>
                            <img src="resources/mail.png" alt="mail">
                        </li>
                    </a>
                </ul>
            </div>
        </div>
        <div class="img"></div>
    </main>
</body>
<script>
    let btn = document.getElementById('show')
    btn.addEventListener('click', function () {
        let input = document.getElementById('senha')
        if (input.getAttribute('type') == 'password') {
        input.setAttribute('type', 'text')
        } else {
        input.setAttribute('type', 'password')
        }
    })
</script>
</html>