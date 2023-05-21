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
    require_once("cadastro.php");





    $nome = $_POST["nome_completo"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];


 

$cadastro = new Cadastro($nome, $cpf, $email, $senha);
$resultado = $cadastro->salvar();

echo $resultado;

    ?>

    <a href="IndexCadastro.php">Voltar</a>
</body>
</html>