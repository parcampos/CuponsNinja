<?php
include '../includes/conexao.php';
$query ="SELECT titulo,id FROM tb_planos";
$result = $conn->query($query);
if($result->num_rows> 0){
  $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cad_form.css">
    <title>Cadastro de Parceiros</title>
    <script>
        function confereSenha() {
            const senha = document.querySelector('input[name=senha]');
            const csenha = document.querySelector('input[name=csenha]');

            if (csenha.value === senha.value) {
                csenha.setCustomValidity('');                
            }else {
                csenha.setCustomValidity('Senhas não conferem!');
            }
        }

        function senhaOK() {
            alert('Senhas conferem')
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="form-image">
            <img src="../img/ninja-desk.svg" alt="">
        </div>
        <div class="form">
            <form action="../actions/parceiro/cadastrar.php" method="POST" onsubmit="senhaOK()" accept-charset="UTF-8" >
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se, parceiro!</h1>
                    </div>                    
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="nomefantasia">Nome Fantasia</label>
                        <input id="nomefantasia" type="text" name="nomefantasia" placeholder="Nome fantasia" required>
                    </div>
                    <div class="input-box">
                        <label for="razaosocial">Razão Social</label>
                        <input id="razaosocial" type="text" name="razaosocial" placeholder="Razão Social" required>
                    </div>
                    <div class="input-box">
                        <label for="cnpj">CNPJ</label>
                        <input id="cnpj" type="text" name="cnpj" placeholder="Digite CNPJ" required>
                    </div>
                    <div class="input-box">
                        <label for="endereco">Endereço</label>
                        <input id="endereco" type="text" name="endereco" placeholder="Rua, avenida, alameda ..." required>
                    </div>
                    <div class="input-box">
                        <label for="numero">Número</label>
                        <input id="numero" type="text" name="numero" placeholder="Número ou S/N" required>
                    </div>
                    <div class="input-box">
                        <label for="bairro">Bairro</label>
                        <input id="bairro" type="text" name="bairro" placeholder="Bairro" required>
                    </div>
                    <div class="input-box">
                        <label for="cep">CEP</label>
                        <input id="cep" type="text" name="cep" placeholder="CEP" required>
                    </div>
                    <div class="input-box">
                        <label for="estado">Estado</label>
                        <input id="estado" type="text" name="estado" placeholder="" required>
                    </div>
                    <div class="input-box">
                        <label for="celular">Celular</label>
                        <input id="celular" type="text" name="celular" placeholder="Telefone" required>
                    </div>
                    <div class="input-box">
                        <label for="usuario">Nome de Usuário</label>
                        <input id="usuario" type="text" name="usuario" placeholder="Digite seu nome de usuário" required>
                    </div>
                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input id="senha" type="password" name="senha" placeholder="Senha" required onchange='confereSenha();'>
                    </div>
                    <div class="input-box">
                        <label for="csenha">Confirmar senha</label>
                        <input id="csenha" type="password" name="csenha" placeholder="Confirmar senha" required onchange='confereSenha();'>
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>
                    <div class="input-box">
                        <label for="categoria">Categoria</label>
                        <input id="categoria" type="text" name="categoria" placeholder="Escolha sua categoria" required>
                    </div>
                    <!-- <div class="input-box">
                        <label for="plano">Plano</label>
                        <input id="plano" type="text" name="plano" placeholder="Escolha seu plano" required>
                    </div>                     -->
                    <div class="input-box">
                        <label for="plano">Plano</label>
                        <select name="plano" id="plano">
                            
                            <?php foreach($options as $option){?>
                                <option value="<?php echo $option['id'] ?>"><?php echo $option['titulo']; ?></option>
                                <?php } ?>
                        </select>
                    </div>                
                </div>
                <div class="continue-button">
                    <input type="submit" value="Salvar" name="salvarParceiro">
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>