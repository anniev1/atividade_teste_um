<?php
// Inicia a sessão do usuário
session_start();


// Importa a conexão com o banco de dados
if(!isset($_SESSION["usuario"])){
// Redireciona para a tela de login caso não esteja autenticado  
    header("Location: ../index.php");
    exit();
}
// Importa a conexão com o banco de dados
include("../infra/db/connect.php");


// Verifica se o formulário foi enviado
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Recebe os dados digitados no formulário
    $novoUsuario = $_POST['usuario'];
    $novaSenha = $_POST['senha'];

    // Comando SQL para cadastrar um novo usuário
    $sql = "INSERT INTO usuarios (usuario,senha) 
    VALUES ('$novoUsuario','$novaSenha')";  
  // Executa o comando no banco de dados
    if($conn->query($sql) === TRUE){
        echo "<script> alert('Usuário cadastrado com sucesso!')</script>";
    }else{
        echo "<script> alert('Erro ao cadastrar')</script>";
    }

};

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <!-- Exibe o nome do usuário logado -->
    <h3>Bem-Vindo! <?php echo $_SESSION["usuario"]; ?></h3>
     <!-- Link para encerrar a sessão -->
    <a href="logout.php"> Sair</a>

    <hr>

    <!-- Formulário para cadastrar novos usuários -->
    <h4>Cadastro de Novo Usuário.</h4>
    <form method="POST">
        <label>Usuário:</label>
        <input type="text" name="usuario">
        <br>
        <label>Senha:</label>
        <input type="password" name="senha">
        <br>
        <?php
         // Exibe mensagem de erro caso exista
            if(isset($erro)){
                echo $erro;
            };
        
        ?>
        <br>
        <button type="submit">Cadastrar</button>
    </form>
    <hr>
    <?php
    
     // Importa a tabela que lista todos os usuários cadastrados
    include("components/table.php")

    ?>



</body>
</html>