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

$conexao = pg_connect("host=localhost dbname=cadastro_family_care user=postgres password=123");
if ($conexao) {
    $query = "SELECT * FROM usuarios";
    $result = pg_query($conexao, $query);

    while ($linha = pg_fetch_array($result)) {
        echo $linha["nome_completo"] . " - " . $linha["cpf"] . " " . $linha["email"] . " " . $linha["senha"] . "<br>";
    }

    pg_free_result($result);
    pg_close($conexao);
} else {
    echo "Falha na conexão com o banco de dados.";
}



    ?>
    <a href="FRONT_END/IndexCadastro.php">eee</a>
    <a href="IndexCadastro.php">Voltar</a>

</body>
</html>