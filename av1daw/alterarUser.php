<?php include_once "connect.php"; ?>
<html>
<body>
    
    <?php
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $tipo = $_POST['tipo'];
    $perfil = $_POST['perfil'];

    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    mysqli_select_db($conn, '$dbname');
    $sql = "UPDATE `user` SET `nome`='$nome',`email`='$email',`senha`='$senha',`tipo`= '$tipo', `perfil`='$perfil' WHERE id='$id' ";
    $result = mysqli_query($conn, $sql);
    $alterar = $conn->query($sql);



    if($result){
        echo "<script> alert('Dados alterados'); window.location = 'alterarUserIndex.php'</script>";
    }else{
        echo "Deu erro:" . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);

    ?> 
    
</body>
</html>