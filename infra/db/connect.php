<?php
//informações do banco
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "sistema_simples_m1";


    //faz conexão com o banco de dados
    $conn = new mysqli($host,$user,$pass,$db);


    //verifica se conecto
    if($conn->connect_error){
        die("Erro na conexão!");

    }else{
        echo "<script>console.log('Banco conectado com sucesso!')</script>";
    };

?>