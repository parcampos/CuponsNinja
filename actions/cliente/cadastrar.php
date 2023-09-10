<?php
include '../../includes/conexao.php';

if(!empty($_POST['salvarCliente'])){
    $cpf = $conn->real_escape_string($_POST["cpf"]);
    $nome = $conn->real_escape_string($_POST["nome"]);
    $sobrenome = $conn->real_escape_string($_POST["sobrenome"]);
    $endereco = $conn->real_escape_string($_POST["endereco"]);
    $numero = $conn->real_escape_string($_POST["numero"]);
    $bairro = $conn->real_escape_string($_POST["bairro"]);
    $cep = $conn->real_escape_string($_POST["cep"]);
    $estado = $conn->real_escape_string($_POST["estado"]);
    $usuario = $conn->real_escape_string($_POST["usuario"]);
    $senha = $conn->real_escape_string($_POST["senha"]);    
    $celular = $conn->real_escape_string($_POST["celular"]);
    $email = $conn->real_escape_string($_POST["email"]);       
}
    
    $sql = "INSERT INTO tb_clientes (cpf,nome,sobrenome,endereco,numero,bairro,cep,estado,usuario,senha,celular,email)
    VALUES ('$cpf', '$nome', '$sobrenome','$endereco','$numero','$bairro','$cep','$estado','$usuario','$senha','$celular','$email')";
    
    if ($conn->query($sql) === TRUE) {
      header('Location:../../index.php');
      echo '<script type="text/JavaScript">alert("Deu certo!");</script>';
      
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
?>