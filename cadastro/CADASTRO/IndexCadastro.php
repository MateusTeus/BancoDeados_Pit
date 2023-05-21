<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
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
   
      <form action="salvar_dados.php" method="post">
              <h2>Cadastro</h2>
              <div class="form-group">
                <label for="nome">Nome completo</label>
                <input type="text" id="nome" name="nome_completo" placeholder="Digite seu nome completo"  required autocomplete="off">
              </div>
              <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" required autocomplete="off">
              </div>
              <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required autocomplete="off">
              </div>
              <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required autocomplete="off">
              </div>
              <button type="submit">Cadastrar</button>
            </form>

    </section>
 

    <a href="listarCadastros.php">Listar Cadastros</a>

</body>
</html>