
<?php
    session_start();

    if(!isset($_SESSION['nome'])){
        header("Location: login.php");
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Conta</title>
    <link rel="stylesheet" href="css/areaDoProfessor.css">
    <script src="conta.js"></script>
</head>
<body>
    <div class="container">
        <div class="sideMenu">
        <table>
                <tr>
                    <td>
                        <a href="homepage.php"><img src="imagens/logo_frAcademy.jpeg" alt="" class="logoFrAcademy"></a>
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="conta.php"><img src="imagens/default_user.png" alt="foto_default" class="sideImg"></a>
                        <br>
                        Minha Conta
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="homepage.php"><img src="imagens/foto_livro1.png" alt="" class="sideImg"></a>
                        <br>
                        Meus Cursos
                        <hr>
                    </td>
                </tr>
                <tr>
                <td>
                    <a href="areaDeBusca.php"><img src="imagens/lupa.png" alt="" class='sideImg'></a>
                        <br>
                        Busca
                        <hr>
                    </td>
                </tr>
                <tr>
            </table>
        </div>
        <div class="header">
            <h1>Minha Conta</h1>
            <hr>
        </div>
        <div class="main">
            <div class="centerRow">
                <img src="imagens/default_user.png" alt="foto_usuario" class="fotoUsuario">
            </div>
            <div class="centerRow"><?=$_SESSION['nome']?></div>
            <div class="centerRow">Dados Usuário</div>
            <div class="centerRow">
                <input type="button" value="Editar Perfil" class="button" onclick="editarBtn()">
                <input type="button" value="Sair da Sessão" class="button" onclick="encerrarBtn()">
            </div>
        </div>
        </div>
    </div>
    <script src="script/conta.js"></script>
</body>
</html>