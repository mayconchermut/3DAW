<?php include_once "connect.php"; ?>
<?php
    $conn = new mysqli("localhost", "root", "", "av1daw");
    mysqli_set_charset($conn, "utf8");

    $arquivo = $_FILES["file"]["tmp_name"];
    $nome = $_FILES["file"]["name"];

    $ext = explode(".", $nome);
    $extensao = end($ext);

    if($extensao != "csv"){
     echo "extensão inválida";
   } else {
        $objeto = fopen($arquivo, 'r');

        while (($dados = fgetcsv($objeto, 1000, ";")) !== FALSE ){
            $nome = utf8_encode($dados[0]);
            $email = utf8_encode($dados[1]);
            $senha = utf8_encode($dados[2]);
            $tipo = utf8_encode($dados[3]);
            $perfil = utf8_encode($dados[4]);

            $result = $conn->query("INSERT INTO user (nome, email, senha, tipo, perfil) VALUES ('$nome', '$email', '$senha', '$tipo', '$perfil') ");

        }
        if($result){
            echo "<script> alert('Dados inseridos com sucesso'); window.location = 'importarUsuariosIndex.php'</script>";
        }else{
            echo "Erro ao inserir dados";
        }
    } 
?>