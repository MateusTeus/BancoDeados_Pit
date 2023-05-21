<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lg.css">
    <title>Cadastro</title>
</head>
<body>
    <header>
        <h1>LOGO</h1>
        <nav>
          <ul>
            <li><a href="#">Página 1</a></li>
            <li><a href="#">Página 2</a></li>
            <li><a href="#">Página 3</a></li>
          </ul>
        </nav>
      </header>

<section>
   
      <form action="ReceberDados.php" method="post">
              <h2>LOGIN</h2>
              <div class="form-group">
                <label for="cpf_login">CPF</label>
                <input type="text" id="cpf" name="cpf_login" placeholder="Digite seu CPF" required>
              </div>
              <div class="form-group">
                <label for="senha_login">Senha</label>
                <input type="password" id="senha" name="senha_login" placeholder="Digite sua senha" required>
              </div>
              <button type="submit">LOGAR</button>
            </form>

    </section>
 


</body>
</html>