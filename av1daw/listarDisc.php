<?php include_once "connect.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Listar Disciplina</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav id="menu-h">
        <ul>
            <li> <a href="inserirDiscIndex.php">Cadastrar Disciplina</a> </li>
            <li> <a href="alterarDiscIndex.php">Alterar Disciplinas</a></li>
            <li> <a href="excluirDiscIndex.php">Excluir Disciplinas</a> </li>
            <li> <a href="listarDisc.php">Lista Disciplinas</a></li>
            <li> <a href="importarUsuariosIndex.php">Cadastrar Usuários</a> </li>
            <li><a href="listarUsuarios.php">Listar Usuários</a></li>
        </ul>
    </nav>
        <footer>
                
        </footer>
    <h3>Lista de disciplinas: </h3>
    <div>
    <?php 
        $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
        mysqli_select_db($conn, '$dbname');
        $sql = "SELECT * FROM disciplina ";
        $result = mysqli_query($conn, $sql);

        $alterar = $conn->query($sql);

        while($linha = $alterar->fetch_assoc()){
            echo "<br> Id: " . $linha["id"];
            echo "<br>Nome Disciplina: " . $linha["nomeDisc"];
            echo "<br>Periodo: " . $linha["periodo"];
            echo "<br>Id do Pre-requisito: " . $linha["idPreRequisito"];
            echo "<br>Creditos: " . $linha["creditos"];
        }
    
    ?>

    </div>
</body>
</html>