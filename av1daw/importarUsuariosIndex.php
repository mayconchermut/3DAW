<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar Usuarios</title>
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

  <form action="importarUsuarios.php" method="POST" enctype="multipart/form-data" >
  
    <div class="form-group">
      <label >Upload Usuários</label><br>
      <input type="file" name="file"><br>
      <input type="submit">
    </div>
  </form>
  
</body>
</html>