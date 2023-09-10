<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login - Cupons Ninja</title>
</head>
<body>
    <form action="../actions/login_cliente.php" method="POST">
    <div class="main-login">
        <div class="left-login">
            <h1>Faça login <br> e economize!</h1>
            <img src="../img/ninjaA.svg" class="left-login-image" alt="Ninja">
            
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>
                <div class="textfield">
                    <label for="email">Usuário</label>
                    <input type="text" name="usuario" placeholder="Digite seu email">
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Digite sua senha">
                </div>
                <input type="submit" name="btn-login" value="Login" class="btn-login">
                <!-- <button class="btn-login" name="btn-login" type="submit" >Login</button> -->
                <p>Não tem conta? Clique <a href="cad_form_cliente.php">aqui!</a></p>
            </div>

        </div>
    </div>
    </form>   
</body>
</html>