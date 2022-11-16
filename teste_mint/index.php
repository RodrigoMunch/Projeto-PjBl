<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login 1</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
  <div class='box'>
  <div class='wave -one'></div>
  <div class='wave -two'></div>
  <div class='wave -three'></div>
  </div>

    <div class="login-card">
      <table>
        <tr>
          <td><img src="imagens/logo_frAcademy.jpeg" class="logo"></td>
        </tr>
        <tr>
          <td>
            <h2 class="Login">Login</h2>
          </td>
        </tr>
      </table>
      <form class="login-form">
        <input type="text" placeholder="Usuário" />
        <input type="password" placeholder="Senha" />
        <table>
        <tr>
            <td colspan="2" style="text-align: center;">
                <input type="radio" value="aluno" name="type" required>
                Aluno
                <input type="radio" value="professor" name="type">
                Professor
            </td>
          </tr>
        </table>
        <h4>Não Possui Login? <a href="cadastro.php">Cadastre-se Aqui</a></h4>
        <div class="botoes">
          <button type="submit">ENTRAR</button>
          <button type="button" onclick="btnApagar()">APAGAR</button>
        </div>
        
      </form>
    </div>
  </body>
</html>