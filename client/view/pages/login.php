<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>
    <!-- HTML Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Marley de S. Santos">
    <meta name="description" content="Faça Login no Taskys - Gerencia suas tarefas">
    <meta name="keywords" content="Taskys, Tarefas, Colaboratividade, Aplicativo Web de Gestão de Tarefas, Organizador">

    <!-- Color scheme -->
    <meta name="theme-color" content="#f9D252">

    <!-- Styles -->
    <link rel="stylesheet" href="../assets/css/login.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">

    <!-- Title -->
    <title>Login no Taskys</title>
</head>

<body>
    <div class="container">
        <div class="image">
            <img src="../assets/images/people.png" alt="">
        </div>

        <div class="login">
            <div class="logotipo">
                <img src="../assets/images/banner.png" alt="Logotipo Tasky">
            </div>

            <div class="box-login">
                <form action="" method="post">
                    <div class="title">
                        <h2>Login</h2>
                    </div>

                    <div class="inputs">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" placeholder="seu_email@email.com" required>
                    </div>

                    <div class="inputs">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
                    </div>

                    <div class="inputs">
                        <button type="submit">Entrar</button>
                    </div>

                    <div class="forgot">
                        <a href="#">Esqueci minha senha</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="copy">
        <p>&copy; 2024. Todos os direitos reservados. <a href="https://github.com/MarleyS439" target="_blank">Marley de S. Santos</a></p>
    </div>
</body>

</html>