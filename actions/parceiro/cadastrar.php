<?php
include '../../includes/conexao.php';

if(!empty($_POST['salvarParceiro'])){
    $cnpj = $conn->real_escape_string($_POST["cnpj"]);
    $nomefantasia = $conn->real_escape_string($_POST["nomefantasia"]);
    $razaosocial = $conn->real_escape_string($_POST["razaosocial"]);
    $endereco = $conn->real_escape_string($_POST["endereco"]);
    $numero = $conn->real_escape_string($_POST["numero"]);
    $bairro = $conn->real_escape_string($_POST["bairro"]);
    $cep = $conn->real_escape_string($_POST["cep"]);
    $estado = $conn->real_escape_string($_POST["estado"]);
    $usuario = $conn->real_escape_string($_POST["usuario"]);
    $senha = $conn->real_escape_string($_POST["senha"]);    
    $celular = $conn->real_escape_string($_POST["celular"]);
    $email = $conn->real_escape_string($_POST["email"]);
    $categoria = $conn->real_escape_string($_POST["categoria"]);  
    $plano = $conn->real_escape_string($_POST["plano"]);     
}
    
    $sql = "INSERT INTO tb_parceiros (cnpj,nome_fantasia,razao_social,endereco,numero,bairro,cep,estado,usuario,senha,celular,email,categoria,plano)
    VALUES ('$cnpj', '$nomefantasia', '$razaosocial','$endereco','$numero','$bairro','$cep','$estado','$usuario','$senha','$celular','$email','$categoria','$plano')";
    
    if ($conn->query($sql) === TRUE) {      
      header('Location:../../sucesso_cadastro.php');

    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
?>