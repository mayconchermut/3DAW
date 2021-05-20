<?php include_once "connect.php"; ?>
<html>
<body>
    
    <?php
    $id = $_POST['id'];
    $nomeDisc = $_POST['nomeDisc'];
    $periodo = $_POST['periodo'];
    $idPreRequisito = $_POST['idPreRequisito'];
    $creditos = $_POST['creditos'];

    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    mysqli_select_db($conn, '$dbname');
    $sql = "DELETE FROM `disciplina` WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $alterar = $conn->query($sql);



    if($result){
        echo "<script> alert('Disciplina excluida'); window.location = 'excluirDiscIndex.php'</script>";
    }else{
        echo "Deu erro:" . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);

    ?> 
    
</body>
</html>