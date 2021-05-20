<?php include_once "connect.php"; ?>
<html>
<head>
    <title>Pagina de alteracao de usuarios</title>
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


    <form action="alterarUser.php" method="POST">
        Id de Usuario: <input type="text" name="id" ><br>
        Novo Nome Usuario: <input type="text" name="nome" ><br>
        Novo Email : <input type="text" name="email" ><br>
        Nova Senha: <input type="text" name="senha" ><br>
        Novo Tipo: <input type="text" name="tipo" ><br>
        Novo Perfil: <input type="text" name="perfil" ><br>
        <input type="submit">
    </form>
    
    <div>
    <?php 
        $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
        mysqli_select_db($conn, '$dbname');
        $sql = "SELECT * FROM user ";
        $result = mysqli_query($conn, $sql);

        $alterar = $conn->query($sql);

        while($linha = $alterar->fetch_assoc()){
            echo "<br> Id: " . $linha["id"];
            echo "<br>Nome Usuario: " . $linha["nome"];
            echo "<br>Email: " . $linha["email"];
            echo "<br>Senha: " . $linha["senha"];
            echo "<br>Tipo: " . $linha["tipo"];
            echo "<br>Perfil: " . $linha["perfil"];
        }
    
    ?>

    </div>


</body>
</html>