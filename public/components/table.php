
<h4>Usuários Cadastrados</h4>
<!-- tabela que exibira os usuario cadastrado -->
<table border="1" cellpadding="3">

    <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Senha</th>
        <th>Excluir</th>
        <th>Editar</th>
    </tr>

    <?php

    //consutar sql para buscar todos os usuarios da tabela 
    $sqlTodosUsuarios = "SELECT * FROM usuarios";

    //execultar a consulta no banco de dados 
    $resultadoTodosUsuarios = $conn->query($sqlTodosUsuarios);

    //Percorre cada registro retornado pela consulta
    while($linha = $resultadoTodosUsuarios->fetch_assoc()){

    //  fetch_assoc() transforma cada linha do resultado
    // em um array associativo usando os nomes das colunas
    
        echo " <tr>
                  <td>". $linha['id'] . "</td>
                    <td>". $linha['usuario'] . "</td>
                    <td>". $linha['senha'] . "</td>
                    <td> <a href='excluir.php?id=". $linha['id'] ."'> Excluir</td>
                    <td> <a href='editar.php?id=". $linha['id'] ."'> Editar</td>
                </tr>
       

    }
    
    ?>
   ";

    }
    
    ?>
    


</table>