<?php
include '../includes/conexao.php';
    if(!empty($_POST['btn-login'])) {
        if(!empty($_POST["usuario"]) and !empty($_POST["senha"])) {
            $usuario = $conn->real_escape_string($_POST["usuario"]);
            $senha = $conn->real_escape_string($_POST["senha"]);
            $sql_code = "SELECT * FROM tb_clientes WHERE usuario = '$usuario' and senha ='$senha'";
            $sql_query = $conn->query($sql_code) or die("falha".$conn->error);
            $qtd = $sql_query->num_rows;
            if ($qtd == 1){
                $usuario = $sql_query->fetch_assoc();
                
                if(!isset($_SESSION)){
                    session_start();
                }
                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];
                header('Location:../index.php');
            }

        }else {
            echo 'Campos vazios';
        }
    }
?>