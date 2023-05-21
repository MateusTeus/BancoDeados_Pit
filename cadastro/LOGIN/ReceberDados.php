<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php 
   // require_once("Login.php");






    $cpf_login = $_POST["cpf_login"];
    $senha_login = $_POST["senha_login"];




// Conectar-se ao banco de dados

$conexao_login = pg_connect("host=localhost dbname=cadastro_family_care user=postgres password=123");

// Verificar se a conexão foi estabelecida com sucesso
if (!$conexao_login) {
    die("Falha na conexão com o banco de dados");
}

// Executar a consulta SQL para buscar o registro correspondente ao CPF fornecido
$query = "SELECT senha FROM usuarios WHERE cpf = '$cpf_login'";
$result = pg_query($conexao_login, $query);

// Verificar se a consulta foi executada com sucesso
if ($result) {
    // Verificar se há um registro retornado pela consulta
    if (pg_num_rows($result) > 0) {
        $row = pg_fetch_assoc($result);
        $senha_armazenada = $row['senha'];

        // Comparar a senha fornecida pelo usuário com a senha armazenada
        if ($senha_login === $senha_armazenada) {
            // A senha é válida
            echo "Login bem-sucedido!";
            header("Location: PaginaSucesso.php");
        exit();
        } else {
            // Senha incorreta
            echo "Senha incorreta!";
        }
    } else {
        // CPF não encontrado no banco de dados
        echo "CPF não encontrado!";
    }
} else {
    // Erro na execução da consulta
    echo "Erro na consulta: " . pg_last_error($conexao_login);
}
// Fechar a conexão com o banco de dados
pg_close($conexao_login);
?>


    <a href="IndexLogin.php">Voltar</a>
</body>
</html>


