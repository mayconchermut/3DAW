<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Prova DAW</title>
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
    <form action="inserirDisc.php" method="POST">
        Nome Disciplina: <input type="text" name="nomeDisc" ><br>
        Periodo : <input type="text" name="periodo" ><br>
        Id Pré-Requisito: <input type="text" name="idPreRequisito" ><br>
        Creditos: <input type="text" name="creditos" ><br>
        <input type="submit">
    </form>
</body>
</html>