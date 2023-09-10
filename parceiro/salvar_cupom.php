<?php

include '../includes/conexao.php';

if(!empty($_POST['btn-salvar-cupom'])){

    $descricao = $conn->real_escape_string($_POST["descricao"]);
    $valor = $conn->real_escape_string($_POST["valor"]);
    $validade = $conn->real_escape_string($_POST["validade"]);
    $descricao = $conn->real_escape_string($_POST["descricao"]);
    $fornecedor = $conn->real_escape_string($_POST["fornecedor"]);
   
}
    
    $sql = "INSERT INTO cupom (descricao,valor,validade,fornecedor)
    VALUES ('$descricao', '$valor', '$validadee','$fornecedor')";
    
    if ($conn->query($sql) === TRUE) {
      header('Location:../../index.php');
      echo '<script type="text/JavaScript">alert("Deu certo!");</script>';
      
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
?>


