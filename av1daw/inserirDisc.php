<?php include_once "connect.php"; ?>
<html>
<body>
    
    <?php
    $nomeDisc = $_POST['nomeDisc'];
    $periodo = $_POST['periodo'];
    $idPreRequisito = $_POST['idPreRequisito'];
    $creditos = $_POST['creditos'];

    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

    mysqli_select_db($conn, '$dbname');
    $sql = "INSERT INTO disciplina (nomeDisc, periodo, idPreRequisito, creditos) VALUES ('$nomeDisc','$periodo','$idPreRequisito','$creditos')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "<script> alert('Dados salvo'); window.location = 'inserirDiscIndex.php'</script>";
    }else{
        echo "Deu erro:" . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);

    ?> 
    
</body>
</html>